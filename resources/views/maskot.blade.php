@extends('master')

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>MASKOT KANWIL DITJENPAS BANTEN</h1>
            <a href="{{ url('/') }}">Beranda</a> > <a href="{{ url('/maskot') }}">Maskot</a>
          
        </div>
    </section>

    <section class="profil-kanwil container">
        <div class="grid-profil">
            <div class="card-profil">
                <h2 class="section-title">KANG</h2>
                <div class="fotokanwil">
                    @if($kanwil && $kanwil->maskot_kang_image)
                        <img src="{{ asset('storage/' . $kanwil->maskot_kang_image) }}" alt="Kang">
                    @else
                        <img src="{{ asset('images/Kang Pas.png') }}" alt="Kang">
                    @endif
                </div>
                <br>
                <p class="paragraf-tengah">
                    {{ $kanwil->maskot_kang_description ?? ' "Kang merupakan maskot resmi Kantor Wilayah Direktorat Jenderal Pemasyarakatan (Ditjenpas) Banten. Visualisasinya mengadopsi bentuk bidak catur yang melambangkan strategi dan ketetapan langkah, serta dipadukan dengan busana adat Baduy sebagai representasi penghormatan terhadap nilai kearifan lokal Provinsi Banten."' }}
                </p>
            </div>    
            <div class="card-profil">   
                <h2 class="section-title">NONG</h2>
                <div class="fotokanwil">
                    @if($kanwil && $kanwil->maskot_nong_image)
                        <img src="{{ asset('storage/' . $kanwil->maskot_nong_image) }}" alt="Nong">
                    @else
                        <img src="{{ asset('images/Nong Pas.png') }}" alt="Nong">
                    @endif
                </div>
                <br>
                <p class="paragraf-tengah">
                    {{ $kanwil->maskot_nong_description ?? ' "Nong merupakan pasangan maskot resmi Kantor Wilayah Direktorat Jenderal Pemasyarakatan (Ditjenpas) Banten. Direpresentasikan melalui figur bidak catur yang melambangkan kecerdasan strategi, Nong tampil anggun dengan balutan kerudung bermotif batik Baduy sebagai perwujudan martabat dan keanggunan budaya lokal di lingkungan pemasyarakatan."' }}
                </p>
            </div>
        </div>
    </section>
    

    

@endsection
