<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class SultanBantenService
{
    protected ?array $cachedDbData = null;

    public function getStats()
    {
        $data = $this->getData();
        return $data ? $data['stats'] : null;
    }

    public function getFullUptData()
    {
        $data = $this->getData();
        return $data ? $data['uptData'] : [];
    }

    public function getData(): ?array
    {
        if ($this->cachedDbData !== null) {
            return $this->cachedDbData;
        }

        // Cache hasil query selama 30 menit (1800 detik)
        $this->cachedDbData = Cache::remember('sultan_banten_data', 1800, function () {
            return $this->queryFromDb();
        });

        return $this->cachedDbData;
    }

    public function clearCache(): void
    {
        Cache::forget('sultan_banten_data');
        $this->cachedDbData = null;
    }

    protected function queryFromDb(): ?array
    {
        try {
            if (!config('database.connections.sultan.database')) {
                return null;
            }

            // Test the database connection
            DB::connection('sultan')->getPdo();

            // Check if there is any data in data_penghuni table
            $hasData = DB::connection('sultan')
                ->table('data_penghuni')
                ->exists();

            if (!$hasData) {
                return null;
            }

            // Get target date (today) and fallback to latest date <= today if no records exist for today
            $targetDate = date('Y-m-d');
            $hasTodayData = DB::connection('sultan')
                ->table('data_penghuni')
                ->where('tanggal', $targetDate)
                ->exists();

            if (!$hasTodayData) {
                $targetDate = DB::connection('sultan')
                    ->table('data_penghuni')
                    ->where('tanggal', '<=', $targetDate)
                    ->max('tanggal') ?? $targetDate;
            }

            // Query UPT list with statistics and coordinates directly using the target date
            $upts = DB::connection('sultan')
                ->table('upt as u')
                ->leftJoin('data_penghuni as dp', function ($join) use ($targetDate) {
                    $join->on('u.id', '=', 'dp.upt_id')
                         ->on('dp.tanggal', '=', DB::raw("'$targetDate'"))
                         ->whereNotIn('dp.klasifikasi_pidana', ['WNA', 'Sakit Berkepanjangan', 'Lansia >70 tahun']);
                })
                ->select([
                    'u.id',
                    'u.nama_upt',
                    'u.alamat',
                    'u.kapasitas',
                    'u.latitude',
                    'u.longitude',
                    DB::raw("COALESCE(SUM(dp.tahanan_dewasa_laki + dp.tahanan_dewasa_perempuan + dp.tahanan_anak_laki + dp.tahanan_anak_perempuan), 0) as tahanan"),
                    DB::raw("COALESCE(SUM(dp.narapidana_dewasa_laki + dp.narapidana_dewasa_perempuan + dp.narapidana_anak_laki + dp.narapidana_anak_perempuan), 0) as narapidana"),
                    DB::raw("COALESCE(SUM(dp.tahanan_dewasa_laki + dp.tahanan_dewasa_perempuan + dp.tahanan_anak_laki + dp.tahanan_anak_perempuan + dp.narapidana_dewasa_laki + dp.narapidana_dewasa_perempuan + dp.narapidana_anak_laki + dp.narapidana_anak_perempuan), 0) as isi_penghuni")
                ])
                ->groupBy('u.id', 'u.nama_upt', 'u.alamat', 'u.kapasitas', 'u.latitude', 'u.longitude')
                ->orderBy('u.nama_upt')
                ->get()
                ->map(fn($u) => (array)$u)
                ->toArray();

            // Fetch profiles from local database
            $profiles = \App\Models\UptProfile::all()->keyBy('upt_id')->toArray();

            // Merge profile data
            foreach ($upts as &$upt) {
                $profile = $profiles[$upt['id']] ?? null;
                $upt['foto'] = !empty($profile['foto']) ? asset('storage/' . $profile['foto']) : null;
                $upt['jenis_upt'] = $profile['jenis_upt'] ?? null;
                $upt['informasi_singkat'] = $profile['informasi_singkat'] ?? null;
                $upt['website_url'] = $profile['website_url'] ?? null;
            }

            // Calculate aggregated statistics
            $totalUpt = count($upts);
            $totalTahanan = array_sum(array_column($upts, 'tahanan'));
            $totalNarapidana = array_sum(array_column($upts, 'narapidana'));
            $totalPenghuni = array_sum(array_column($upts, 'isi_penghuni'));
            $totalKapasitas = array_sum(array_column($upts, 'kapasitas'));
            $persenOverkapasitas = $totalKapasitas > 0 ? round((($totalPenghuni - $totalKapasitas) / $totalKapasitas) * 100, 1) : 0;

            return [
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
        } catch (\Exception $e) {
            Log::error("Sultan Banten direct database connection failed: " . $e->getMessage());
            return null;
        }
    }
}
