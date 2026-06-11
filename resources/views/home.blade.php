@extends('master')

@section('seo')
<title>Kanwil Ditjenpas Banten — Portal Resmi Pemasyarakatan Provinsi Banten</title>
<meta name="description" content="Website resmi Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten. Layanan publik, informasi UPT, berita, dan data pemasyarakatan wilayah Banten.">
<meta name="keywords" content="kanwil ditjenpas banten, pemasyarakatan banten, lapas banten, rutan banten, layanan publik pemasyarakatan, kantor wilayah kemenkumham banten">
<meta name="author" content="Kanwil Ditjenpas Banten">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://ditjenpasbanten.com/">
<meta property="og:type" content="website">
<meta property="og:title" content="Kanwil Ditjenpas Banten — Portal Resmi Pemasyarakatan Provinsi Banten">
<meta property="og:description" content="Website resmi Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten. Layanan publik, informasi UPT, berita terkini pemasyarakatan wilayah Banten.">
<meta property="og:url" content="https://ditjenpasbanten.com/">
<meta property="og:image" content="https://ditjenpasbanten.com/images/gedung2.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="Kanwil Ditjenpas Banten">
<meta property="og:locale" content="id_ID">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kanwil Ditjenpas Banten — Portal Resmi Pemasyarakatan">
<meta name="twitter:description" content="Website resmi Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten.">
<meta name="twitter:image" content="https://ditjenpasbanten.com/images/gedung2.png">
<script type="application/ld+json">
@verbatim
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "name": "Kanwil Ditjenpas Banten",
      "url": "https://ditjenpasbanten.com",
      "description": "Portal resmi Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten",
      "inLanguage": "id",
      "potentialAction": {
        "@type": "SearchAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://ditjenpasbanten.com/berita?q={search_term_string}"
        },
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "WebPage",
      "@id": "https://ditjenpasbanten.com/#webpage",
      "url": "https://ditjenpasbanten.com/",
      "name": "Beranda — Kanwil Ditjenpas Banten",
      "isPartOf": {"@id": "https://ditjenpasbanten.com/#website"},
      "inLanguage": "id",
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
          {"@type": "ListItem", "position": 1, "name": "Beranda", "item": "https://ditjenpasbanten.com/"}
        ]
      }
    }
  ]
}
@endverbatim
</script>
@endsection

@section('content')
    <!-- HERO SECTION: Elegant & Animated -->
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
    <section class="hero-gradient text-white pb-20 pt-16 md:pt-24 md:pb-32 relative z-10 rounded-b-[2rem] md:rounded-b-[4rem] shadow-xl" style="background-image: linear-gradient(135deg, rgba(27, 61, 106, 0.85) 0%, rgba(27, 61, 106, 0.6) 100%), url('{{ asset('images/gedung2.png') }}'); background-size: cover; background-position: center;">
        <div class="hero-glow"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 flex flex-col md:flex-row items-center">
                 <!-- Hero Text -->
            <div class="md:w-3/5 pr-0 md:pr-12 text-center md:text-left" data-aos="fade-right">
                <div class="inline-flex items-center px-3 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs font-semibold mb-6 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-gold-400 mr-2 animate-pulse"></span>
                    Portal Resmi Kanwil Ditjenpas Banten
                </div>
                
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-[1.15] mb-6 tracking-tight">
                    Transformasi Digital <br class="hidden md:block">
                    Kantor Wilayah Direktorat Jenderal Pemasyarakatan <span class="text-gradient-gold">Banten</span>
                </h2>
                
                <p class="text-lg text-brand-100 mb-8 max-w-2xl font-light leading-relaxed">
                    Mewujudkan sistem pemasyarakatan yang transparan, akuntabel, dan berorientasi pada pelayanan publik yang prima. Akses layanan dengan mudah, cepat, dan aman.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#layanan" class="bg-gold-500 hover:bg-gold-400 text-brand-900 font-bold px-8 py-4 rounded-full transition-all transform hover:scale-105 shadow-lg shadow-gold-500/30 text-center flex items-center justify-center">
                        Mulai Layanan <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
                    </a>
                    <a href="{{ url('/profil') }}" class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/20 font-medium px-8 py-4 rounded-full transition text-center flex items-center justify-center">
                        Tentang Kami
                    </a>
                </div>
            </div>
            
            <!-- Hero Illustration (Modern Animated Mockup) -->
            <div class="hidden md:block md:w-2/5 mt-16 md:mt-0 relative" data-aos="fade-left" data-aos-delay="200">
                <div class="relative w-full max-w-md mx-auto aspect-square flex items-center justify-center">
                    
                    <!-- Decorative Radial Glow Background -->
                    <div class="absolute w-72 h-72 rounded-full bg-brand-400/20 blur-[60px] animate-pulse-slow"></div>

                    <!-- Main Glassmorphism Dashboard Box -->
                    <div class="relative glass-panel p-6 rounded-3xl shadow-2xl animate-float w-72 text-left z-10">
                        <div class="flex justify-between items-center mb-6">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                                <span class="w-3 h-3 rounded-full bg-green-500"></span>
                            </div>
                            <span class="px-2 py-0.5 text-[9px] font-bold bg-green-500/20 text-green-400 rounded-md border border-green-500/35 flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-ping"></span>
                                System Live
                            </span>
                        </div>
                        
                        <div class="w-12 h-12 bg-gradient-to-br from-brand-400 to-brand-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                            <i class="fa-solid fa-shield-halved text-xl text-white"></i>
                        </div>
                        
                        <h3 class="font-extrabold text-lg text-white mb-1">E-Services</h3>
                        <p class="text-brand-200 text-xs font-light mb-4">Profesional & Berintegritas</p>
                        
                        <div class="space-y-3">
                            <div class="flex justify-between text-[10px] text-brand-200">
                                <span>Konektivitas UPT</span>
                                <span class="font-semibold text-white">100% Terhubung</span>
                            </div>
                            <div class="h-1.5 w-full bg-white/10 rounded-full overflow-hidden">
                                <div class="h-full w-full bg-gradient-to-r from-brand-400 to-emerald-400 rounded-full"></div>
                            </div>
                            <div class="flex justify-between text-[10px] text-brand-200 pt-1">
                                <span>Security Level</span>
                                <span class="font-semibold text-emerald-400">High Secure</span>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge 1: Status Layanan -->
                    <div class="absolute top-10 -left-6 glass-panel-light p-3.5 rounded-2xl shadow-xl animate-float-delayed z-20 flex items-center gap-3 border border-white/50">
                        <div class="bg-green-100 text-green-600 w-10 h-10 rounded-xl flex items-center justify-center shadow-inner"><i class="fa-solid fa-cloud-arrow-up text-base"></i></div>
                        <div>
                            <p class="text-[9px] text-slate-400 font-bold uppercase tracking-wider">SULTAN BANTEN</p>
                            <p class="text-xs font-extrabold text-slate-800">Real-Time Sync</p>
                        </div>
                    </div>

                    <!-- Floating Badge 2: Indeks Kepuasan -->
                    <div class="absolute bottom-12 -right-8 glass-panel-light p-3.5 rounded-2xl shadow-xl animate-float z-20 flex items-center gap-3 border border-white/50" style="animation-delay: 1.5s;">
                        <div class="bg-amber-100 text-amber-500 w-10 h-10 rounded-xl flex items-center justify-center shadow-inner"><i class="fa-solid fa-star text-base"></i></div>
                        <div>
                            <p class="text-[9px] text-slate-400 font-bold uppercase tracking-wider">INDEKS KEPUASAN</p>
                            <p class="text-xs font-extrabold text-slate-800">98.2% Sangat Baik</p>
                        </div>
                    </div>
                    
                </div>
            </div>  </div>
        </div>
    </section>

    <!-- PENGUMUMAN PENTING BAR -->
    <div class="max-w-6xl mx-auto px-4 relative z-20 -mt-6" data-aos="fade-up" data-aos-delay="400">
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 py-3 px-6 flex items-center">
            <div class="overflow-hidden w-full relative">
                <marquee class="text-lg md:text-xl font-bold text-slate-800" scrollamount="5">{!! $kanwil?->running_text ?? $kanwil?->description ?? 'Selamat Datang di Website Resmi Kantor Wilayah Kementerian Hukum dan HAM Banten' !!}</marquee>
            </div>
        </div>
    </div>



    <!-- PORTAL LAYANAN TERPADU (WO-002) -->
    <section id="portal-terpadu" class="py-20 bg-gradient-to-b from-blue-50/40 via-slate-50 to-indigo-50/30 relative overflow-hidden">
        <!-- Radial background glows for a premium aesthetic -->
        <div class="absolute w-[400px] h-[400px] rounded-full bg-brand-400/5 blur-[100px] top-[10%] left-[5%] pointer-events-none"></div>
        <div class="absolute w-[400px] h-[400px] rounded-full bg-gold-400/5 blur-[100px] bottom-[10%] right-[5%] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-50 border border-brand-200 text-brand-600 font-bold tracking-widest uppercase text-[10px] mb-4">
                    <i class="fa-solid fa-gateway"></i>
                    Portal Layanan Terpadu
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Quick Access & Layanan Terintegrasi</h2>
                <p class="text-slate-500 mt-4 max-w-xl mx-auto text-sm font-light">Akses cepat ke seluruh layanan, informasi publik, aplikasi internal, serta informasi Kantor Wilayah dalam satu pintu.</p>
                <div class="w-12 h-1.5 bg-brand-500 mx-auto mt-6 rounded-full"></div>
            </div>

            <!-- Grid 8 Categories -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- 1. Profil Kanwil -->
                <div class="bg-gradient-to-br from-blue-50/60 to-indigo-50/30 rounded-[2rem] p-6 border border-blue-200/60 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-blue-400/50 transition-all duration-300 flex flex-col justify-between group overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-1.5 w-full bg-gradient-to-r from-blue-600 to-brand-900 -mt-6 -mx-6 mb-6"></div>
                    <div>
                        <div class="w-14 h-14 bg-blue-100/80 text-brand-900 rounded-2xl flex items-center justify-center text-xl mb-6 transition-all duration-300 group-hover:bg-brand-900 group-hover:text-white">
                            <i class="fa-solid fa-building-user"></i>
                        </div>
                        <h3 class="font-extrabold text-brand-900 text-lg mb-2">Profil Kanwil</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6 font-light">Informasi kelembagaan, visi misi, maskot resmi, dan deskripsi Kantor Wilayah.</p>
                    </div>
                    <div class="border-t border-slate-200/60 pt-4 mt-auto">
                        <div class="flex flex-col gap-2">
                            <a href="{{ url('/profil') }}" class="text-xs font-bold text-slate-700 hover:text-brand-600 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-brand-500"></i> Profil Instansi
                            </a>
                            <a href="{{ url('/visi') }}" class="text-xs font-bold text-slate-700 hover:text-brand-600 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-brand-500"></i> Visi & Misi
                            </a>
                            <a href="{{ url('/maskot') }}" class="text-xs font-bold text-slate-700 hover:text-brand-600 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-brand-500"></i> Maskot Si Benteng
                            </a>
                            <a href="{{ url('/tentang') }}" class="text-xs font-bold text-slate-700 hover:text-brand-600 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-brand-500"></i> Tentang Aplikasi
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. Layanan Publik -->
                <div class="bg-gradient-to-br from-amber-50/60 to-orange-50/30 rounded-[2rem] p-6 border border-amber-200/60 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-amber-400/50 transition-all duration-300 flex flex-col justify-between group overflow-hidden" data-aos="fade-up" data-aos-delay="150">
                    <div class="h-1.5 w-full bg-gradient-to-r from-amber-500 to-gold-400 -mt-6 -mx-6 mb-6"></div>
                    <div>
                        <div class="w-14 h-14 bg-amber-100/80 text-gold-650 rounded-2xl flex items-center justify-center text-xl mb-6 transition-all duration-300 group-hover:bg-gold-500 group-hover:text-white">
                            <i class="fa-solid fa-handshake-angle"></i>
                        </div>
                        <h3 class="font-extrabold text-amber-900 text-lg mb-2">Layanan Publik</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6 font-light">Akses layanan perizinan, pengaduan online, serta informasi terpadu.</p>
                    </div>
                    <div class="border-t border-slate-200/60 pt-4 mt-auto">
                        <div class="flex flex-col gap-2">
                            <a href="https://sites.google.com/view/starpasbanten/" target="_blank" class="text-xs font-bold text-slate-700 hover:text-amber-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-gold-500"></i> STARPAS Banten <i class="fa-solid fa-arrow-up-right-from-square text-[8px] ml-1 text-slate-400"></i>
                            </a>
                            <a href="{{ url('/LayananPengaduan') }}" class="text-xs font-bold text-slate-700 hover:text-amber-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-gold-500"></i> Layanan Pengaduan
                            </a>
                            <a href="{{ url('/LayananPerizinan') }}" class="text-xs font-bold text-slate-700 hover:text-amber-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-gold-500"></i> Layanan Perizinan
                            </a>
                            <a href="{{ url('/LayananInformasi') }}" class="text-xs font-bold text-slate-700 hover:text-amber-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-gold-500"></i> Layanan Informasi
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3. Informasi Publik -->
                <div class="bg-gradient-to-br from-emerald-50/60 to-teal-50/30 rounded-[2rem] p-6 border border-emerald-200/60 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-emerald-400/50 transition-all duration-300 flex flex-col justify-between group overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-1.5 w-full bg-gradient-to-r from-emerald-500 to-teal-400 -mt-6 -mx-6 mb-6"></div>
                    <div>
                        <div class="w-14 h-14 bg-emerald-100/80 text-emerald-600 rounded-2xl flex items-center justify-center text-xl mb-6 transition-all duration-300 group-hover:bg-emerald-500 group-hover:text-white">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                        <h3 class="font-extrabold text-emerald-900 text-lg mb-2">Informasi Publik</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6 font-light">Keterbukaan informasi publik, hasil survei kepuasan, dan berita terbaru.</p>
                    </div>
                    <div class="border-t border-slate-200/60 pt-4 mt-auto">
                        <div class="flex flex-col gap-2">
                            <a href="{{ url('/survei') }}" class="text-xs font-bold text-slate-700 hover:text-emerald-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-emerald-500"></i> Survei Kepuasan
                            </a>
                            <a href="{{ url('/berita') }}" class="text-xs font-bold text-slate-700 hover:text-emerald-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-emerald-500"></i> Berita & Kegiatan
                            </a>
                            <a href="{{ url('/tentang') }}" class="text-xs font-bold text-slate-700 hover:text-emerald-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-emerald-500"></i> Profil Aplikasi
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 4. Dashboard Data -->
                <div class="bg-gradient-to-br from-cyan-50/60 to-blue-50/30 rounded-[2rem] p-6 border border-cyan-200/60 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-cyan-400/50 transition-all duration-300 flex flex-col justify-between group overflow-hidden" data-aos="fade-up" data-aos-delay="250">
                    <div class="h-1.5 w-full bg-gradient-to-r from-cyan-500 to-blue-400 -mt-6 -mx-6 mb-6"></div>
                    <div>
                        <div class="w-14 h-14 bg-cyan-100/80 text-cyan-600 rounded-2xl flex items-center justify-center text-xl mb-6 transition-all duration-300 group-hover:bg-cyan-500 group-hover:text-white">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h3 class="font-extrabold text-cyan-900 text-lg mb-2">Dashboard Data</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6 font-light">Visualisasi data hunian, peta lokasi UPT, dan statistik overkapasitas wilayah.</p>
                    </div>
                    <div class="border-t border-slate-200/60 pt-4 mt-auto">
                        <div class="flex flex-col gap-2">
                            <a href="https://sultan.ditjenpasbanten.com/dashboard.php" target="_blank" class="text-xs font-bold text-slate-700 hover:text-cyan-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-cyan-500"></i> Sultan Banten <i class="fa-solid fa-arrow-up-right-from-square text-[8px] ml-1 text-slate-400"></i>
                            </a>
                            <a href="#map" class="text-xs font-bold text-slate-700 hover:text-cyan-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-cyan-500"></i> Peta Lokasi UPT
                            </a>
                            <a href="#statistik-upt" class="text-xs font-bold text-slate-700 hover:text-cyan-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-cyan-500"></i> Statistik Hunian
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 5. Berita & Pengumuman -->
                <div class="bg-gradient-to-br from-rose-50/60 to-pink-50/30 rounded-[2rem] p-6 border border-rose-200/60 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-rose-400/50 transition-all duration-300 flex flex-col justify-between group overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-1.5 w-full bg-gradient-to-r from-rose-500 to-red-400 -mt-6 -mx-6 mb-6"></div>
                    <div>
                        <div class="w-14 h-14 bg-rose-100/80 text-rose-600 rounded-2xl flex items-center justify-center text-xl mb-6 transition-all duration-300 group-hover:bg-rose-500 group-hover:text-white">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                        <h3 class="font-extrabold text-rose-900 text-lg mb-2">Berita & Kabar</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6 font-light">Kumpulan berita terkini, pers release, dan siaran pers resmi dari wilayah Banten.</p>
                    </div>
                    <div class="border-t border-slate-200/60 pt-4 mt-auto">
                        <div class="flex flex-col gap-2">
                            <a href="{{ url('/berita') }}" class="text-xs font-bold text-slate-700 hover:text-rose-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-rose-500"></i> Berita Utama
                            </a>
                            <a href="{{ url('/berita') }}" class="text-xs font-bold text-slate-700 hover:text-rose-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-rose-500"></i> Galeri Kegiatan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 6. Aplikasi Internal -->
                <div class="bg-gradient-to-br from-indigo-50/60 to-violet-50/30 rounded-[2rem] p-6 border border-indigo-200/60 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-indigo-400/50 transition-all duration-300 flex flex-col justify-between group overflow-hidden" data-aos="fade-up" data-aos-delay="350">
                    <div class="h-1.5 w-full bg-gradient-to-r from-indigo-600 to-purple-500 -mt-6 -mx-6 mb-6"></div>
                    <div>
                        <div class="w-14 h-14 bg-indigo-100/80 text-indigo-600 rounded-2xl flex items-center justify-center text-xl mb-6 transition-all duration-300 group-hover:bg-indigo-600 group-hover:text-white">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h3 class="font-extrabold text-indigo-900 text-lg mb-2">Aplikasi Internal</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6 font-light">Inovasi SIPAS, sistem update laporan Sultan, dan portal pengelolaan administrasi.</p>
                    </div>
                    <div class="border-t border-slate-200/60 pt-4 mt-auto">
                        <div class="flex flex-col gap-2">
                            <a href="https://sipas.ditjenpasbanten.com/" target="_blank" class="text-xs font-bold text-slate-700 hover:text-indigo-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-indigo-500"></i> SIPAS Banten <i class="fa-solid fa-arrow-up-right-from-square text-[8px] ml-1 text-slate-400"></i>
                            </a>
                            <a href="{{ url('/login') }}" class="text-xs font-bold text-slate-700 hover:text-indigo-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-indigo-500"></i> Login Admin Portal
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 7. Kontak & Pengaduan -->
                <div class="bg-gradient-to-br from-purple-50/60 to-fuchsia-50/30 rounded-[2rem] p-6 border border-purple-200/60 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-purple-400/50 transition-all duration-300 flex flex-col justify-between group overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <div class="h-1.5 w-full bg-gradient-to-r from-purple-600 to-pink-500 -mt-6 -mx-6 mb-6"></div>
                    <div>
                        <div class="w-14 h-14 bg-purple-100/80 text-purple-600 rounded-2xl flex items-center justify-center text-xl mb-6 transition-all duration-300 group-hover:bg-purple-600 group-hover:text-white">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <h3 class="font-extrabold text-purple-900 text-lg mb-2">Kontak & Aduan</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6 font-light">Hubungi call center, layanan pengaduan integritas, atau kirim surel ke redaksi.</p>
                    </div>
                    <div class="border-t border-slate-200/60 pt-4 mt-auto">
                        <div class="flex flex-col gap-2">
                            <a href="{{ url('/formpengaduan') }}" class="text-xs font-bold text-slate-700 hover:text-purple-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-purple-500"></i> Form Pengaduan
                            </a>
                            <a href="https://wa.me/6282266662055" target="_blank" class="text-xs font-bold text-slate-700 hover:text-purple-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-purple-500"></i> WhatsApp Chat <i class="fa-brands fa-whatsapp ml-1 text-emerald-500"></i>
                            </a>
                            <a href="#kontakkanwil" class="text-xs font-bold text-slate-700 hover:text-purple-700 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-purple-500"></i> Alamat & Lokasi
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 8. Tautan Penting -->
                <div class="bg-gradient-to-br from-slate-150 to-slate-50 rounded-[2rem] p-6 border border-slate-300/60 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-slate-400/50 transition-all duration-300 flex flex-col justify-between group overflow-hidden" data-aos="fade-up" data-aos-delay="450">
                    <div class="h-1.5 w-full bg-gradient-to-r from-slate-600 to-slate-400 -mt-6 -mx-6 mb-6"></div>
                    <div>
                        <div class="w-14 h-14 bg-slate-200 text-slate-700 rounded-2xl flex items-center justify-center text-xl mb-6 transition-all duration-300 group-hover:bg-slate-700 group-hover:text-white">
                            <i class="fa-solid fa-link"></i>
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-lg mb-2">Tautan Penting</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-6 font-light">Tautan langsung ke portal instansi vertikal Kemenkumham RI dan Ditjenpas.</p>
                    </div>
                    <div class="border-t border-slate-200/60 pt-4 mt-auto">
                        <div class="flex flex-col gap-2">
                            <a href="https://ditjenpas.go.id" target="_blank" class="text-xs font-bold text-slate-700 hover:text-slate-900 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-slate-400"></i> Ditjen Pemasyarakatan <i class="fa-solid fa-arrow-up-right-from-square text-[8px] ml-1 text-slate-400"></i>
                            </a>
                            <a href="https://kemenkumham.go.id" target="_blank" class="text-xs font-bold text-slate-700 hover:text-slate-900 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-slate-400"></i> Kemenkumham RI <i class="fa-solid fa-arrow-up-right-from-square text-[8px] ml-1 text-slate-400"></i>
                            </a>
                            <a href="https://banten.kemenkumham.go.id" target="_blank" class="text-xs font-bold text-slate-700 hover:text-slate-900 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-slate-400"></i> Kanwil Kemenkumham Banten <i class="fa-solid fa-arrow-up-right-from-square text-[8px] ml-1 text-slate-400"></i>
                            </a>
                            <a href="https://www.lapor.go.id" target="_blank" class="text-xs font-bold text-slate-700 hover:text-slate-900 flex items-center transition-all duration-200 hover:translate-x-1">
                                <i class="fa-solid fa-chevron-right text-[8px] mr-2 text-slate-400"></i> Portal E-Lapor <i class="fa-solid fa-arrow-up-right-from-square text-[8px] ml-1 text-slate-400"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- WILAYAH KERJA MAP & INFOGRAPHICS -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-50 border border-brand-200 text-brand-600 font-bold tracking-widest uppercase text-[10px] mb-4">
                    <i class="fa-solid fa-map-location-dot"></i>
                    Peta Digital Sultan Banten
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gradient-brand tracking-tight">Infografis Unit Pelaksana Teknis</h2>
                <p class="text-slate-500 mt-3 max-w-lg mx-auto text-sm font-light">Data kapasitas dan status hunian seluruh UPT wilayah Provinsi Banten</p>
                <div class="w-12 h-1.5 bg-brand-500 mx-auto mt-6 rounded-full"></div>
            </div>
            
            <div class="w-full bg-gradient-to-br from-white to-blue-50/10 rounded-[3rem] p-6 md:p-10 shadow-soft border border-blue-100/80 overflow-hidden relative" data-aos="zoom-in">
                <style>
                    .custom-marker {
                        background: transparent !important;
                        border: none !important;
                    }
                    .leaflet-popup-content-wrapper {
                        border-radius: 1rem !important;
                        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
                        border: 1px solid #e2e8f0 !important;
                        padding: 4px !important;
                    }
                    .leaflet-popup-content {
                        margin: 8px 12px !important;
                    }
                    .leaflet-popup-tip {
                        background: white !important;
                        box-shadow: none !important;
                    }
                </style>

                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                    <div>
                        <h3 class="font-bold text-slate-800 text-lg flex items-center">
                            <i class="fas fa-map-marked-alt mr-2 text-brand-600"></i> Peta Lokasi Unit Pelaksana Teknis
                        </h3>
                        <p class="text-xs text-slate-400 mt-1">Klik marker untuk melihat detail kapasitas dan status hunian UPT</p>
                    </div>
                    <div class="flex items-center space-x-1.5 bg-slate-100 p-1 rounded-xl" role="group">
                        <button type="button" class="px-3 py-1.5 text-xs font-semibold rounded-lg transition-all text-slate-500 hover:text-slate-800 hover:bg-slate-50" id="btnStreet">Street</button>
                        <button type="button" class="px-3 py-1.5 text-xs font-semibold rounded-lg transition-all text-slate-500 hover:text-slate-800 hover:bg-slate-50" id="btnSatellite">Satellite</button>
                        <button type="button" class="px-3 py-1.5 text-xs font-semibold rounded-lg transition-all bg-white text-slate-800 shadow-sm border-slate-200" id="btnHybrid">Hybrid</button>
                    </div>
                </div>

                <div class="relative w-full overflow-hidden rounded-2xl group">
                    <div id="map" style="height: 500px; z-index: 1;"></div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Define Map Layers
                            const streetLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                            });

                            const satelliteLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                                attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
                            });

                            const hybridLayer = L.layerGroup([
                                satelliteLayer,
                                L.tileLayer('https://services.arcgisonline.com/ArcGIS/rest/services/Reference/World_Boundaries_and_Places/MapServer/tile/{z}/{y}/{x}', {
                                    attribution: 'Labels &copy; Esri'
                                })
                            ]);

                            // Initialize Map on #map with Hybrid as default
                            const map = L.map('map', {
                                layers: [hybridLayer]
                            }).setView([-6.4409, 106.1385], 9);

                            // Map Mode Switcher Logic
                            const btnStreet = document.getElementById('btnStreet');
                            const btnSatellite = document.getElementById('btnSatellite');
                            const btnHybrid = document.getElementById('btnHybrid');

                            function updateActiveMapBtn(activeBtn) {
                                [btnStreet, btnSatellite, btnHybrid].forEach(btn => {
                                    btn.className = 'px-3 py-1.5 text-xs font-semibold rounded-lg transition-all text-slate-500 hover:text-slate-800 hover:bg-slate-50';
                                });
                                activeBtn.className = 'px-3 py-1.5 text-xs font-semibold rounded-lg transition-all bg-white text-slate-800 shadow-sm border-slate-200';
                            }

                            btnStreet.addEventListener('click', function() {
                                map.removeLayer(satelliteLayer);
                                map.removeLayer(hybridLayer);
                                streetLayer.addTo(map);
                                updateActiveMapBtn(this);
                            });

                            btnSatellite.addEventListener('click', function() {
                                map.removeLayer(streetLayer);
                                map.removeLayer(hybridLayer);
                                satelliteLayer.addTo(map);
                                updateActiveMapBtn(this);
                            });

                            btnHybrid.addEventListener('click', function() {
                                map.removeLayer(streetLayer);
                                map.removeLayer(satelliteLayer);
                                hybridLayer.addTo(map);
                                updateActiveMapBtn(this);
                            });

                            // Banten Province Boundary (simplified GeoJSON)
                            const bantenBoundary = {
                                "type": "Feature",
                                "properties": {"name": "Banten"},
                                "geometry": {
                                    "type": "Polygon",
                                    "coordinates": [[
                                        [105.1, -5.9], [105.3, -5.85], [105.6, -5.9], [105.8, -6.0],
                                        [106.0, -6.1], [106.2, -6.2], [106.4, -6.3], [106.6, -6.5],
                                        [106.8, -6.6], [106.9, -6.7], [107.0, -6.85], [106.95, -7.0],
                                        [106.8, -7.1], [106.6, -7.05], [106.4, -6.95], [106.2, -6.85],
                                        [106.0, -6.75], [105.8, -6.6], [105.6, -6.45], [105.4, -6.3],
                                        [105.2, -6.1], [105.1, -5.9]
                                    ]]
                                }
                            };

                            // Add boundary layer
                            L.geoJSON(bantenBoundary, {
                                style: {
                                    color: '#667eea',
                                    weight: 2,
                                    opacity: 0.6,
                                    fillColor: '#667eea',
                                    fillOpacity: 0.05
                                }
                            }).addTo(map);

                            // Custom marker icon (linear gradient matching the dashboard)
                            const uptIcon = L.divIcon({
                                className: 'custom-marker',
                                html: '<div style="background: linear-gradient(135deg, #1b3d6a 0%, #3b82f6 100%); width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 14px; box-shadow: 0 2px 8px rgba(0,0,0,0.3); border: 2px solid white;"><i class="fas fa-building" style="font-size: 12px;"></i></div>',
                                iconSize: [32, 32],
                                iconAnchor: [16, 16],
                                popupAnchor: [0, -16]
                            });

                            // Add markers dynamically from PHP $uptData
                            const uptLocations = @json($uptData);
                            
                            const uptDetails = {
                                "1": {
                                    latitude: -6.185508,
                                    longitude: 106.637717,
                                    alamat: "Jalan Veteran No.2, RT.03 / RW.11, Babakan, Tangerang, Jl. Veteran II No.27, RT.005/RW.004, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118"
                                },
                                "3": {
                                    latitude: -6.178012,
                                    longitude: 106.637164,
                                    alamat: "RT.001/RW.012, Buaran Indah, Kec. Tangerang, Kota Tangerang, Banten 15119"
                                },
                                "4": {
                                    latitude: -6.1676953,
                                    longitude: 106.6446013,
                                    alamat: "Jl. Daan Mogot Km-23 No.28C, RT.005/RW.013, Tanah Tinggi, Kec. Tangerang, Kota Tangerang, Banten 15000"
                                },
                                "5": {
                                    latitude: -6.1906176,
                                    longitude: 106.6358023,
                                    alamat: "Jl. Mochammad Yamin No.1, RT.001/RW.004, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118"
                                },
                                "6": {
                                    latitude: -6.1660207,
                                    longitude: 106.1519884,
                                    alamat: "Jalan Raya Pandeglang KM. 6,5 Cipocok Jaya, Karundang, Kec. Serang, Kota Serang, Banten 42125"
                                },
                                "7": {
                                    latitude: -6.168182,
                                    longitude: 106.639025,
                                    alamat: "Jl. Daan Mogot No.29 C, RT.001/RW.001, Sukaasih, Kec. Tangerang, Kota Tangerang, Banten 15111"
                                },
                                "8": {
                                    latitude: -6.35870948,
                                    longitude: 106.2468988,
                                    alamat: "Jl. Multatuli No.12, Muara Ciujung Bar., Kec. Rangkasbitung, Kabupaten Lebak, Banten 42312"
                                },
                                "9": {
                                    latitude: -6.32011317,
                                    longitude: 106.52308508,
                                    alamat: "Jl. Raya Ciangir, Ciangir, Kec. Legok, Kabupaten Tangerang, Banten 15820"
                                },
                                "10": {
                                    latitude: -6.05630898,
                                    longitude: 106.05491684,
                                    alamat: "W3V3+9XP, Jl. Cikerai, Kalitimbang, Kec. Cibeber, Kota Cilegon, Banten 42426"
                                },
                                "11": {
                                    latitude: -6.3238496,
                                    longitude: 106.50041058,
                                    alamat: "Jl. Pacing Raya Ds. Taban Kc. Jambe, Tigaraksa, Taban, Kec. Jambe, Kabupaten Tangerang, Banten 15720"
                                },
                                "12": {
                                    latitude: -6.11297683,
                                    longitude: 106.15262677,
                                    alamat: "Jl. Mayor syafei No.118, Kotabaru, Kec. Serang, Kota Serang, Banten 42112"
                                },
                                "13": {
                                    latitude: -6.30823167,
                                    longitude: 106.1047918,
                                    alamat: "Jl. Masjid Agung, Pandeglang, Kec. Pandeglang, Kabupaten Pandeglang, Banten 42211"
                                }
                            };

                            const markers = [];

                            function formatNumber(num) {
                                return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                            }

                            uptLocations.forEach(upt => {
                                const details = uptDetails[upt.id];
                                
                                // Prefer database coordinates/address if returned, otherwise fallback to static mapping
                                const latitude = parseFloat(upt.latitude) || (details ? details.latitude : null);
                                const longitude = parseFloat(upt.longitude) || (details ? details.longitude : null);
                                const alamat = upt.alamat || (details ? details.alamat : 'Alamat tidak tersedia');

                                if (!latitude || !longitude) return;

                                const totalPenghuni = parseInt(upt.isi_penghuni) || 0;
                                const kapasitas = parseInt(upt.kapasitas) || 0;
                                const persen = kapasitas > 0 ? Math.round(((totalPenghuni - kapasitas) / kapasitas) * 100) : 0;
                                const persenText = persen > 0 ? '+' + persen + '%' : persen + '%';
                                
                                // Determine color based on capacity percentage (new formula)
                                let statusColor = '#22c55e'; // green (masih longgar)
                                let statusText = 'Masih Longgar';
                                if (persen > 100) { statusColor = '#b71c1c'; statusText = 'Sangat Over'; }
                                else if (persen > 20) { statusColor = '#ef4444'; statusText = 'Over Kapasitas'; }
                                else if (persen > 0) { statusColor = '#ff9800'; statusText = 'Sedikit Over'; }
                                else if (persen === 0) { statusColor = '#eab308'; statusText = 'Pas Penuh'; }
                                else if (persen > -25) { statusColor = '#06b6d4'; statusText = 'Hampir Penuh'; }

                                const marker = L.marker([latitude, longitude], { icon: uptIcon })
                                    .addTo(map)
                                    .bindPopup(`
                                        <div style="min-width: 220px; font-family: 'Plus Jakarta Sans', sans-serif;">
                                            <h6 style="margin: 0 0 8px 0; color: #1b3d6a; font-weight: bold; font-size: 13px;">
                                                <i class="fas fa-building"></i> ${upt.nama_upt}
                                            </h6>
                                            <p style="margin: 0 0 5px 0; font-size: 11px; line-height: 1.4;">
                                                <a href="https://www.google.com/maps/search/?api=1&query=${latitude},${longitude}" target="_blank" rel="noopener noreferrer" style="color: #64748b; text-decoration: none; display: inline-flex; align-items: flex-start; gap: 4px; transition: color 0.2s;" onmouseover="this.style.color='#2563eb'; this.style.textDecoration='underline';" onmouseout="this.style.color='#64748b'; this.style.textDecoration='none';">
                                                    <i class="fas fa-map-marker-alt text-red-500" style="margin-top: 2px;"></i>
                                                    <span>${alamat}</span>
                                                </a>
                                            </p>
                                            <hr style="margin: 8px 0; border-color: #e2e8f0;">
                                            <div style="display: flex; justify-content: space-between; margin-bottom: 4px;">
                                                <span style="font-size: 11px; color: #475569;"><i class="fas fa-bed text-sky-500"></i> Kapasitas:</span>
                                                <strong style="font-size: 11px; color: #1e293b;">${formatNumber(kapasitas)}</strong>
                                            </div>
                                            <div style="display: flex; justify-content: space-between; margin-bottom: 4px;">
                                                <span style="font-size: 11px; color: #475569;"><i class="fas fa-users text-indigo-500"></i> Penghuni:</span>
                                                <strong style="font-size: 11px; color: #1e293b;">${formatNumber(totalPenghuni)}</strong>
                                            </div>
                                            <div style="display: flex; justify-content: space-between; margin-bottom: 4px;">
                                                <span style="font-size: 11px; color: #475569;"><i class="fas fa-user-lock text-emerald-500"></i> Tahanan / Napi:</span>
                                                <strong style="font-size: 11px; color: #1e293b;">${formatNumber(upt.tahanan)} / ${formatNumber(upt.narapidana)}</strong>
                                            </div>
                                            <div style="display: flex; justify-content: space-between;">
                                                <span style="font-size: 11px; color: #475569;"><i class="fas fa-percentage" style="color:${statusColor}"></i> Status:</span>
                                                <strong style="font-size: 11px; color: ${statusColor};">${persenText} (${statusText})</strong>
                                            </div>
                                        </div>
                                    `);
                                marker.uptData = {
                                    persen: persen,
                                    tahanan: parseInt(upt.tahanan) || 0,
                                    narapidana: parseInt(upt.narapidana) || 0
                                };
                                markers.push(marker);
                            });

                            // Fit bounds to show all markers if there are any
                            if (markers.length > 0) {
                                const group = L.featureGroup(markers);
                                map.fitBounds(group.getBounds().pad(0.1));
                            }

                            // Fix map display issue when in hidden container
                            setTimeout(() => {
                                map.invalidateSize();
                            }, 500);

                            // Banten safe bounds fallback
                            const bantenCenter = [-6.4409, 106.1385];
                            const bantenDefaultZoom = 9;

                            // Helper: show toast notification
                            function showMapToast(message, color) {
                                let toast = document.getElementById('map-filter-toast');
                                if (!toast) {
                                    toast = document.createElement('div');
                                    toast.id = 'map-filter-toast';
                                    toast.style.cssText = 'position:absolute;top:12px;left:50%;transform:translateX(-50%);z-index:9999;pointer-events:none;transition:opacity 0.3s ease;';
                                    document.getElementById('map').parentNode.style.position = 'relative';
                                    document.getElementById('map').parentNode.appendChild(toast);
                                }
                                toast.innerHTML = `<span style="display:inline-flex;align-items:center;gap:6px;background:${color};color:#fff;font-size:11px;font-weight:700;padding:6px 14px;border-radius:999px;box-shadow:0 4px 14px rgba(0,0,0,0.18);letter-spacing:0.03em;">${message}</span>`;
                                toast.style.opacity = '1';
                                clearTimeout(toast._t);
                                toast._t = setTimeout(() => { toast.style.opacity = '0'; }, 3000);
                            }

                            // Interactive filter markers
                            let activeFilter = 'all';
                            window.filterMapMarkers = function(filterType, cardEl) {
                                // Toggle off if same card clicked again
                                if (activeFilter === filterType && filterType !== 'all') {
                                    filterType = 'all';
                                }
                                activeFilter = filterType;

                                // Reset styling of all stat cards
                                document.querySelectorAll('.stat-card').forEach(card => {
                                    card.classList.remove('ring-4', 'ring-brand-500/30', 'scale-[1.02]', 'shadow-xl');
                                });

                                // Highlight clicked card if not resetting
                                if (cardEl && filterType !== 'all') {
                                    cardEl.classList.add('ring-4', 'ring-brand-500/30', 'scale-[1.02]', 'shadow-xl');
                                }

                                // Filter markers based on type
                                markers.forEach(m => {
                                    let show = true;
                                    if (filterType === 'over') {
                                        show = m.uptData.persen > 0;
                                    } else if (filterType === 'tahanan') {
                                        show = m.uptData.tahanan > 0;
                                    } else if (filterType === 'narapidana') {
                                        show = m.uptData.narapidana > 0;
                                    }

                                    if (show) {
                                        if (!map.hasLayer(m)) m.addTo(map);
                                    } else {
                                        if (map.hasLayer(m)) map.removeLayer(m);
                                    }
                                });

                                const activeMarkers = markers.filter(m => map.hasLayer(m));

                                if (activeMarkers.length > 0) {
                                    try {
                                        const group = L.featureGroup(activeMarkers);
                                        const bounds = group.getBounds();

                                        // Validate bounds are within Banten region (prevent zooming to Indonesia)
                                        const sw = bounds.getSouthWest();
                                        const ne = bounds.getNorthEast();
                                        const isValidBanten = (
                                            sw.lat > -8 && sw.lat < -5 &&
                                            sw.lng > 104 && sw.lng < 108 &&
                                            ne.lat > -8 && ne.lat < -5 &&
                                            ne.lng > 104 && ne.lng < 108
                                        );

                                        if (isValidBanten) {
                                            map.fitBounds(bounds.pad(0.15), { maxZoom: 13, animate: true });
                                        } else {
                                            // Fallback: zoom to Banten center
                                            map.setView(bantenCenter, bantenDefaultZoom, { animate: true });
                                        }
                                    } catch(e) {
                                        map.setView(bantenCenter, bantenDefaultZoom, { animate: true });
                                    }

                                    // Show toast notification about active filter
                                    const filterLabels = {
                                        'all': '🗺️ Menampilkan Semua UPT',
                                        'over': '🔴 Filter: UPT Overkapasitas',
                                        'tahanan': '🔵 Filter: UPT dengan Tahanan',
                                        'narapidana': '🟡 Filter: UPT dengan Narapidana'
                                    };
                                    const toastColors = {
                                        'all': '#1b3d6a',
                                        'over': '#dc2626',
                                        'tahanan': '#2563eb',
                                        'narapidana': '#d97706'
                                    };
                                    showMapToast(
                                        (filterLabels[filterType] || '🗺️ Filter Aktif') + ' (' + activeMarkers.length + ' UPT)',
                                        toastColors[filterType] || '#1b3d6a'
                                    );
                                } else {
                                    // No markers visible - reset to Banten
                                    map.setView(bantenCenter, bantenDefaultZoom, { animate: true });
                                    showMapToast('⚠️ Tidak ada UPT yang sesuai filter', '#6b7280');
                                }
                            };

                            // Client-side HTML polling auto-refresh
                            let refreshTimer = null;
                            let refreshCountdown = 300;

                            function scheduleRefresh() {
                                refreshCountdown = 300;
                                refreshTimer = setInterval(() => {
                                    refreshCountdown--;
                                    if (refreshCountdown <= 0) {
                                        clearInterval(refreshTimer);
                                        doRefresh();
                                    }
                                }, 1000);
                            }

                            function doRefresh() {
                                fetch(window.location.href, { cache: 'no-cache' })
                                    .then(response => {
                                        if (!response.ok) throw new Error('Network error');
                                        return response.text();
                                    })
                                    .then(html => {
                                        const parser = new DOMParser();
                                        const doc = parser.parseFromString(html, 'text/html');

                                        // Update stat cards
                                        const cardIds = ['card-tahanan', 'card-narapidana', 'card-penghuni', 'card-kapasitas', 'card-over'];
                                        cardIds.forEach(id => {
                                            const oldEl = document.getElementById(id);
                                            const newEl = doc.getElementById(id);
                                            if (oldEl && newEl) {
                                                oldEl.innerHTML = newEl.innerHTML;
                                            }
                                        });

                                        // Update stats table
                                        const oldTable = document.querySelector('.modern-table tbody');
                                        const newTable = doc.querySelector('.modern-table tbody');
                                        if (oldTable && newTable) {
                                            oldTable.innerHTML = newTable.innerHTML;
                                        }

                                        showMapToast('✅ Data diperbarui otomatis', '#059669');
                                        console.log('[Auto-Refresh] Dashboard stats updated at', new Date().toLocaleTimeString('id-ID'));
                                        scheduleRefresh();
                                    })
                                    .catch(err => {
                                        console.warn('[Auto-Refresh] Failed:', err);
                                        scheduleRefresh(); // retry after next interval
                                    });
                            }

                            // Start the refresh schedule after 5 minutes
                            scheduleRefresh();
                        });
                    </script>
                </div>

                
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                    @php
                        $tahananCount = $totalStats['tahanan'] ?? 0;
                        $napiCount = $totalStats['narapidana'] ?? 0;
                        $penghuniCount = $totalStats['isi_penghuni'] ?? 1;
                        $kapasitasCount = $totalStats['kapasitas'] ?? 1;
                        
                        $tahananPercent = round(($tahananCount / max($penghuniCount, 1)) * 100, 1);
                        $napiPercent = round(($napiCount / max($penghuniCount, 1)) * 100, 1);
                        $occupancyRate = round(($penghuniCount / max($kapasitasCount, 1)) * 100, 1);
                        
                        $overPercent = $totalStats['persen_overkapasitas'] ?? 0;
                        if ($overPercent > 100) {
                            $overStatusClass = 'bg-red-100/80 text-red-800 border-red-200/50';
                            $overStatusLabel = 'Sangat Padat';
                        } elseif ($overPercent > 20) {
                            $overStatusClass = 'bg-orange-100/80 text-orange-850 border-orange-200/50';
                            $overStatusLabel = 'Over Kapasitas';
                        } elseif ($overPercent > 0) {
                            $overStatusClass = 'bg-amber-100/80 text-amber-850 border-amber-200/50';
                            $overStatusLabel = 'Cukup Padat';
                        } else {
                            $overStatusClass = 'bg-green-100/80 text-green-800 border-green-200/50';
                            $overStatusLabel = 'Normal';
                        }
                    @endphp
                    
                    <!-- Total Tahanan -->
                    <div id="card-tahanan" class="stat-card cursor-pointer bg-gradient-to-br from-blue-50/70 to-indigo-50/50 p-5 rounded-2xl border border-blue-200/80 hover:border-blue-400/60 hover:shadow-lg hover:shadow-blue-500/10 transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between min-h-[120px] active:scale-95" onclick="filterMapMarkers('tahanan', this)">
                        <div class="flex justify-between items-start">
                            <p class="text-[10px] text-brand-650 font-bold uppercase tracking-wider">Total Tahanan</p>
                            <span class="icon-wrap p-2 bg-blue-100 text-brand-900 rounded-xl shadow-sm">
                                <i class="fa-solid fa-handcuffs text-base"></i>
                            </span>
                        </div>
                        <div>
                            <p class="text-3xl md:text-4xl font-extrabold text-brand-950 tracking-tight mt-2 stat-number">{{ number_format($tahananCount, 0, ',', '.') }}</p>
                            <div class="flex items-center gap-2 mt-1">
                                <p class="text-[9px] text-slate-500 font-semibold">{{ $tahananPercent }}% dari total hunian</p>
                                @if($tahananCount > 0)
                                <span class="inline-flex items-center px-1.5 py-0.5 rounded-full text-[8px] font-bold bg-blue-100 text-blue-700 border border-blue-200">Aktif</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Total Narapidana -->
                    <div id="card-narapidana" class="stat-card cursor-pointer bg-gradient-to-br from-amber-50/70 to-orange-50/50 p-5 rounded-2xl border border-amber-200/80 hover:border-amber-400/60 hover:shadow-lg hover:shadow-amber-500/10 transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between min-h-[120px] active:scale-95" onclick="filterMapMarkers('narapidana', this)">
                        <div class="flex justify-between items-start">
                            <p class="text-[10px] text-amber-700 font-bold uppercase tracking-wider">Total Narapidana</p>
                            <span class="icon-wrap p-2 bg-amber-100 text-amber-700 rounded-xl shadow-sm">
                                <i class="fa-solid fa-user-lock text-base"></i>
                            </span>
                        </div>
                        <div>
                            <p class="text-3xl md:text-4xl font-extrabold text-amber-950 tracking-tight mt-2 stat-number">{{ number_format($napiCount, 0, ',', '.') }}</p>
                            <div class="flex items-center gap-2 mt-1">
                                <p class="text-[9px] text-slate-500 font-semibold">{{ $napiPercent }}% dari total hunian</p>
                                @if($napiCount > 0)
                                <span class="inline-flex items-center px-1.5 py-0.5 rounded-full text-[8px] font-bold bg-amber-100 text-amber-700 border border-amber-200">Hukum Berjalan</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Total Penghuni -->
                    <div id="card-penghuni" class="stat-card cursor-pointer bg-gradient-to-br from-indigo-50/70 to-violet-50/50 p-5 rounded-2xl border border-indigo-200/80 hover:border-indigo-400/60 hover:shadow-lg hover:shadow-indigo-500/10 transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between min-h-[120px] active:scale-95" onclick="filterMapMarkers('all', this)">
                        <div class="flex justify-between items-start">
                            <p class="text-[10px] text-indigo-650 font-bold uppercase tracking-wider">Total Penghuni</p>
                            <span class="icon-wrap p-2 bg-indigo-100 text-indigo-700 rounded-xl shadow-sm">
                                <i class="fa-solid fa-users text-base"></i>
                            </span>
                        </div>
                        <div class="mt-2">
                            <p class="text-3xl md:text-4xl font-extrabold text-indigo-950 tracking-tight stat-number">{{ number_format($totalStats['isi_penghuni'] ?? 0, 0, ',', '.') }}</p>
                            <div class="mt-2">
                                <div class="flex justify-between items-center text-[9px] text-slate-500 font-bold uppercase mb-1">
                                    <span>Rasio Hunian</span>
                                    <span>{{ $occupancyRate }}%</span>
                                </div>
                                <div class="w-full bg-slate-200 h-1.5 rounded-full overflow-hidden">
                                    <div class="bg-indigo-600 h-full rounded-full transition-all duration-500" style="width: {{ min($occupancyRate, 100) }}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kapasitas -->
                    <div id="card-kapasitas" class="stat-card cursor-pointer bg-gradient-to-br from-slate-100/80 to-slate-50/50 p-5 rounded-2xl border border-slate-300/70 hover:border-slate-400/60 hover:shadow-lg hover:shadow-slate-500/10 transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between min-h-[120px] active:scale-95" onclick="filterMapMarkers('all', this)">
                        <div class="flex justify-between items-start">
                            <p class="text-[10px] text-slate-600 font-bold uppercase tracking-wider">Kapasitas</p>
                            <span class="icon-wrap p-2 bg-slate-200 text-slate-700 rounded-xl shadow-sm">
                                <i class="fa-solid fa-bed text-base"></i>
                            </span>
                        </div>
                        <div>
                            <p class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight mt-2 stat-number">{{ number_format($kapasitasCount, 0, ',', '.') }}</p>
                            <p class="text-[9px] text-slate-500 mt-1 font-semibold">Kapasitas tempat tidur UPT</p>
                        </div>
                    </div>

                    <!-- Overkapasitas -->
                    <div id="card-over" class="stat-card cursor-pointer bg-gradient-to-br from-rose-50/80 to-pink-50/50 p-5 rounded-2xl border border-rose-200/80 hover:border-rose-400/60 hover:shadow-lg hover:shadow-rose-500/10 transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between min-h-[120px] active:scale-95" onclick="filterMapMarkers('over', this)">
                        <div class="flex justify-between items-start">
                            <p class="text-[10px] text-rose-650 font-bold uppercase tracking-wider">Overkapasitas</p>
                            <span class="icon-wrap p-2 bg-rose-100 text-rose-600 rounded-xl shadow-sm">
                                <i class="fa-solid fa-triangle-exclamation text-base"></i>
                            </span>
                        </div>
                        <div>
                            <p class="text-3xl md:text-4xl font-extrabold text-rose-950 tracking-tight mt-2 stat-number">{{ $overPercent }}%</p>
                            <div class="mt-1 flex items-center gap-2">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[9px] font-extrabold uppercase border {{ $overStatusClass }}">
                                    <span class="w-1.5 h-1.5 rounded-full bg-current mr-1.5 animate-pulse"></span>
                                    {{ $overStatusLabel }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- TABEL PENGHUNI & OVERKAPASITAS PER UPT -->
    <section id="statistik-upt" class="py-16 bg-gradient-to-b from-slate-50 to-blue-50/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-700 font-bold tracking-widest uppercase text-[10px] mb-4">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    Data Real-Time
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gradient-brand tracking-tight">Data Penghuni &amp; Overkapasitas per UPT</h2>
                <p class="text-slate-500 mt-3 max-w-lg mx-auto text-sm font-light">Monitor distribusi penghuni dan tingkat hunian setiap unit pelaksana teknis</p>
                <div class="w-12 h-1.5 bg-brand-500 mx-auto mt-6 rounded-full"></div>
            </div>

            <style>
                .modern-table tbody tr {
                    transition: all 0.25s ease;
                }
                .modern-table tbody tr:hover {
                    background-color: rgba(27, 61, 106, 0.03) !important;
                    transform: translateY(-2px);
                    box-shadow: 0 8px 20px -6px rgba(0, 0, 0, 0.08);
                }
                .badge-modern {
                    display: inline-flex;
                    align-items: center;
                    padding: 0.35rem 0.75rem;
                    border-radius: 9999px;
                    font-size: 0.75rem;
                    font-weight: 700;
                    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
                    border-width: 1px;
                }
                .badge-dot {
                    width: 0.375rem;
                    height: 0.375rem;
                    border-radius: 50%;
                    margin-right: 0.5rem;
                    display: inline-block;
                }
                .progress-bar-container {
                    width: 6rem;
                    background-color: #f1f5f9;
                    border-radius: 9999px;
                    height: 0.375rem;
                    overflow: hidden;
                    display: inline-block;
                }
                .progress-bar-fill {
                    height: 100%;
                    border-radius: 9999px;
                    transition: width 0.6s cubic-bezier(0.4, 0, 0.2, 1);
                }

                /* Status Specific Colors */
                .status-longgar {
                    background-color: #eff6ff !important;
                    color: #1d4ed8 !important;
                    border-color: rgba(191, 219, 254, 0.6) !important;
                }
                .status-longgar .badge-dot, .progress-longgar {
                    background-color: #3b82f6 !important;
                }

                .status-hampir_penuh {
                    background-color: #ecfdf5 !important;
                    color: #047857 !important;
                    border-color: rgba(167, 243, 208, 0.6) !important;
                }
                .status-hampir_penuh .badge-dot, .progress-hampir_penuh {
                    background-color: #10b981 !important;
                }

                .status-sedikit_over {
                    background-color: #fffbeb !important;
                    color: #b45309 !important;
                    border-color: rgba(253, 230, 138, 0.6) !important;
                }
                .status-sedikit_over .badge-dot, .progress-sedikit_over {
                    background-color: #f59e0b !important;
                }

                .status-over {
                    background-color: #fff7ed !important;
                    color: #c2410c !important;
                    border-color: rgba(254, 215, 170, 0.6) !important;
                }
                .status-over .badge-dot, .progress-over {
                    background-color: #f97316 !important;
                }

                .status-sangat_over {
                    background-color: #fef2f2 !important;
                    color: #b91c1c !important;
                    border-color: rgba(254, 226, 226, 0.6) !important;
                }
                .status-sangat_over .badge-dot, .progress-sangat_over {
                    background-color: #ef4444 !important;
                }

                /* ===== WO-003: Enhanced Stat Card Animations ===== */
                .stat-card {
                    position: relative;
                    overflow: hidden;
                }
                .stat-card::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
                    transition: left 0.6s ease;
                    pointer-events: none;
                }
                .stat-card:hover::before {
                    left: 100%;
                }
                .stat-card .icon-wrap {
                    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
                }
                .stat-card:hover .icon-wrap {
                    transform: scale(1.15) rotate(-5deg);
                }
                .stat-card .stat-number {
                    transition: all 0.3s ease;
                }
                .stat-card:hover .stat-number {
                    transform: scale(1.03);
                }
            </style>

            <div class="bg-gradient-to-br from-white to-blue-50/10 rounded-3xl shadow-lg border border-blue-100/80 overflow-hidden" data-aos="fade-up">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm modern-table">
                        <thead>
                            <tr class="bg-brand-900 text-white border-b border-brand-800">
                                <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider w-16 whitespace-nowrap text-blue-100">No</th>
                                <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-wider whitespace-nowrap text-white">Unit Pelaksana Teknis</th>
                                <th class="px-6 py-4 text-center text-xs font-bold uppercase tracking-wider whitespace-nowrap text-blue-100">Kapasitas</th>
                                <th class="px-6 py-4 text-center text-xs font-bold uppercase tracking-wider whitespace-nowrap text-blue-100">Tahanan</th>
                                <th class="px-6 py-4 text-center text-xs font-bold uppercase tracking-wider whitespace-nowrap text-blue-100">Narapidana</th>
                                <th class="px-6 py-4 text-center text-xs font-bold uppercase tracking-wider whitespace-nowrap text-white">Total</th>
                                <th class="px-6 py-4 text-center text-xs font-bold uppercase tracking-wider whitespace-nowrap text-white">% Over</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $statusMap = [
                                    'longgar' => [
                                        'class' => 'status-longgar',
                                        'barClass' => 'progress-longgar',
                                        'label' => 'Longgar'
                                    ],
                                    'hampir_penuh' => [
                                        'class' => 'status-hampir_penuh',
                                        'barClass' => 'progress-hampir_penuh',
                                        'label' => 'Hampir Penuh'
                                    ],
                                    'sedikit_over' => [
                                        'class' => 'status-sedikit_over',
                                        'barClass' => 'progress-sedikit_over',
                                        'label' => 'Sedikit Over'
                                    ],
                                    'over' => [
                                        'class' => 'status-over',
                                        'barClass' => 'progress-over',
                                        'label' => 'Over Kapasitas'
                                    ],
                                    'sangat_over' => [
                                        'class' => 'status-sangat_over',
                                        'barClass' => 'progress-sangat_over',
                                        'label' => 'Sangat Over'
                                    ],
                                ];
                            @endphp
                            @forelse($uptOverkapasitas ?? [] as $index => $row)
                                @php
                                    $total = ($row['tahanan'] ?? 0) + ($row['narapidana'] ?? 0);
                                    $overPercent = $total > 0 && $row['kapasitas'] > 0 ? round((($total - $row['kapasitas']) / $row['kapasitas']) * 100, 1) : 0;
                                    $occupancyPercent = $row['kapasitas'] > 0 ? round(($total / $row['kapasitas']) * 100) : 0;
                                    
                                    if ($overPercent > 100) {
                                        $statusKey = 'sangat_over';
                                    } elseif ($overPercent > 20) {
                                        $statusKey = 'over';
                                    } elseif ($overPercent > 0) {
                                        $statusKey = 'sedikit_over';
                                    } elseif ($overPercent > -25) {
                                        $statusKey = 'hampir_penuh';
                                    } else {
                                        $statusKey = 'longgar';
                                    }
                                    
                                    $status = $statusMap[$statusKey] ?? $statusMap['sangat_over'];
                                @endphp
                                <tr class="border-b border-blue-100/40 odd:bg-white/60 even:bg-blue-50/40 hover:bg-blue-100/30 transition-colors duration-200">
                                    <td class="px-6 py-4 font-bold text-blue-600/70 whitespace-nowrap">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-brand-950 text-sm hover:text-brand-600 transition min-w-[200px]">{{ $row['nama_upt'] ?? '' }}</div>
                                        <div class="flex items-center gap-2 mt-2">
                                            <div class="progress-bar-container bg-slate-200/80">
                                                <div class="progress-bar-fill {{ $status['barClass'] }}" style="width: {{ min($occupancyPercent, 100) }}%"></div>
                                            </div>
                                            <span class="text-[10px] text-slate-500 font-semibold whitespace-nowrap">Hunian: {{ $occupancyPercent }}%</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center text-slate-800 font-semibold whitespace-nowrap">{{ number_format($row['kapasitas'] ?? 0, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4 text-center text-slate-800 whitespace-nowrap">{{ number_format($row['tahanan'] ?? 0, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4 text-center text-slate-800 whitespace-nowrap">{{ number_format($row['narapidana'] ?? 0, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4 text-center font-extrabold text-brand-900 whitespace-nowrap">{{ number_format($total, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="badge-modern {{ $status['class'] }}">
                                            <span class="badge-dot"></span>
                                            {{ $overPercent > 0 ? '+' : '' }}{{ number_format($overPercent, 1, ',', '.') }}%
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-12 text-center text-slate-400">
                                        <i class="fas fa-inbox text-4xl mb-3 block"></i>
                                        Belum tersedia data overkapasitas.
                                    </td>
                                </tr>
                            @endforelse
                            @if(count($uptOverkapasitas ?? []) > 0)
                                @php
                                    $grandKapasitas = 0; $grandTahanan = 0; $grandNarapidana = 0; $grandTotal = 0;
                                    $grandOverPercent = 0;
                                    foreach(($uptOverkapasitas ?? []) as $r) {
                                        $grandKapasitas += $r['kapasitas'] ?? 0;
                                        $grandTahanan += $r['tahanan'] ?? 0;
                                        $grandNarapidana += $r['narapidana'] ?? 0;
                                    }
                                    $grandTotal = $grandTahanan + $grandNarapidana;
                                    $grandOccupancyPercent = $grandKapasitas > 0 ? round(($grandTotal / $grandKapasitas) * 100) : 0;
                                    
                                    if ($grandTotal > $grandKapasitas && $grandKapasitas > 0) {
                                        $grandOverPercent = round((($grandTotal - $grandKapasitas) / $grandKapasitas) * 100, 1);
                                    } else {
                                        $grandOverPercent = $grandKapasitas > 0 ? round((($grandTotal - $grandKapasitas) / $grandKapasitas) * 100, 1) : 0;
                                    }
                                    
                                    if ($grandOverPercent > 100) {
                                        $grandStatus = 'sangat_over';
                                    } elseif ($grandOverPercent > 20) {
                                        $grandStatus = 'over';
                                    } elseif ($grandOverPercent > 0) {
                                        $grandStatus = 'sedikit_over';
                                    } elseif ($grandOverPercent > -25) {
                                        $grandStatus = 'hampir_penuh';
                                    } else {
                                        $grandStatus = 'longgar';
                                    }
                                    
                                    $gStatus = $statusMap[$grandStatus] ?? $statusMap['sangat_over'];
                                @endphp
                        </tbody>
                        <tfoot>
                            <tr class="bg-brand-900/5 border-t-2 border-brand-300 font-bold text-slate-800">
                                <td colspan="2" class="px-6 py-4">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm uppercase tracking-wider text-brand-950 font-extrabold">Total Wilayah</span>
                                        <div class="flex items-center gap-2 mr-4">
                                            <div class="progress-bar-container" style="background-color: #cbd5e1;">
                                                <div class="progress-bar-fill {{ $gStatus['barClass'] }}" style="width: {{ min($grandOccupancyPercent, 100) }}%"></div>
                                            </div>
                                            <span class="text-[10px] text-slate-600 font-semibold">Hunian: {{ $grandOccupancyPercent }}%</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center text-brand-900 font-bold">{{ number_format($grandKapasitas, 0, ',', '.') }}</td>
                                <td class="px-6 py-4 text-center text-brand-900">{{ number_format($grandTahanan, 0, ',', '.') }}</td>
                                <td class="px-6 py-4 text-center text-brand-900">{{ number_format($grandNarapidana, 0, ',', '.') }}</td>
                                <td class="px-6 py-4 text-center text-lg text-brand-950 font-extrabold">{{ number_format($grandTotal, 0, ',', '.') }}</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="badge-modern {{ $gStatus['class'] }}">
                                        <span class="badge-dot"></span>
                                        {{ $grandOverPercent > 0 ? '+' : '' }}{{ number_format($grandOverPercent, 1, ',', '.') }}%
                                    </span>
                                </td>
                            </tr>
                        </tfoot>
                            @endif
                    </table>
                </div>
            </div>

            <!-- Legend -->
            <div class="flex flex-wrap items-center justify-center gap-3 mt-8" data-aos="fade-up">
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-100 shadow-sm">
                    <span class="w-3 h-3 rounded-full" style="background-color: #3b82f6;"></span>
                    <span class="text-xs text-slate-600 font-medium">Longgar (<= 75% terisi)</span>
                </div>
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-100 shadow-sm">
                    <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                    <span class="text-xs text-slate-600 font-medium">Hampir Penuh (75% - 100%)</span>
                </div>
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-100 shadow-sm">
                    <span class="w-3 h-3 rounded-full bg-amber-500"></span>
                    <span class="text-xs text-slate-600 font-medium">Sedikit Over (100% - 120%)</span>
                </div>
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-100 shadow-sm">
                    <span class="w-3 h-3 rounded-full bg-orange-500"></span>
                    <span class="text-xs text-slate-600 font-medium">Over Kapasitas (120% - 200%)</span>
                </div>
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-slate-100 shadow-sm">
                    <span class="w-3 h-3 rounded-full bg-red-500"></span>
                    <span class="text-xs text-slate-600 font-medium">Sangat Over (> 200%)</span>
                </div>
            </div>
        </div>
    </section>

    <!-- BERITA TERBARU -->
    <section id="berita" class="py-24 bg-gradient-to-b from-slate-50 to-blue-50/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12" data-aos="fade-up">
                <div>
                    <p class="text-brand-600 font-bold tracking-widest uppercase text-xs mb-2">Kabar Terkini</p>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gradient-brand tracking-tight">Berita & Informasi</h2>
                </div>
                <a href="{{ url('/berita') }}" class="hidden md:flex items-center text-brand-600 font-bold hover:text-brand-850 transition group">
                    Semua Berita <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-1 transition"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @if($posts->isEmpty())
                    {{-- Fallback content if database is empty --}}
                        <!-- News Card 1 -->
                        <a href="#" class="bg-gradient-to-br from-white to-blue-50/30 rounded-[2rem] p-5 border border-blue-100/50 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-brand-300/50 transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <div class="relative overflow-hidden rounded-2xl mb-4 aspect-[4/3] bg-slate-100">
                                    <div class="absolute inset-0 flex items-center justify-center bg-slate-200/50 group-hover:scale-105 transition-transform duration-500">
                                        <i class="fa-solid fa-image text-4xl text-slate-350"></i>
                                    </div>
                                    <div class="absolute top-4 left-4 glass-panel-light text-brand-700 text-[10px] font-bold px-3 py-1.5 rounded-lg uppercase tracking-wider shadow-sm z-10">
                                        Siaran Pers
                                    </div>
                                </div>
                                <div class="flex items-center text-xs text-slate-400 mb-2 font-medium">
                                    <i class="fa-regular fa-calendar mr-2"></i> 26 Februari 2026
                                </div>
                                <h3 class="text-lg font-extrabold text-brand-950 leading-snug group-hover:text-brand-600 transition duration-300">
                                    Siaran Pers
                                </h3>
                            </div>
                        </a>

                        <!-- News Card 2 -->
                        <a href="#" class="bg-gradient-to-br from-white to-blue-50/30 rounded-[2rem] p-5 border border-blue-100/50 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-brand-300/50 transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-delay="200">
                            <div>
                                <div class="relative overflow-hidden rounded-2xl mb-4 aspect-[4/3] bg-slate-100">
                                    <div class="absolute inset-0 flex items-center justify-center bg-slate-200/50 group-hover:scale-105 transition-transform duration-500">
                                        <i class="fa-solid fa-image text-4xl text-slate-350"></i>
                                    </div>
                                    <div class="absolute top-4 left-4 glass-panel-light text-brand-700 text-[10px] font-bold px-3 py-1.5 rounded-lg uppercase tracking-wider shadow-sm z-10">
                                        Kegiatan
                                    </div>
                                </div>
                                <div class="flex items-center text-xs text-slate-400 mb-2 font-medium">
                                    <i class="fa-regular fa-calendar mr-2"></i> 3 Maret 2026
                                </div>
                                <h3 class="text-lg font-extrabold text-brand-950 leading-snug group-hover:text-brand-600 transition duration-300">
                                    Persembahyangan Purnama, Momentum Penguatan Nilai Spiritual
                                </h3>
                            </div>
                        </a>

                        <!-- News Card 3 -->
                        <a href="#" class="bg-gradient-to-br from-white to-blue-50/30 rounded-[2rem] p-5 border border-blue-100/50 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-brand-300/50 transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-delay="300">
                            <div>
                                <div class="relative overflow-hidden rounded-2xl mb-4 aspect-[4/3] bg-slate-100">
                                    <div class="absolute inset-0 flex items-center justify-center bg-slate-200/50 group-hover:scale-105 transition-transform duration-500">
                                        <i class="fa-solid fa-image text-4xl text-slate-350"></i>
                                    </div>
                                    <div class="absolute top-4 left-4 glass-panel-light text-brand-700 text-[10px] font-bold px-3 py-1.5 rounded-lg uppercase tracking-wider shadow-sm z-10">
                                        Informasi
                                    </div>
                                </div>
                                <div class="flex items-center text-xs text-slate-400 mb-2 font-medium">
                                    <i class="fa-regular fa-calendar mr-2"></i> 28 Februari 2026
                                </div>
                                <h3 class="text-lg font-extrabold text-brand-950 leading-snug group-hover:text-brand-600 transition duration-300">
                                    Perkuat Layanan Kesehatan, Tinjau Akreditasi Klinik Rutan
                                </h3>
                            </div>
                        </a>
                @else
                    <!-- News Card Loop -->
                    @foreach($posts as $post)
                        <a href="{{ route('berita.show', $post->slug) }}" class="bg-gradient-to-br from-white to-blue-50/30 rounded-[2rem] p-5 border border-blue-100/50 shadow-soft hover:shadow-lg hover:-translate-y-1 hover:border-brand-300/50 transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <div class="relative overflow-hidden rounded-2xl mb-4 aspect-[4/3] bg-slate-100">
                                    <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('images/kakanwil.png') }}" alt="{{ $post->title }}" class="w-full h-full object-cover absolute inset-0 group-hover:scale-105 transition-transform duration-500" loading="lazy" width="400" height="300">
                                    <div class="absolute top-4 left-4 glass-panel-light text-brand-700 text-[10px] font-bold px-3 py-1.5 rounded-lg uppercase tracking-wider shadow-sm z-10">
                                        Kegiatan
                                    </div>
                                </div>
                                <div class="flex items-center text-xs text-slate-400 mb-2 font-medium">
                                    <i class="fa-regular fa-calendar mr-2"></i> {!! $post->published_at ?? 'tanggal' !!}
                                </div>
                                <h3 class="text-lg font-extrabold text-brand-950 leading-snug group-hover:text-brand-600 transition duration-300 line-clamp-2">
                                    {!! nl2br(e($post->title ?? 'isi nya')) !!}
                                </h3>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- BANNER INTEGRITAS -->
    <section class="py-12 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="zoom-in">
            <div class="bg-gradient-to-r from-slate-900 to-slate-800 rounded-[2.5rem] p-10 md:p-14 text-white shadow-2xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between border border-slate-700">
                <div class="absolute -right-10 -bottom-10 opacity-10">
                    <i class="fa-solid fa-scale-balanced text-9xl"></i>
                </div>
                
                <div class="md:w-2/3 relative z-10 text-center md:text-left mb-8 md:mb-0">
                    <div class="inline-flex items-center px-3 py-1 bg-red-500/20 text-red-400 text-xs font-bold rounded-lg mb-4 uppercase tracking-widest border border-red-500/30">
                        <i class="fa-solid fa-triangle-exclamation mr-2"></i> Zona Integritas
                    </div>
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4 tracking-tight">Kawasan Bebas Korupsi</h2>
                    <p class="text-slate-300 font-light text-lg leading-relaxed max-w-xl">
                        Laporkan segala bentuk pungutan liar, gratifikasi, atau ketidakpuasan layanan melalui kanal pengaduan resmi kami.
                    </p>
                </div>
                <div class="relative z-10">
                    <a href="{{ url('/LayananPengaduan') }}" class="bg-red-600 hover:bg-red-500 text-white font-bold px-8 py-4 rounded-full transition-all shadow-lg shadow-red-600/30 flex items-center transform hover:scale-105">
                        <i class="fa-solid fa-bullhorn mr-3"></i> Lapor Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('java/imageMapResizer.js') }}"></script>
    <script>
      imageMapResize();
    </script>
@endsection
