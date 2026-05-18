@extends('master')

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>PROFIL PEJABAT</h1>
            <a href="{{ url('/') }}">Beranda</a> > <a href="{{ url('/profil') }}">Profil</a>
          
        </div>
    </section>

    <section class="profil-kanwil container">
        <h2 class="section-title-profil">Jajaran Pimpinan Pemasyarakatan Banten</h2>
        
        @if($leaders->isEmpty())
            {{-- Fallback content if database is empty --}}
            <div class="fotokanwil" >
                <img src="{{ asset('images/kakanwil.png') }}" alt="" >
            </div>
            <h2 class="section-name-profil">Mumammad Ali Syeh Banna,Bc.I.P.,S.Sos.,M.Si</h2>
            <h3 class="section-jabatan-profil">Kepala Kantor Wilayah Ditjenpas Banten</h3>
            
            <div class="grid-profil">
                <div class="card-profil">
                    <div class="fotokanwil">
                        <img src="{{ asset('images/kabagtum.png') }}" alt="">
                    </div>
                    <h2 class="section-name-profil">Mumamad Khapi, A.Md.I.P.,S.Sos.,M.M</h2>
                    <h3 class="section-jabatan-profil">Kepala Bagian <br>Tata Usaha dan Umum</h3>
                </div>
                <div class="card-profil">
                    <div class="fotokanwil">
                        <img src="{{ asset('images/kabidPK.png') }}" alt="">
                    </div>
                    <h2 class="section-name-profil">Ahmad Hardi, Bc.I.P.,S.H.,M.M</h2>
                    <h3 class="section-jabatan-profil">Kepala Bidang <br>Pelayanan dan Pembinaan</h3>
                </div>
                <div class="card-profil">
                    <div class="fotokanwil">
                        <img src="{{ asset('images/kabidPKP.png') }}" alt="">
                    </div>
                    <h2 class="section-name-profil">Ade Kusmanto, A.Md.IP.,S.H.,M.H</h2>
                    <h3 class="section-jabatan-profil">Kepala Bidang <br>Pembimbing Kemasyarakatan</h3>
                </div>
            </div>
        @else
            @foreach($leaders as $index => $leader)
                @if($index == 0)
                    {{-- First leader is the head --}}
                    <div class="fotokanwil transition-transform group-hover:scale-105">
                        <img src="{{ $leader->image ? asset('storage/' . $leader->image) : asset('images/kakanwil.png') }}" alt="{{ $leader->name }}">
                    </div>
                    <h2 class="section-name-profil">{{ $leader->name }}</h2>
                    <h3 class="section-jabatan-profil">{{ $leader->position }}</h3>
                    
                    <div class="grid-profil">
                @else
                    <div class="card-profil">
                        <div class="fotokanwil">
                            <img src="{{ $leader->image ? asset('storage/' . $leader->image) : asset('images/default-avatar.png') }}" alt="{{ $leader->name }}">
                        </div>
                        <h2 class="section-name-profil">{{ $leader->name }}</h2>
                        <h3 class="section-jabatan-profil">{!! nl2br(e($leader->position)) !!}</h3>
                    </div>
                @endif
            @endforeach
            
            @if($leaders->count() > 0)
                </div> {{-- close grid-profil --}}
            @endif
        @endif
    </section>
    

    

@endsection
