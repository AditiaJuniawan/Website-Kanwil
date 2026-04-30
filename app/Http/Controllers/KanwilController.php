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
        
        $totalStats = (isset($statsData['success']) && $statsData['success'] && isset($statsData['data']['statistics']))
            ? $statsData['data']['statistics']
            : null;

        return view('home', compact('uptData', 'totalStats', 'kanwil'));
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
}
