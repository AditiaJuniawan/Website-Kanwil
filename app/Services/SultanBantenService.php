<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SultanBantenService
{
    protected string $baseUrl;
    protected string $apiKey;

    public function __construct()
    {
        $this->baseUrl = 'http://ditjenpasbanten.com/api/stats.php';
        $this->apiKey = 'ditjenpas_banten_secret_key_2026';
    }

    public function getStats(int $uptId = null)
    {
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
