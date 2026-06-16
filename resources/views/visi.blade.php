@extends('master')

@section('seo')
<title>Visi dan Misi — Kanwil Ditjenpas Banten</title>
<meta name="description" content="Visi dan Misi Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten: Mewujudkan pemasyarakatan yang profesional, berkeadilan, dan berbasis Hak Asasi Manusia.">
<meta name="keywords" content="visi misi kanwil ditjenpas banten, visi pemasyarakatan banten, misi ditjenpas banten">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://ditjenpasbanten.com/visi">
<meta property="og:type" content="website">
<meta property="og:title" content="Visi dan Misi — Kanwil Ditjenpas Banten">
<meta property="og:description" content="Visi dan Misi Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten.">
<meta property="og:url" content="https://ditjenpasbanten.com/visi">
<meta property="og:image" content="https://ditjenpasbanten.com/images/logokementerian.png">
<meta property="og:site_name" content="Kanwil Ditjenpas Banten">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Visi dan Misi — Kanwil Ditjenpas Banten">
<meta name="twitter:description" content="Visi dan Misi Kanwil Ditjenpas Banten.">
<script type="application/ld+json">
@verbatim
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Beranda", "item": "https://ditjenpasbanten.com/"},
    {"@type": "ListItem", "position": 2, "name": "Visi dan Misi", "item": "https://ditjenpasbanten.com/visi"}
  ]
}
@endverbatim
</script>
@endsection

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub flex flex-col items-center">
            <h1 class="text-3xl md:text-4xl font-extrabold tracking-wider mb-2">VISI DAN MISI</h1>
            <div class="flex justify-center items-center gap-3 text-sm font-medium mt-4 bg-black/20 px-6 py-2 rounded-full backdrop-blur-sm">
                <a href="{{ url('/') }}" class="hover:text-gold-400 transition flex items-center"><i class="fa-solid fa-house mr-1.5"></i> Beranda</a>
                <i class="fa-solid fa-chevron-right text-[10px] opacity-70"></i>
                <span class="font-bold text-white">Visi dan Misi</span>
            </div>
        </div>
    </section>

    <section class="profil-Layanan container">
        <h2 class="section-title">VISI</h2>
        <p class="paragraf-tengah">{!! $kanwil?->vision ?? '"Terwujudnya Pemasyarakatan yang Profesional dalam Mendukung Penegakan Hukum Berbasis Hak Asasi Manusia yang Berkeadilan untuk Mewujudkan Indonesia Maju yang Berdaulat, Mandiri dan Berkepribadian, berlandaskan Gotong Royong"' !!}</p>
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
