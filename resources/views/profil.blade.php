@extends('master')

@section('seo')
<title>Profil Pejabat — Kanwil Ditjenpas Banten</title>
<meta name="description" content="Profil jajaran pimpinan Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten, termasuk Kepala Kantor Wilayah dan para pejabat struktural.">
<meta name="keywords" content="profil kakanwil ditjenpas banten, pejabat pemasyarakatan banten, struktur organisasi kanwil">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://ditjenpasbanten.com/profil">
<meta property="og:type" content="website">
<meta property="og:title" content="Profil Pejabat — Kanwil Ditjenpas Banten">
<meta property="og:description" content="Profil jajaran pimpinan Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten.">
<meta property="og:url" content="https://ditjenpasbanten.com/profil">
<meta property="og:image" content="https://ditjenpasbanten.com/images/logokementerian.png">
<meta property="og:site_name" content="Kanwil Ditjenpas Banten">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Profil Pejabat — Kanwil Ditjenpas Banten">
<meta name="twitter:description" content="Profil jajaran pimpinan Kanwil Ditjenpas Banten.">
<script type="application/ld+json">
@verbatim
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Beranda", "item": "https://ditjenpasbanten.com/"},
    {"@type": "ListItem", "position": 2, "name": "Profil", "item": "https://ditjenpasbanten.com/profil"}
  ]
}
@endverbatim
</script>
@endsection

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub flex flex-col items-center">
            <h1 class="text-3xl md:text-4xl font-extrabold tracking-wider mb-2">PROFIL PEJABAT</h1>
            <div class="flex justify-center items-center gap-3 text-sm font-medium mt-4 bg-black/20 px-6 py-2 rounded-full backdrop-blur-sm">
                <a href="{{ url('/') }}" class="hover:text-gold-400 transition flex items-center"><i class="fa-solid fa-house mr-1.5"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[10px] opacity-70"></i>
                <span class="font-bold text-white">Profil</span>
            </div>
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
