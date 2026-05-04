@extends('master')

@section('content')
    <!-- HERO SECTION: Elegant & Animated -->
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
                    Pemasyarakatan <span class="text-gold-400">Banten</span>
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
            
            <!-- Hero Illustration -->
            <div class="hidden md:block md:w-2/5 mt-16 md:mt-0 relative" data-aos="fade-left" data-aos-delay="200">
                <div class="relative w-full max-w-md mx-auto aspect-square flex items-center justify-center">
                    <!-- <div class="absolute inset-0 border border-white/10 rounded-full animate-[spin_20s_linear_infinite]"></div>
                    <div class="absolute inset-8 border border-brand-400/20 rounded-full animate-[spin_15s_linear_infinite_reverse]"></div> -->
                    
                    <!-- <div class="relative bg-white/10 backdrop-blur-xl border border-white/20 p-8 rounded-3xl shadow-2xl animate-float w-64 text-center z-10">
                        <div class="w-16 h-16 bg-gradient-to-br from-brand-400 to-brand-600 rounded-2xl mx-auto flex items-center justify-center mb-4 shadow-lg">
                            <i class="fa-solid fa-shield-halved text-2xl text-white"></i>
                        </div>
                        <h3 class="font-bold text-xl text-white mb-1">E-Services</h3>
                        <p class="text-brand-100 text-xs font-light">Profesional & Berintegritas</p>
                        
                        <div class="mt-6 space-y-3">
                            <div class="h-2 w-full bg-white/20 rounded-full"></div>
                            <div class="h-2 w-3/4 bg-white/20 rounded-full mx-auto"></div>
                        </div>
                    </div> -->

                    <!-- <div class="absolute top-10 -left-6 bg-white p-3 rounded-2xl shadow-xl animate-float-delayed z-20 flex items-center gap-3">
                        <div class="bg-green-100 text-green-600 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <p class="text-[10px] text-slate-400 font-medium uppercase tracking-wider">Status Layanan</p>
                            <p class="text-sm font-bold text-slate-800">Aktif & Berjalan</p>
                        </div>
                    </div> -->

                    <!-- <div class="absolute bottom-12 -right-8 bg-white p-3 rounded-2xl shadow-xl animate-float z-20 flex items-center gap-3" style="animation-delay: 1s;">
                        <div class="bg-gold-100 text-gold-500 w-10 h-10 rounded-full flex items-center justify-center"><i class="fa-solid fa-star"></i></div>
                        <div>
                            <p class="text-[10px] text-slate-400 font-medium uppercase tracking-wider">Indeks Kepuasan</p>
                            <p class="text-sm font-bold text-slate-800">Sangat Baik</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- PENGUMUMAN PENTING BAR -->
    <div class="max-w-6xl mx-auto px-4 relative z-20 -mt-6" data-aos="fade-up" data-aos-delay="400">
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-2 flex items-center">
            <div class="bg-red-500 text-white text-xs font-bold px-4 py-2 rounded-xl uppercase tracking-wider flex-shrink-0 flex items-center shadow-md shadow-red-500/20">
                <i class="fa-solid fa-bell mr-2 animate-bounce"></i> Info
            </div>
            <div class="overflow-hidden w-full ml-3 relative">
                <marquee class="text-sm font-medium text-slate-600 mt-1">Selamat Datang di Portal Resmi Kanwil Ditjenpas Banten. Kami berkomitmen menghadirkan pelayanan publik yang bersih dari pungutan liar dan korupsi. Gunakan layanan digital kami untuk proses yang lebih transparan.</marquee>
            </div>
        </div>
    </div>

    <!-- AKSES LAYANAN -->
    <section id="layanan" class="py-20 md:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16" data-aos="fade-up">
                <p class="text-brand-600 font-bold tracking-widest uppercase text-xs mb-2">Inovasi Layanan</p>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Layanan Publik Utama</h2>
                <div class="w-12 h-1.5 bg-brand-500 mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Layanan 1 -->
                <a href="{{ url('/LayananPengaduan') }}" class="bg-white rounded-[2rem] p-8 service-card border border-slate-100 shadow-soft group" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon-wrap w-16 h-16 bg-brand-50 text-brand-600 rounded-2xl flex items-center justify-center text-2xl mb-6">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 text-lg mb-3">Pengaduan</h4>
                    <p class="text-sm text-slate-500 leading-relaxed mb-6">Sampaikan keluhan, aspirasi, atau temuan indikasi pelanggaran secara aman dan anonim.</p>
                    <div class="text-brand-600 text-sm font-semibold flex items-center group-hover:text-brand-700">
                        Lapor Sekarang <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-1 transition"></i>
                    </div>
                </a>

                <!-- Layanan 2 -->
                <a href="{{ url('/LayananInformasi') }}" class="bg-white rounded-[2rem] p-8 service-card border border-slate-100 shadow-soft group" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon-wrap w-16 h-16 bg-gold-50 text-gold-500 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-gold-500 group-hover:text-white">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 text-lg mb-3">Pusat Informasi</h4>
                    <p class="text-sm text-slate-500 leading-relaxed mb-6">Akses data, dokumen publik, dan informasi terkini seputar kegiatan pemasyarakatan.</p>
                    <div class="text-brand-600 text-sm font-semibold flex items-center group-hover:text-brand-700">
                        Cek Informasi <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-1 transition"></i>
                    </div>
                </a>

                <!-- Layanan 3 -->
                <a href="{{ url('/LayananPerizinan') }}" class="bg-white rounded-[2rem] p-8 service-card border border-slate-100 shadow-soft group" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon-wrap w-16 h-16 bg-green-50 text-green-500 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-green-500 group-hover:text-white">
                        <i class="fa-solid fa-file-signature"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 text-lg mb-3">Perizinan</h4>
                    <p class="text-sm text-slate-500 leading-relaxed mb-6">Layanan izin penelitian, magang, dan izin kegiatan khusus lainnya di lingkungan Kanwil.</p>
                    <div class="text-brand-600 text-sm font-semibold flex items-center group-hover:text-brand-700">
                        Ajukan Izin <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-1 transition"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- STATISTIK (Elegant Dark Section) -->
    <section class="py-20 bg-brand-900 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-brand-800 opacity-20 transform skew-x-12"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10 md:gap-8 text-center divide-x divide-white/10">
                <div data-aos="zoom-in" data-aos-delay="100">
                    <div class="text-4xl md:text-5xl font-extrabold text-white mb-2 tracking-tight">
                        {{ $totalStats['total_upt'] ?? 15 }}
                    </div>
                    <div class="text-brand-200 text-xs font-semibold uppercase tracking-widest">Unit Pelaksana Teknis</div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-4xl md:text-5xl font-extrabold text-white mb-2 tracking-tight">
                        {{ number_format($totalStats['isi_penghuni'] ?? 5000, 0, ',', '.') }}
                    </div>
                    <div class="text-brand-200 text-xs font-semibold uppercase tracking-widest">Total WBP</div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-4xl md:text-5xl font-extrabold text-white mb-2 tracking-tight">
                        {{ $totalStats['persen_overkapasitas'] ?? 98 }}<span class="text-gold-400">%</span>
                    </div>
                    <div class="text-brand-200 text-xs font-semibold uppercase tracking-widest">Overkapasitas</div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="400">
                    <div class="text-4xl md:text-5xl font-extrabold text-white mb-2 tracking-tight">24<span class="text-gold-400">/</span>7</div>
                    <div class="text-brand-200 text-xs font-semibold uppercase tracking-widest">Layanan Digital</div>
                </div>
            </div>
        </div>
    </section>

    <!-- WILAYAH KERJA MAP & INFOGRAPHICS -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <p class="text-brand-600 font-bold tracking-widest uppercase text-xs mb-2">Peta Digital Sultan Banten</p>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Infografis Unit Pelaksana Teknis</h2>
                <div class="w-12 h-1.5 bg-brand-500 mx-auto mt-6 rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">
                <!-- Map Area -->
                <div class="lg:col-span-2 bg-white rounded-[3rem] p-6 md:p-10 shadow-soft border border-slate-100 overflow-hidden relative" data-aos="zoom-in">
                    <div class="relative w-full overflow-hidden rounded-2xl group">
                        <img src="{{ asset('images/mapbanten.png') }}" class="w-full h-auto transition duration-700 group-hover:scale-105">
                        
                        <!-- Pulsating Markers for UPTs (Simulated markers based on coordinates would be better, but we use dynamic info cards) -->
                        <div class="absolute top-1/4 left-1/3 w-4 h-4 bg-red-500 rounded-full animate-ping opacity-75"></div>
                        <div class="absolute top-1/2 left-1/2 w-4 h-4 bg-gold-500 rounded-full animate-ping opacity-75"></div>
                        <div class="absolute bottom-1/3 right-1/4 w-4 h-4 bg-brand-500 rounded-full animate-ping opacity-75"></div>
                    </div>
                    
                    <div class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-brand-50 p-4 rounded-2xl border border-brand-100">
                            <p class="text-[10px] text-brand-600 font-bold uppercase tracking-wider mb-1">Total Tahanan</p>
                            <p class="text-xl font-extrabold text-brand-900">{{ number_format($totalStats['tahanan'] ?? 0, 0, ',', '.') }}</p>
                        </div>
                        <div class="bg-gold-50 p-4 rounded-2xl border border-gold-100">
                            <p class="text-[10px] text-gold-600 font-bold uppercase tracking-wider mb-1">Total Narapidana</p>
                            <p class="text-xl font-extrabold text-gold-700">{{ number_format($totalStats['narapidana'] ?? 0, 0, ',', '.') }}</p>
                        </div>
                        <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100">
                            <p class="text-[10px] text-slate-500 font-bold uppercase tracking-wider mb-1">Kapasitas</p>
                            <p class="text-xl font-extrabold text-slate-800">{{ number_format($totalStats['kapasitas'] ?? 0, 0, ',', '.') }}</p>
                        </div>
                        <div class="bg-red-50 p-4 rounded-2xl border border-red-100">
                            <p class="text-[10px] text-red-600 font-bold uppercase tracking-wider mb-1">Isi (%)</p>
                            <p class="text-xl font-extrabold text-red-700">{{ $totalStats['persen_overkapasitas'] ?? 0 }}%</p>
                        </div>
                    </div>
                </div>

                <!-- Info List Area (UPT Data from API) -->
                <div class="space-y-4 max-h-[600px] overflow-y-auto pr-4 custom-scrollbar" data-aos="fade-left">
                    <h3 class="font-bold text-slate-800 mb-6 flex items-center">
                        <i class="fa-solid fa-list-check mr-3 text-brand-500"></i> Data UPT Terbaru
                    </h3>
                    
                    @forelse($uptData as $upt)
                        @if(is_array($upt) && isset($upt['nama_upt']))
                        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:border-brand-200 transition group">
                            <div class="flex justify-between items-start mb-3">
                                <h4 class="text-sm font-bold text-slate-800 leading-tight group-hover:text-brand-600">{{ $upt['nama_upt'] ?? 'UPT' }}</h4>
                                <span class="bg-brand-50 text-brand-600 text-[10px] font-bold px-2 py-1 rounded-md">{{ $upt['isi_penghuni'] ?? 0 }} / {{ $upt['kapasitas'] ?? 0 }}</span>
                            </div>
                            <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden mb-2">
                                @php
                                    $isi = $upt['isi_penghuni'] ?? 0;
                                    $kap = $upt['kapasitas'] ?? 0;
                                    $percentage = $kap > 0 ? ($isi / $kap) * 100 : 0;
                                    $barColor = $percentage > 100 ? 'bg-red-500' : 'bg-brand-500';
                                @endphp
                                <div class="{{ $barColor }} h-full" style="width: {{ min($percentage, 100) }}%"></div>
                            </div>
                            <div class="flex justify-between text-[10px] text-slate-400 font-medium">
                                <span>Tahanan: {{ $upt['tahanan'] ?? 0 }}</span>
                                <span>Napi: {{ $upt['narapidana'] ?? 0 }}</span>
                            </div>
                        </div>
                        @endif
                    @empty
                        <div class="text-center py-10 bg-white rounded-2xl border border-dashed border-slate-200">
                            <p class="text-slate-400 text-sm">Gagal memuat data UPT</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- BERITA TERBARU -->
    <section id="berita" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12" data-aos="fade-up">
                <div>
                    <p class="text-brand-600 font-bold tracking-widest uppercase text-xs mb-2">Kabar Terkini</p>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Berita & Informasi</h2>
                </div>
                <a href="#" class="hidden md:flex items-center text-brand-600 font-semibold hover:text-brand-800 transition group">
                    Semua Berita <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-1 transition"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
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
                        Optimalkan Reintegrasi Sosial, Evaluasi Bapas Karangasem
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
