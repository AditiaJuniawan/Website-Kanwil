@extends('master')

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>LAYANAN INFORMASI</h1>
            <a href="{{ url('/') }}">Beranda</a> > <a href="{{ url('/LayananInformasi') }}">layanan Informasi</a>
          
        </div>
    </section>
    <section class="profil-kanwil container">
    <h2 class="section-title-profil">Alur Layanan Informasi</h2>
    <div class="SOP">
        <img src="{{ asset('images/SOPINFORMASI.png') }}" alt="">   
        <a href="{{ url('/formLayananInformasi') }}" class="btn-informasi">> KLIK DISINI UNTUK PENGAJUAN INFORMASI <</a>
        <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSd80rCHwrVXwEcdPEeeE4r2TvM9lH9sH1qg4NKvuc5iE2G_bw/viewform?usp=send_form" class="btn-informasi" target="_blank">> KLIK DISINI UNTUK PENGAJUAN INFORMASI <</a> -->
    </div>
    
    
    </section>

    

@endsection
