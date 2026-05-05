@extends('master')

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>LAYANAN PENGADUAN</h1>
            <a href="{{ url('/') }}">Beranda</a> > <a href="{{ url('/LayananPengaduan') }}">layanan Pengaduan</a>
          
        </div>
    </section>
    <section class="profil-Layanan container">
    <h2 class="section-title-profil">Alur Layanan Pengaduan</h2>
    <div class="SOP">
        <img src="{{ asset('images/SOPLayananPengaduan.png') }}" alt="">   
        <a href="/formpengaduan" class="btn-layanan" target="_blank">> KLIK DISINI UNTUK PENGAJUAN PENGADUAN <</a>
    </div>
    
    
    </section>

    

@endsection
