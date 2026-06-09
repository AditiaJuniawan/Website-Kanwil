@extends('master')

@section('seo')
<title>Berita & Informasi — Kanwil Ditjenpas Banten</title>
<meta name="description" content="Kumpulan berita, kegiatan, dan informasi terkini dari Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten. Update terbaru kegiatan pemasyarakatan wilayah Banten.">
<meta name="keywords" content="berita pemasyarakatan banten, informasi kanwil ditjenpas banten, kegiatan lapas rutan banten">
<meta name="author" content="Kanwil Ditjenpas Banten">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://ditjenpasbanten.com/berita">
<meta property="og:type" content="website">
<meta property="og:title" content="Berita & Informasi — Kanwil Ditjenpas Banten">
<meta property="og:description" content="Kumpulan berita, kegiatan, dan informasi terkini dari Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten.">
<meta property="og:url" content="https://ditjenpasbanten.com/berita">
<meta property="og:image" content="https://ditjenpasbanten.com/images/logokementerian.png">
<meta property="og:site_name" content="Kanwil Ditjenpas Banten">
<meta property="og:locale" content="id_ID">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Berita & Informasi — Kanwil Ditjenpas Banten">
<meta name="twitter:description" content="Kumpulan berita dan informasi terkini Kanwil Ditjenpas Banten.">
<meta name="twitter:image" content="https://ditjenpasbanten.com/images/logokementerian.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "url": "https://ditjenpasbanten.com/berita",
      "name": "Berita & Informasi — Kanwil Ditjenpas Banten",
      "description": "Kumpulan berita dan informasi terkini pemasyarakatan wilayah Banten",
      "inLanguage": "id"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Beranda", "item": "https://ditjenpasbanten.com/"},
        {"@type": "ListItem", "position": 2, "name": "Berita", "item": "https://ditjenpasbanten.com/berita"}
      ]
    }
  ]
}
</script>
@endsection

@section('content')
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>BERITA SEPUTAR KANWIL DITJENPAS BANTEN</h1>
            <a href="{{ url('/') }}">Beranda</a> > <a href="{{ url('/berita') }}">Berita</a>
          
        </div>
    </section>
           
    <section id="berita" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row justify-between items-end mb-12" data-aos="fade-up">
                    <div>
                        <p class="text-brand-600 font-bold tracking-widest uppercase text-xs mb-2">Kabar Terkini</p>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Berita & Informasi</h2>
                    </div>

                </div>
            
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @if($posts->isEmpty())
                    {{-- Fallback content if database is empty --}}
                        <!-- News Card 1 -->
                            <a href="#" class="group block" data-aos="fade-up" data-aos-delay="100">
                                <div class="relative overflow-hidden rounded-3xl mb-5 aspect-[4/3] shadow-soft bg-slate-100">
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <i class="fa-solid fa-image text-4xl text-slate-300"></i>
                                    </div>
                                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-brand-700 text-[10px] font-bold px-3 py-1.5 rounded-lg uppercase tracking-wider shadow-sm">
                                        Siaran Pers
                                    </div>
                                </div>
                                <div class="flex items-center text-xs text-slate-400 mb-3 font-medium">
                                    <i class="fa-regular fa-calendar mr-2"></i> 26 Februari 2026
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 leading-snug group-hover:text-brand-600 transition duration-300">
                                    Siaran Pers
                                </h3>
                            </a>

                            <!-- News Card 2 -->
                            <a href="#" class="group block" data-aos="fade-up" data-aos-delay="200">
                                <div class="relative overflow-hidden rounded-3xl mb-5 aspect-[4/3] shadow-soft bg-slate-100">
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <i class="fa-solid fa-image text-4xl text-slate-300"></i>
                                    </div>
                                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-brand-700 text-[10px] font-bold px-3 py-1.5 rounded-lg uppercase tracking-wider shadow-sm">
                                        Kegiatan
                                    </div>
                                </div>
                                <div class="flex items-center text-xs text-slate-400 mb-3 font-medium">
                                    <i class="fa-regular fa-calendar mr-2"></i> 3 Maret 2026
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 leading-snug group-hover:text-brand-600 transition duration-300">
                                    Persembahyangan Purnama, Momentum Penguatan Nilai Spiritual
                                </h3>
                            </a>

                            <!-- News Card 3 -->
                            <a href="#" class="group block" data-aos="fade-up" data-aos-delay="300">
                                <div class="relative overflow-hidden rounded-3xl mb-5 aspect-[4/3] shadow-soft bg-slate-100">
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <i class="fa-solid fa-image text-4xl text-slate-300"></i>
                                    </div>
                                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-brand-700 text-[10px] font-bold px-3 py-1.5 rounded-lg uppercase tracking-wider shadow-sm">
                                        Informasi
                                    </div>
                                </div>
                                <div class="flex items-center text-xs text-slate-400 mb-3 font-medium">
                                    <i class="fa-regular fa-calendar mr-2"></i> 28 Februari 2026
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 leading-snug group-hover:text-brand-600 transition duration-300">
                                    Perkuat Layanan Kesehatan, Tinjau Akreditasi Klinik Rutan
                                </h3>
                            </a>
                    @else

                        @foreach($posts as $post)
                            <a href="{{ route('berita.show', $post->slug) }}" class="group block" data-aos="fade-up" data-aos-delay="100">
                                <div class="relative overflow-hidden rounded-3xl mb-5 aspect-[4/3] shadow-soft bg-slate-100">
                                    <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('images/kakanwil.png') }}" alt="{{ $post->title }}" class="w-full h-full object-cover absolute inset-0">
                                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-brand-700 text-[10px] font-bold px-3 py-1.5 rounded-lg uppercase tracking-wider shadow-sm">
                                        Kegiatan
                                    </div>
                                </div>
                                <div class="flex items-center text-xs text-slate-400 mb-3 font-medium">
                                    <i class="fa-regular fa-calendar mr-2"></i> {!! $post->published_at ?? 'tanggal' !!}
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 leading-snug group-hover:text-brand-600 transition duration-300">
                                    {!! nl2br(e($post->title ?? 'isi nya')) !!}
                                </h3>
                            </a>
                        @endforeach

                  
                @endif
                    
                            
                    
                </div>
                
            </div>
            </section>
        
    

    

@endsection
