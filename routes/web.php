<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanwilController;
use App\Http\Controllers\SessionController;

Route::get('/', [KanwilController::class, 'home']);
Route::get('/visi', [KanwilController::class, 'visi']);
Route::get('/profil', [KanwilController::class, 'profil']);
Route::get('/maskot', [KanwilController::class, 'maskot']);
Route::get('/berita', [KanwilController::class, 'post']);
Route::get('/survei', [KanwilController::class, 'survei']);

route::get('/tentang',function(){
    return view('tentang');
});
route::get('/LayananInformasi',function(){
    return view('layananinformasi');
});
route::get('/formLayananInformasi',function(){
    return view('/form/forminformasi');
});
route::get('/formperizinan',function(){
    return view('/form/formperizinan');
});
route::get('/formpengaduan',function(){
    return view('/form/formpengaduan');
});
route::get('/LayananPengaduan',function(){
    return view('LayananPengaduan');
});
route::get('/LayananPerizinan',function(){
    return view('LayananIzinPenelitian');
});

// route::get('/berita',function(){
//     return view('berita');
// });
route::get('/login',function(){
    return view('/sesi/index');
});


// route::get('/sesi',function(){
//     return view('/sesi/index');
// });


route::get('/sesi',[SessionController::class,'index']);
route::post('/sesi/login',[SessionController::class,'login']);

// Route debug untuk memeriksa koneksi database Sultan Banten
Route::get('/debug-sultan-db', function() {
    try {
        // Coba hubungkan ke database 'sultan'
        \Illuminate\Support\Facades\DB::connection('sultan')->getPdo();
        
        $maxDate = \Illuminate\Support\Facades\DB::connection('sultan')
            ->table('data_penghuni')
            ->max('tanggal');
            
        $count = \Illuminate\Support\Facades\DB::connection('sultan')
            ->table('upt')
            ->count();

        return response()->json([
            'status' => 'success',
            'message' => 'Koneksi database sultan berhasil!',
            'sumber_data' => 'Database Direct',
            'latest_data_date' => $maxDate,
            'total_upt_records' => $count
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Gagal terhubung ke database sultan. Pastikan konfigurasi .env benar.',
            'error_detail' => $e->getMessage()
        ], 500);
    }
});

