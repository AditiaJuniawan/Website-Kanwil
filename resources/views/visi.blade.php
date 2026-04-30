@extends('master')

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>VISI DAN MISI</h1>
            <a href="{{ url('/') }}">Beranda</a> > <a href="{{ url('/visi') }}">Visi dan Misi</a>
          
        </div>
    </section>

    <section class="profil-kanwil container">
        <h2 class="section-title">VISI</h2>
        <p class="paragraf-tengah">{!! $kanwil->vision ?? '"Terwujudnya Pemasyarakatan yang Profesional dalam Mendukung Penegakan Hukum Berbasis Hak Asasi Manusia yang Berkeadilan untuk Mewujudkan Indonesia Maju yang Berdaulat, Mandiri dan Berkepribadian, berlandaskan Gotong Royong"' !!}</p>
        <br><br><br>
        <h2 class="section-title">MISI</h2>
        <div class="misi-content">
            @if($kanwil && $kanwil->mission)
                {!! $kanwil->mission !!}
            @else
                <ol>
                    <li>Mendukung Penegakan Hukum di Bidang Penyelenggaraan Pemasyarakatan yang Bebas dari Korupsi, Bermartabat dan Terpercaya</li>
                    <li>Ikut Serta dalam Menjaga Stabilitas Kemanan Melalui Peran Pemasyarakatan</li>
                    <li>Mewujudkan Penyelenggaraan Pemasyarakatan yang Profesional dalam Mendukung Penegakan Hukum Berbasis Hak Asasi Manusia yang Berkeadilan</li>
                    <li>Melaksanakan Tata Laksana Pemerintahan yang Baik Melalui Reformasi Birokrasi</li>
                </ol>
            @endif
        </div>
    </section>
    

    

@endsection
