<?php

namespace App\Http\Controllers;

use App\Services\SultanBantenService;

class KanwilController extends Controller
{
    protected $sultanService;

    public function __construct(SultanBantenService $sultanService)
    {
        $this->sultanService = $sultanService;
    }

    public function home()
    {
        $uptData = $this->sultanService->getFullUptData();
        $statsData = $this->sultanService->getStats();
        $kanwil = \App\Models\Kanwil::first();
        $posts = \App\Models\Post::orderBy('published_at', 'desc')->get();
        
        $totalStats = (isset($statsData['success']) && $statsData['success'] && isset($statsData['data']['statistics']))
            ? $statsData['data']['statistics']
            : null;

        // Calculate persen_overkapasitas if totalStats is available
        if ($totalStats) {
            $kapasitas = $totalStats['kapasitas'] ?? 0;
            $isiPenghuni = $totalStats['isi_penghuni'] ?? 0;
            if ($kapasitas > 0) {
                $totalStats['persen_overkapasitas'] = round((($isiPenghuni - $kapasitas) / $kapasitas) * 100, 1);
            } else {
                $totalStats['persen_overkapasitas'] = 0;
            }
        }

        return view('home', compact('uptData', 'totalStats', 'kanwil','posts'))->with('uptOverkapasitas', $uptData);
    }

    public function visi()
    {
        $kanwil = \App\Models\Kanwil::first();
        return view('visi', compact('kanwil'));
    }

    public function profil()
    {
        $leaders = \App\Models\Leader::orderBy('order')->get();
        return view('profil', compact('leaders'));
    }

    public function maskot()
    {
        $kanwil = \App\Models\Kanwil::first();
        return view('maskot', compact('kanwil'));
    }

     public function survei()
    {
        $survei = \App\Models\Survei::first();
        return view('survei', compact('survei'));
    }
     public function post()
    {
        $posts = \App\Models\Post::orderBy('published_at', 'desc')->get();
        return view('berita', compact('posts'));
    }

    public function show($slug)
    {
        $post = \App\Models\Post::where('slug', $slug)->firstOrFail();
        $recentPosts = \App\Models\Post::where('slug', '!=', $slug)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();
        return view('berita-detail', compact('post', 'recentPosts'));
    }
}
