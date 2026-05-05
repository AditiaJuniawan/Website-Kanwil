@extends('master')

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>LAYANAN IZIN PENELITIAN DAN PELIPUTAN</h1>
            <a href="{{ url('/') }}">Beranda</a> > <a href="{{ url('/LayananPerizinan') }}">layanan Izin Penelitian dan Peliputan</a>
          
        </div>
    </section>
    <section class="profil-Layanan container">
    <h2 class="section-title-profil">Alur layanan Izin Penelitian dan Peliputan</h2>
    <div class="SOP">
        <img src="{{ asset('images/SOPmagang.png') }}" alt="">   
        <a href="/formperizinan" class="btn-layanan" >> KLIK DISINI UNTUK PENGAJUAN PERIZINAN <</a>
    </div>
    
    
    </section>

    

@endsection
