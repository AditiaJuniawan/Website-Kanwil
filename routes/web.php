<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanwilController;
use App\Http\Controllers\SessionController;

Route::get('/', [KanwilController::class, 'home']);
route::get('/tentang',function(){
    return view('tentang');
});
route::get('/profil',function(){
    return view('profil');
});
route::get('/visi',function(){
    return view('visi');
});
route::get('/maskot',function(){
    return view('maskot');
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
