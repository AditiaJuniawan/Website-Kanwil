<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Generate XML sitemap otomatis untuk Google Search Console.
     * Mencakup semua halaman statis + semua post/berita dinamis.
     */
    public function index(): Response
    {
        $staticPages = [
            ['url' => '/',                  'priority' => '1.0', 'changefreq' => 'daily'],
            ['url' => '/berita',            'priority' => '0.9', 'changefreq' => 'daily'],
            ['url' => '/profil',            'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/visi',              'priority' => '0.7', 'changefreq' => 'monthly'],
            ['url' => '/maskot',            'priority' => '0.6', 'changefreq' => 'yearly'],
            ['url' => '/survei',            'priority' => '0.7', 'changefreq' => 'monthly'],
            ['url' => '/LayananInformasi',  'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/LayananPengaduan',  'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => '/LayananPerizinan',  'priority' => '0.8', 'changefreq' => 'monthly'],
        ];

        // Ambil semua post yang sudah dipublish
        $posts = Post::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->get(['slug', 'published_at', 'updated_at']);

        $baseUrl = rtrim(config('app.url'), '/');
        $now     = now()->toAtomString();

        $xml = $this->buildXml($staticPages, $posts, $baseUrl, $now);

        return response($xml, 200, [
            'Content-Type'  => 'application/xml; charset=UTF-8',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    private function buildXml(array $staticPages, $posts, string $baseUrl, string $now): string
    {
        $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . PHP_EOL;
        $xml .= '        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">' . PHP_EOL;

        // Halaman statis
        foreach ($staticPages as $page) {
            $xml .= '  <url>' . PHP_EOL;
            $xml .= '    <loc>' . $baseUrl . $page['url'] . '</loc>' . PHP_EOL;
            $xml .= '    <lastmod>' . $now . '</lastmod>' . PHP_EOL;
            $xml .= '    <changefreq>' . $page['changefreq'] . '</changefreq>' . PHP_EOL;
            $xml .= '    <priority>' . $page['priority'] . '</priority>' . PHP_EOL;
            $xml .= '  </url>' . PHP_EOL;
        }

        // Halaman dinamis (berita)
        foreach ($posts as $post) {
            $lastmod = $post->updated_at
                ? $post->updated_at->toAtomString()
                : ($post->published_at
                    ? \Carbon\Carbon::parse($post->published_at)->toAtomString()
                    : $now);

            $xml .= '  <url>' . PHP_EOL;
            $xml .= '    <loc>' . $baseUrl . '/berita/' . e($post->slug) . '</loc>' . PHP_EOL;
            $xml .= '    <lastmod>' . $lastmod . '</lastmod>' . PHP_EOL;
            $xml .= '    <changefreq>monthly</changefreq>' . PHP_EOL;
            $xml .= '    <priority>0.8</priority>' . PHP_EOL;
            $xml .= '  </url>' . PHP_EOL;
        }

        $xml .= '</urlset>';

        return $xml;
    }
}
