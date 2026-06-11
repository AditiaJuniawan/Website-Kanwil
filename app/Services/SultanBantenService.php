<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class SultanBantenService
{
    protected ?array $cachedDbData = null;
    protected bool $dbLoaded = false;

    public function getStats()
    {
        $this->loadFromDb();
        return $this->cachedDbData ? $this->cachedDbData['stats'] : null;
    }

    public function getFullUptData()
    {
        $this->loadFromDb();
        return $this->cachedDbData ? $this->cachedDbData['uptData'] : [];
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

            // Calculate aggregated statistics
            $totalUpt = count($upts);
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
            Log::error("Sultan Banten direct database connection failed: " . $e->getMessage());
            $this->cachedDbData = null;
            return false;
        }
    }
}
