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

    public function renja()
    {
        $kanwil = \App\Models\Kanwil::first();

        if ($kanwil && $kanwil->file_renja) {
            $filePath = storage_path('app/public/' . $kanwil->file_renja);
            if (file_exists($filePath) && filesize($filePath) > 0) {
                return response()->file($filePath, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="Renja-Kanwil-Ditjenpas-Banten.pdf"',
                ]);
            }
        }

        return response('
            <div style="font-family:system-ui,-apple-system,sans-serif;display:flex;align-items:center;justify-content:center;min-height:100vh;background:#f8fafc;color:#1e293b;padding:20px;text-align:center;">
                <div style="background:#ffffff;padding:40px 30px;border-radius:16px;box-shadow:0 10px 25px -5px rgba(0,0,0,0.05);max-width:480px;border:1px solid #e2e8f0;">
                    <div style="font-size:48px;margin-bottom:16px;">📄</div>
                    <h2 style="font-size:22px;font-weight:700;margin:0 0 10px;color:#0f172a;">Dokumen Renja Belum Tersedia</h2>
                    <p style="font-size:14px;color:#64748b;line-height:1.6;margin:0 0 24px;">Dokumen Rencana Kerja (Renja) belum diunggah dengan benar atau file kosong.</p>
                    <a href="/" style="display:inline-block;background:#0369a1;color:#ffffff;padding:10px 24px;border-radius:9999px;font-size:13px;font-weight:600;text-decoration:none;">Kembali ke Beranda</a>
                </div>
            </div>
        ', 404)->header('Content-Type', 'text/html');
    }

    public function dipa()
    {
        $kanwil = \App\Models\Kanwil::first();

        if ($kanwil && $kanwil->file_dipa) {
            $filePath = storage_path('app/public/' . $kanwil->file_dipa);
            if (file_exists($filePath) && filesize($filePath) > 0) {
                return response()->file($filePath, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="DIPA-Kanwil-Ditjenpas-Banten.pdf"',
                ]);
            }
        }

        return response('
            <div style="font-family:system-ui,-apple-system,sans-serif;display:flex;align-items:center;justify-content:center;min-height:100vh;background:#f8fafc;color:#1e293b;padding:20px;text-align:center;">
                <div style="background:#ffffff;padding:40px 30px;border-radius:16px;box-shadow:0 10px 25px -5px rgba(0,0,0,0.05);max-width:480px;border:1px solid #e2e8f0;">
                    <div style="font-size:48px;margin-bottom:16px;">📊</div>
                    <h2 style="font-size:22px;font-weight:700;margin:0 0 10px;color:#0f172a;">Dokumen DIPA Belum Tersedia</h2>
                    <p style="font-size:14px;color:#64748b;line-height:1.6;margin:0 0 24px;">Dokumen Daftar Isian Pelaksanaan Anggaran (DIPA) belum diunggah dengan benar atau file kosong.</p>
                    <a href="/" style="display:inline-block;background:#0369a1;color:#ffffff;padding:10px 24px;border-radius:9999px;font-size:13px;font-weight:600;text-decoration:none;">Kembali ke Beranda</a>
                </div>
            </div>
        ', 404)->header('Content-Type', 'text/html');
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
