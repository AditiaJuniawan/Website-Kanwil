<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AiService
{
    /**
     * Generate news article (title and content) based on a URL or raw text.
     *
     * @param string|null $url
     * @param string|null $rawText
     * @param string|null $instruction
     * @return array
     */
    public function generateNews(?string $url, ?string $rawText = null, ?string $instruction = null): array
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $provider = $settings['ai_provider'] ?? 'gemini';
        $apiKey = $settings['ai_api_key'] ?? '';
        $model = $settings['ai_model'] ?? 'gemini-2.5-flash';
        $baseUrl = $settings['ai_base_url'] ?? '';

        if (empty($apiKey)) {
            throw new \Exception('API Key belum diatur. Silakan atur terlebih dahulu di menu Konfigurasi Sistem & AI.');
        }

        // 1. Gather source text
        $sourceText = '';
        if (!empty($url)) {
            $sourceText = $this->extractTextFromUrl($url);
        } else {
            $sourceText = $rawText ?? '';
        }

        if (empty(trim($sourceText))) {
            throw new \Exception('Sumber materi berita kosong. Mohon berikan URL atau ketikan teks ringkas.');
        }

        // Limit source text to prevent payload bloat
        $sourceText = Str::limit($sourceText, 6000, '...');

        // 2. Build Prompt
        $prompt = "Tulis ulang materi/sumber berita di bawah ini menjadi artikel berita positif yang menarik seputar pemasyarakatan di lingkungan Kantor Wilayah Kementerian Hukum dan HAM Banten (Kanwil Ditjenpas Banten) atau Unit Pelaksana Teknis (UPT) terkait.\n\n";
        $prompt .= "Pedoman Penulisan:\n";
        $prompt .= "1. Tulis dengan gaya bahasa jurnalistik formal, menarik, informatif, dan menonjolkan aspek positif serta prestasi.\n";
        $prompt .= "2. Gunakan Bahasa Indonesia yang baik dan benar sesuai EYD.\n";
        $prompt .= "3. Format isi berita harus berupa HTML bersih. Gunakan tag paragraf <p>, subjudul <h3> jika diperlukan, list <ul>/<ol>/<li> jika ada rincian. Jangan sertakan tag html/body/head, css, atau markdown.\n";
        $prompt .= "4. Output harus dikembalikan dalam format JSON dengan struktur persis seperti berikut:\n";
        $prompt .= "{\n";
        $prompt .= "  \"title\": \"Judul Berita yang Singkat, Padat, dan Menarik\",\n";
        $prompt .= "  \"content\": \"<p>Isi berita paragraf 1...</p><p>Isi berita paragraf 2...</p>\"\n";
        $prompt .= "}\n\n";
        $prompt .= "PENTING: Kembalikan HANYA objek JSON valid di atas. Jangan sertakan teks penjelasan sebelum/sesudah JSON, jangan membungkus JSON dengan format markdown ```json ... ```, dan pastikan JSON valid.\n\n";
        
        if (!empty($instruction)) {
            $prompt .= "Instruksi Khusus Tambahan: {$instruction}\n\n";
        }
        
        $prompt .= "Materi / Sumber Berita:\n";
        $prompt .= $sourceText;

        // 3. Request API
        try {
            if ($provider === 'gemini') {
                $endpoint = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key={$apiKey}";
                
                $response = Http::timeout(30)->post($endpoint, [
                    'contents' => [
                        ['parts' => [['text' => $prompt]]]
                    ]
                ]);

                if (!$response->successful()) {
                    Log::error('Gemini API Error: ' . $response->body());
                    throw new \Exception('API Gemini mengembalikan error: ' . ($response->json('error.message') ?? 'Bad Request'));
                }

                $replyText = $response->json('candidates.0.content.parts.0.text');
            } else {
                // OpenAI / Adacode / Custom Provider (OpenAI compatible)
                $endpoint = rtrim($baseUrl ?: 'https://api.openai.com/v1', '/') . '/chat/completions';
                
                $response = Http::withToken($apiKey)->timeout(30)->post($endpoint, [
                    'model' => $model,
                    'messages' => [
                        ['role' => 'user', 'content' => $prompt]
                    ],
                    'temperature' => 0.7,
                ]);

                if (!$response->successful()) {
                    Log::error('OpenAI-compatible API Error: ' . $response->body());
                    throw new \Exception('Penyedia AI mengembalikan error: ' . ($response->json('error.message') ?? 'Bad Request'));
                }

                $replyText = $response->json('choices.0.message.content');
            }

            if (empty($replyText)) {
                throw new \Exception('Penyedia AI tidak mengembalikan konten atau respons kosong.');
            }

            // 4. Parse JSON Response
            $cleanedJson = $this->cleanJsonResponse($replyText);
            $parsed = json_decode($cleanedJson, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::warning('Failed parsing AI JSON response, raw output: ' . $replyText);
                // Attempt a regex fallback or structure manually if JSON parsing failed
                return $this->fallbackParse($replyText);
            }

            return [
                'title' => trim($parsed['title'] ?? 'Draf Berita Positif AI'),
                'content' => trim($parsed['content'] ?? '<p>Isi berita gagal dimuat.</p>')
            ];

        } catch (\Exception $e) {
            Log::error('AiService Exception: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Clean and extract JSON string from AI response text.
     *
     * @param string $text
     * @return string
     */
    protected function cleanJsonResponse(string $text): string
    {
        $text = trim($text);

        // Remove markdown wrappers ```json ... ```
        if (preg_match('/^```(?:json)?\s*(\{.*?\})\s*```$/is', $text, $matches)) {
            return trim($matches[1]);
        }
        
        // Remove simple backticks
        if (preg_match('/^`(\{.*?\})`$/is', $text, $matches)) {
            return trim($matches[1]);
        }

        // Find the first { and last }
        $firstBrace = strpos($text, '{');
        $lastBrace = strrpos($text, '}');

        if ($firstBrace !== false && $lastBrace !== false && $lastBrace > $firstBrace) {
            return substr($text, $firstBrace, $lastBrace - $firstBrace + 1);
        }

        return $text;
    }

    /**
     * Fallback parser if JSON decoding fails.
     *
     * @param string $text
     * @return array
     */
    protected function fallbackParse(string $text): array
    {
        // Simple regex fallback to extract title
        $title = 'Draf Berita Positif AI';
        if (preg_match('/"title"\s*:\s*"(.*?)"/i', $text, $matches)) {
            $title = $matches[1];
        }

        // Try to clean HTML content
        $content = $text;
        // Strip out keys if they are visible
        $content = preg_replace('/\{\s*"title".*?"content"\s*:\s*"/is', '', $content);
        $content = preg_replace('/"\s*\}$/s', '', $content);
        $content = str_replace('\n', "\n", $content);
        $content = str_replace('\"', '"', $content);

        return [
            'title' => trim($title),
            'content' => trim($content)
        ];
    }

    /**
     * Extract primary text content from a web page URL.
     *
     * @param string $url
     * @return string
     */
    protected function extractTextFromUrl(string $url): string
    {
        try {
            $response = Http::withHeaders([
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'
            ])->timeout(15)->get($url);

            if (!$response->successful()) {
                throw new \Exception("Gagal mengakses URL. HTTP Status: " . $response->status());
            }

            $html = $response->body();

            // Strip unnecessary tags
            $html = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $html);
            $html = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $html);
            $html = preg_replace('/<header\b[^>]*>(.*?)<\/header>/is', '', $html);
            $html = preg_replace('/<footer\b[^>]*>(.*?)<\/footer>/is', '', $html);
            $html = preg_replace('/<nav\b[^>]*>(.*?)<\/nav>/is', '', $html);
            $html = preg_replace('/<!--.*?-->/is', '', $html);

            // Clean tags and decode entities
            $text = strip_tags($html);
            $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');

            // Normalize spaces and newlines
            $lines = explode("\n", $text);
            $cleanLines = [];
            foreach ($lines as $line) {
                $trimmed = trim($line);
                if (!empty($trimmed)) {
                    $cleanLines[] = $trimmed;
                }
            }

            return implode("\n", $cleanLines);
        } catch (\Exception $e) {
            Log::warning('URL Content Extraction failed: ' . $e->getMessage());
            throw new \Exception('Gagal mengekstrak isi halaman website: ' . $e->getMessage());
        }
    }
}
