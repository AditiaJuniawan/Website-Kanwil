@extends('master')

@section('content')
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
<script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        navy: '#0f2041',
                        gold: '#ffb703',
                        accent: '#e63946',
                    },
                    animation: {
                        blob: "blob 7s infinite",
                        float: "float 6s ease-in-out infinite",
                        spinSlow: "spin 12s linear infinite",
                    },
                    keyframes: {
                        blob: {
                            "0%": { transform: "translate(0px, 0px) scale(1)" },
                            "33%": { transform: "translate(30px, -50px) scale(1.1)" },
                            "66%": { transform: "translate(-20px, 20px) scale(0.9)" },
                            "100%": { transform: "translate(0px, 0px) scale(1)" },
                        },
                        float: {
                            "0%, 100%": { transform: "translateY(0) rotate(0deg)" },
                            "50%": { transform: "translateY(-15px) rotate(1deg)" },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Styles & Utilities */
  

        /* Class untuk efek scroll reveal (Intersection Observer) */
        .reveal-up {
            opacity: 0;
            transform: translateY(50px) scale(0.95);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }

        .reveal-up.active {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        /* Delay utilities for staggered animations */
        .delay-100 { transition-delay: 100ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-500 { transition-delay: 500ms; }
        
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }

        /* Custom Title Underline Glow */
        .title-glow::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 4px;
            background: linear-gradient(90deg, #ffb703, #fb8500);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 4px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 10px rgba(255, 183, 3, 0.5);
        }

        .group:hover .title-glow::after {
            width: 100px;
        }
    </style>
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>MASKOT KANWIL DITJENPAS BANTEN</h1>
            <a href="{{ url('/') }}">Beranda</a> > <a href="{{ url('/maskot') }}">Maskot</a>
          
        </div>
    </section>
    <main class="relative z-10 container mx-auto  px-6 py-6 lg:py-24 min-h-screen flex flex-col items-center justify-center">
        


        <div class="max-w-6xl w-full">
            <!-- Grid Layout Kiri & Kanan -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 lg:gap-24">
                
                <!-- KOLOM KIRI : KANG -->
                <div class="flex flex-col items-center group cursor-pointer reveal-up delay-100">
                    
                    <!-- Judul KANG -->
                    <div class="mb-14 relative text-center w-full z-20">
                        <h2 class="text-5xl font-black bg-clip-text bg-gradient-to-br from-navy to-blue-800 tracking-wider title-glow relative inline-block transition-transform duration-500 group-hover:scale-110 group-hover:-translate-y-2">
                            KANG
                        </h2>
                    </div>

                    <!-- Image Card KANG -->
                    <!-- Menggunakan efek Glassmorphism -->
                    <div class="w-full max-w-[420px] aspect-square bg-white/60 backdrop-blur-xl rounded-[2.5rem] p-8 mb-10 transition-all duration-500 transform group-hover:-translate-y-6 group-hover:shadow-[0_30px_60px_-15px_rgba(16,44,87,0.3)] flex items-center justify-center relative border border-white/80 shadow-[0_10px_30px_-10px_rgba(0,0,0,0.08)]">
                        
                        <!-- Cincin Putus-putus Dekoratif -->
                        <div class="absolute inset-6 rounded-full border-2 border-dashed border-slate-300/60 opacity-50 transition-opacity duration-500 group-hover:opacity-100 group-hover:animate-spinSlow"></div>

                        <!-- Gambar Maskot -->
                            @if($kanwil && $kanwil->maskot_kang_image)
                                <img 
                                    src="{{ asset('storage/' . $kanwil->maskot_kang_image) }}" 
                                    alt="Maskot KANG" 
                                    class="relative z-10 w-[110%] h-[110%] object-contain filter drop-shadow-[0_20px_20px_rgba(0,0,0,0.15)] transition-all duration-700 group-hover:scale-[1.15] group-hover:-translate-y-4 animate-float"
                                >
                            @else
                 
                                <img 
                                    src="{{ asset('images/Kang Pas.png') }}" 
                                    alt="Maskot KANG" 
                                    class="relative z-10 w-[110%] h-[110%] object-contain filter drop-shadow-[0_20px_20px_rgba(0,0,0,0.15)] transition-all duration-700 group-hover:scale-[1.15] group-hover:-translate-y-4 animate-float"
                                >
                            @endif

                    </div>

                    <!-- Deskripsi Text KANG -->
                    <div class="reveal-up delay-300 w-full">
                        <div class="bg-white/70 backdrop-blur-md rounded-2xl p-6 lg:p-8 border border-white/50 shadow-sm transition-all duration-300 group-hover:shadow-md group-hover:bg-white/90">
                            <p class="text-slate-600 leading-relaxed text-center md:text-justify text-[15px] lg:text-base font-medium">
                                {{ $kanwil->maskot_kang_description ?? ' "Kang merupakan maskot resmi Kantor Wilayah Direktorat Jenderal Pemasyarakatan (Ditjenpas) Banten. Visualisasinya mengadopsi bentuk bidak catur yang melambangkan strategi dan ketetapan langkah, serta dipadukan dengan busana adat Baduy sebagai representasi penghormatan terhadap nilai kearifan lokal Provinsi Banten."' }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN : NONG -->
                <div class="flex flex-col items-center group cursor-pointer reveal-up delay-300">
                    
                    <!-- Judul NONG -->
                    <div class="mb-14 relative text-center w-full z-20">
                        <h2 class="text-5xl font-black  bg-clip-text bg-gradient-to-br from-navy to-blue-800 tracking-wider title-glow relative inline-block transition-transform duration-500 group-hover:scale-110 group-hover:-translate-y-2">
                            NONG
                        </h2>
                    </div>

                    <!-- Image Card NONG -->
                    <div class="w-full max-w-[420px] aspect-square bg-white/60 backdrop-blur-xl rounded-[2.5rem] p-8 mb-10 transition-all duration-500 transform group-hover:-translate-y-6 group-hover:shadow-[0_30px_60px_-15px_rgba(16,44,87,0.3)] flex items-center justify-center relative border border-white/80 shadow-[0_10px_30px_-10px_rgba(0,0,0,0.08)]">
                        
                        <!-- Cincin Putus-putus Dekoratif -->
                        <div class="absolute inset-6 rounded-full border-2 border-dashed border-slate-300/60 opacity-50 transition-opacity duration-500 group-hover:opacity-100 group-hover:animate-spinSlow" style="animation-direction: reverse;"></div>
                        

                        <!-- Gambar Maskot -->
                            @if($kanwil && $kanwil->maskot_nong_image)
                                <img 
                                    src="{{ asset('storage/' . $kanwil->maskot_nong_image) }}" 
                                    alt="Maskot NONG" 
                                    class="relative z-10 w-[110%] h-[110%] object-contain filter drop-shadow-[0_20px_20px_rgba(0,0,0,0.15)] transition-all duration-700 group-hover:scale-[1.15] group-hover:-translate-y-4 animate-float"
                                    style="animation-delay: -3s;"
                                >
                            @else
                                <img 
                                    src="{{ asset('images/Nong Pas.png') }}" 
                                    alt="Maskot NONG" 
                                    class="relative z-10 w-[110%] h-[110%] object-contain filter drop-shadow-[0_20px_20px_rgba(0,0,0,0.15)] transition-all duration-700 group-hover:scale-[1.15] group-hover:-translate-y-4 animate-float"
                                    style="animation-delay: -3s;"
                                >
                            @endif
                       
                    </div>

                    <!-- Deskripsi Text NONG -->
                    <div class="reveal-up delay-500 w-full">
                        <div class="bg-white/70 backdrop-blur-md rounded-2xl p-6 lg:p-8 border border-white/50 shadow-sm transition-all duration-300 group-hover:shadow-md group-hover:bg-white/90">
                            <p class="text-slate-600 leading-relaxed text-center md:text-justify text-[15px] lg:text-base font-medium">
                                {{ $kanwil->maskot_nong_description ?? ' "Nong merupakan pasangan maskot resmi Kantor Wilayah Direktorat Jenderal Pemasyarakatan (Ditjenpas) Banten. Direpresentasikan melalui figur bidak catur yang melambangkan kecerdasan strategi, Nong tampil anggun dengan balutan kerudung bermotif batik Baduy sebagai perwujudan martabat dan keanggunan budaya lokal di lingkungan pemasyarakatan."' }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>



    <!-- Script Animasi Scroll -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Unobserve after animating to keep it visible
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.reveal-up').forEach((el) => {
                observer.observe(el);
            });
        });
    </script>
    <section class="profil-padding container max-w-4xl">
        <div class="reveal-up delay-500">
            <h2 class="section-titlenone text-left">Nama ”Kang/Nong Pas” </h2>
            <p class="paragraf-tengah">
                Nama ini merupakan perpaduan antara : <br>

                "Kang/Nong", sapaan khas dalam budaya Sunda yang mencerminkan keramahan,<br>
                "Pas", kependekan dari "Pemasyarakatan", namun juga memiliki makna dalam Bahasa Indonesia sebagai sesuatu yang tepat atau sesuai, melambangkan profesionalisme dan ketepatan dalam bekerja. 
                
            
            </p>
        </div>
        
        <br>
        <br>
        <div class="reveal-up delay-500">
            <h2 class="section-titlenone text-left">Penutup Kepala Motif Batik Baduy dengan Logo Kementerian </h2>
            <ul>
                <li>
                Motif Batik Baduy mewakili kearifan lokal dan budaya asli Banten, khususnya suku Baduy yang menjunjung tinggi nilai kejujuran, kesederhanaan, dan kedisiplinan. 

                </li>
                <li>
                Logo Kementerian Imigrasi dan Pemasyarakatan, menunjukkan bahwa maskot ini adalah representasi resmi dari institusi negara yang bekerja untuk pelayanan publik, khususnya di bidang pemasyarakatan
    
                </li>
            </ul>
        </div>
        <br>
        <br>
        <div class="reveal-up delay-500">
            <h2 class="section-titlenone text-left">Bentuk Tubuh Menyerupai Menara Masjid Agung Banten </h2>
            <ul>
                <li>
                    Masjid Agung Banten adalah ikon sejarah dan spiritual masyarakat Banten. 
                </li>
                <li>
                    Menara ini melambangkan pengawasan dan keteguhan, dua prinsip penting dalam pemasyarakatan: menjaga, membimbing, dan memantau warga binaan menuju perbaikan hidup. 
                </li>
                <li>
                    Arsitektur khas ini juga menunjukkan bahwa Kanwil Ditjenpas Banten berakar kuat dalam budaya dan sejarah lokal, namun tetap terbuka terhadap modernisasi. 
                </li>
            </ul>
        </div>
               

    </section>
    <!-- <section class="profil-kanwil container">
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
     -->

    

@endsection
