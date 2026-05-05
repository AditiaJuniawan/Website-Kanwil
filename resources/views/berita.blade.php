@extends('master')

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
    

    

@endsection
