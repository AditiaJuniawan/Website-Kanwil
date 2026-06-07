<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class SultanBantenService
{
    protected string $baseUrl;
    protected string $apiKey;
    protected ?array $cachedDbData = null;
    protected bool $dbLoaded = false;

    public function __construct()
    {
        $this->baseUrl = 'https://sultan.ditjenpasbanten.com/api/stats.php';
        $this->apiKey = 'ditjenpas_banten_secret_key_2026';
    }

    public function getStats(int $uptId = null)
    {
        if ($uptId === null && $this->loadFromDb()) {
            return $this->cachedDbData['stats'];
        }

        return $this->request('stats', ['upt_id' => $uptId]);
    }

    public function getByUpt()
    {
        return $this->request('by_upt');
    }

    public function getTableData()
    {
        return $this->request('table');
    }

    public function getUptList()
    {
        return $this->request('list_upt');
    }

    public function getFullUptData()
    {
        if ($this->loadFromDb()) {
            return $this->cachedDbData['uptData'];
        }

        return $this->getFullUptDataFromApi();
    }

    protected function loadFromDb(): bool
    {
        if ($this->dbLoaded) {
            return $this->cachedDbData !== null;
        }

        $this->dbLoaded = true;

        try {
            if (!env('DB_SULTAN_DATABASE')) {
                return false;
            }

            // Test the database connection
            DB::connection('sultan')->getPdo();

            // Check if there is any data in data_penghuni table
            $hasData = DB::connection('sultan')
                ->table('data_penghuni')
                ->exists();

            if (!$hasData) {
                return false;
            }

            // Subquery to get the latest date for each UPT
            $maxDatesSubquery = DB::connection('sultan')
                ->table('data_penghuni')
                ->select('upt_id', DB::raw('MAX(tanggal) as latest_date'))
                ->groupBy('upt_id');

            // Query UPT list with statistics and coordinates directly using per-UPT latest date
            $upts = DB::connection('sultan')
                ->table('upt as u')
                ->leftJoinSub($maxDatesSubquery, 'max_date', function ($join) {
                    $join->on('u.id', '=', 'max_date.upt_id');
                })
                ->leftJoin('data_penghuni as dp', function ($join) {
                    $join->on('u.id', '=', 'dp.upt_id')
                         ->on('dp.tanggal', '=', 'max_date.latest_date');
                })
                ->select([
                    'u.id',
                    'u.nama_upt',
                    'u.alamat',
                    'u.kapasitas',
                    'u.latitude',
                    'u.longitude',
                    DB::raw("COALESCE(SUM(CASE WHEN dp.klasifikasi_pidana NOT IN ('WNA', 'Sakit Berkepanjangan', 'Lansia >70 tahun') THEN dp.tahanan_dewasa_laki + dp.tahanan_dewasa_perempuan + dp.tahanan_anak_laki + dp.tahanan_anak_perempuan ELSE 0 END), 0) as tahanan"),
                    DB::raw("COALESCE(SUM(CASE WHEN dp.klasifikasi_pidana NOT IN ('WNA', 'Sakit Berkepanjangan', 'Lansia >70 tahun') THEN dp.narapidana_dewasa_laki + dp.narapidana_dewasa_perempuan + dp.narapidana_anak_laki + dp.narapidana_anak_perempuan ELSE 0 END), 0) as narapidana"),
                    DB::raw("COALESCE(SUM(CASE WHEN dp.klasifikasi_pidana NOT IN ('WNA', 'Sakit Berkepanjangan', 'Lansia >70 tahun') THEN dp.tahanan_dewasa_laki + dp.tahanan_dewasa_perempuan + dp.tahanan_anak_laki + dp.tahanan_anak_perempuan + dp.narapidana_dewasa_laki + dp.narapidana_dewasa_perempuan + dp.narapidana_anak_laki + dp.narapidana_anak_perempuan ELSE 0 END), 0) as isi_penghuni")
                ])
                ->groupBy('u.id', 'u.nama_upt', 'u.alamat', 'u.kapasitas', 'u.latitude', 'u.longitude')
                ->orderBy('u.nama_upt')
                ->get()
                ->map(fn($u) => (array)$u)
                ->toArray();

            // Calculate aggregated statistics
            $totalUpt = count(array_filter($upts, fn($u) => ($u['isi_penghuni'] ?? 0) > 0));
            $totalTahanan = array_sum(array_column($upts, 'tahanan'));
            $totalNarapidana = array_sum(array_column($upts, 'narapidana'));
            $totalPenghuni = array_sum(array_column($upts, 'isi_penghuni'));
            $totalKapasitas = array_sum(array_column($upts, 'kapasitas'));
            $persenOverkapasitas = $totalKapasitas > 0 ? round((($totalPenghuni - $totalKapasitas) / $totalKapasitas) * 100, 1) : 0;

            $this->cachedDbData = [
                'uptData' => $upts,
                'stats' => [
                    'success' => true,
                    'data' => [
                        'statistics' => [
                            'total_upt' => $totalUpt,
                            'kapasitas' => $totalKapasitas,
                            'tahanan' => $totalTahanan,
                            'narapidana' => $totalNarapidana,
                            'isi_penghuni' => $totalPenghuni,
                            'persen_overkapasitas' => $persenOverkapasitas,
                        ]
                    ]
                ]
            ];

            return true;
        } catch (\Exception $e) {
            Log::warning("Sultan Banten direct database connection failed, falling back to API: " . $e->getMessage());
            $this->cachedDbData = null;
            return false;
        }
    }

    protected function getFullUptDataFromApi()
    {
        $list = $this->getUptList();
        if (!$list['success']) return [];

        $responses = Http::pool(fn ($pool) => 
            collect($list['data'])->map(fn ($upt) => 
                $pool->as($upt['id'])->get($this->baseUrl, [
                    'action' => 'stats',
                    'upt_id' => $upt['id'],
                    'api_key' => $this->apiKey
                ])
            )
        );

        $results = [];
        foreach ($list['data'] as $upt) {
            $id = $upt['id'] ?? null;
            if ($id && isset($responses[$id]) && ($responses[$id] instanceof \Illuminate\Http\Client\Response) && $responses[$id]->successful()) {
                $json = $responses[$id]->json();
                if (isset($json['success']) && $json['success'] && isset($json['data']['statistics'])) {
                    $results[] = [
                        'id' => $id,
                        'nama_upt' => $upt['nama'] ?? 'UPT',
                        'isi_penghuni' => $json['data']['statistics']['isi_penghuni'] ?? 0,
                        'kapasitas' => $json['data']['statistics']['kapasitas'] ?? 0,
                        'tahanan' => $json['data']['statistics']['tahanan'] ?? 0,
                        'narapidana' => $json['data']['statistics']['narapidana'] ?? 0,
                    ];
                }
            }
        }

        return $results;
    }

    protected function request(string $action, array $params = [])
    {
        $params['action'] = $action;
        $params['api_key'] = $this->apiKey;

        try {
            $response = Http::get($this->baseUrl, $params);
            
            if ($response->successful()) {
                return $response->json();
            }
        } catch (\Exception $e) {
            Log::error("Sultan Banten API Error: " . $e->getMessage());
        }

        return ['success' => false, 'data' => []];
    }
}

