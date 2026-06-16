<?php

namespace App\Console\Commands;

use App\Models\Setting;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class TestAiConnection extends Command
{
    protected $signature = 'ai:test';
    protected $description = 'Menguji koneksi ke penyedia AI (Gemini / OpenAI / Adacode)';

    public function handle()
    {
        $this->info('Mengambil konfigurasi API dari database...');
        $settings = Setting::pluck('value', 'key')->toArray();

        $provider = $settings['ai_provider'] ?? 'gemini';
        $apiKey = $settings['ai_api_key'] ?? '';
        $model = $settings['ai_model'] ?? '';
        $baseUrl = $settings['ai_base_url'] ?? '';

        if (empty($apiKey)) {
            $this->error('API Key belum diatur di Filament Admin!');
            return 1;
        }

        $this->info("Provider : {$provider}");
        $this->info("Model    : {$model}");
        $this->info("Base URL : {$baseUrl}");
        $this->line('Mengirim request ke API...');

        try {
            if (in_array($provider, ['adacode', 'openai', 'custom'])) {
                // OpenAI compatible format
                $endpoint = rtrim($baseUrl ?: 'https://api.openai.com/v1', '/') . '/chat/completions';
                
                $response = Http::withToken($apiKey)
                    ->timeout(30)
                    ->post($endpoint, [
                        'model' => $model ?: 'gpt-3.5-turbo',
                        'messages' => [
                            ['role' => 'system', 'content' => 'Anda adalah asisten cerdas yang membalas pesan secara singkat dan jelas.'],
                            ['role' => 'user', 'content' => 'Katakan "Koneksi API Adacode.ai Berhasil!" jika Anda menerima pesan ini.']
                        ],
                        'max_tokens' => 50,
                    ]);

                if ($response->successful()) {
                    $reply = $response->json('choices.0.message.content');
                    $this->info('✅ Koneksi Sukses! Balasan AI:');
                    $this->line($reply);
                } else {
                    $this->error('❌ Gagal menghubungi API. Response Code: ' . $response->status());
                    $this->error($response->body());
                }

            } elseif ($provider === 'gemini') {
                // Gemini Format
                $modelName = $model ?: 'gemini-2.5-flash';
                $endpoint = "https://generativelanguage.googleapis.com/v1beta/models/{$modelName}:generateContent?key={$apiKey}";
                
                $response = Http::timeout(30)->post($endpoint, [
                    'contents' => [
                        ['parts' => [['text' => 'Katakan "Koneksi API Gemini Berhasil!" jika Anda menerima pesan ini.']]]
                    ]
                ]);

                if ($response->successful()) {
                    $reply = $response->json('candidates.0.content.parts.0.text');
                    $this->info('✅ Koneksi Sukses! Balasan AI:');
                    $this->line($reply);
                } else {
                    $this->error('❌ Gagal menghubungi API Gemini. Response Code: ' . $response->status());
                    $this->error($response->body());
                }
            }

        } catch (\Exception $e) {
            $this->error('❌ Terjadi kesalahan jaringan / sistem:');
            $this->error($e->getMessage());
        }

        return 0;
    }
}
