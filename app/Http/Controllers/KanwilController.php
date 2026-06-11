<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $comments = $post->comments()->where('is_approved', true)->latest()->get();
        $recentPosts = \App\Models\Post::where('slug', '!=', $slug)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();
        return view('berita-detail', compact('post', 'recentPosts', 'comments'));
    }

    public function storeComment(Request $request, $slug)
    {
        $post = \App\Models\Post::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        $post->comments()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'comment' => $validated['comment'],
            'is_approved' => true,
        ]);

        return back()->with('success', 'Komentar Anda berhasil ditambahkan.');
    }
}
