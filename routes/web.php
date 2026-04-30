<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanwilController;
use App\Http\Controllers\SessionController;

Route::get('/', [KanwilController::class, 'home']);
Route::get('/visi', [KanwilController::class, 'visi']);
Route::get('/profil', [KanwilController::class, 'profil']);
Route::get('/maskot', [KanwilController::class, 'maskot']);

route::get('/tentang',function(){
    return view('tentang');
});
route::get('/LayananInformasi',function(){
    return view('layananinformasi');
});
route::get('/formLayananInformasi',function(){
    return view('/form/forminformasi');
});
route::get('/LayananPengaduan',function(){
    return view('LayananPengaduan');
});
route::get('/LayananPerizinan',function(){
    return view('LayananIzinPenelitian');
});
route::get('/login',function(){
    return view('/sesi/index');
});


// route::get('/sesi',function(){
//     return view('/sesi/index');
// });


route::get('/sesi',[SessionController::class,'index']);
route::post('/sesi/login',[SessionController::class,'login']);
