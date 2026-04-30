@extends('master')

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>LAYANAN IZIN PENELITIAN DAN PELIPUTAN</h1>
            <a href="{{ url('/') }}">Beranda</a> > <a href="{{ url('/LayananPerizinan') }}">layanan Izin Penelitian dan Peliputan</a>
          
        </div>
    </section>
    <section class="profil-kanwil container">
    <h2 class="section-title-profil">Alur layanan Izin Penelitian dan Peliputan</h2>
    <div class="SOP">
        <img src="{{ asset('images/SOPmagang.png') }}" alt="">   
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSd80rCHwrVXwEcdPEeeE4r2TvM9lH9sH1qg4NKvuc5iE2G_bw/viewform?usp=send_form" class="btn-informasi" target="_blank">> KLIK DISINI UNTUK PENGAJUAN INFORMASI <</a>
    </div>
    
    
    </section>

    

@endsection
