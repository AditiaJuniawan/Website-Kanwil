@extends('master')

@section('content')
    <script src="https://cdn.tailwindcss.com"></script>
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>SURVEI INDEKS KEPUASAN MASYARAKAT</h1>
            <a href="{{ url('/') }}">Beranda</a> > <a href="{{ url('/survei') }}">Survei</a>
          
        </div>
    </section>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            dark: '#1e3a5f',
                            blue: '#2c5282',
                            light: '#4299e1',
                            bg1: '#e4f0fa',
                            bg2: '#c0d9f1',
                        }
                    },
                    boxShadow: {
                        'bubble': '0 20px 40px -15px rgba(0, 0, 0, 0.1)',
                        'float': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom speech bubble tail pointing down-right */
        .bubble-tail-left::after {
            content: '';
            position: absolute;
            bottom: -25px;
            right: 20%;
            border-width: 30px 15px 0;
            border-style: solid;
            border-color: #ffffff transparent transparent transparent;
            z-index: 10;
        }
        /* Custom speech bubble tail pointing down-left */
        .bubble-tail-right::after {
            content: '';
            position: absolute;
            bottom: -25px;
            left: 20%;
            border-width: 30px 15px 0;
            border-style: solid;
            border-color: #ffffff transparent transparent transparent;
            z-index: 10;
        }

        /* Container to hide overflow for the pseudo borders if needed, but keeping it simple here */
        .glass-panel {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 6px solid #ffffff;
            box-shadow: 
                0 10px 25px rgba(30, 58, 95, 0.1),
                inset 0 0 0 1px rgba(0,0,0,0.05);
        }
    </style>
    <section class="bg-gradient-to-b from-brand-bg1 to-brand-bg2 min-h-screen text-brand-dark overflow-x-hidden relative flex flex-col justify-between">
        <!-- FLOATING BACKGROUND ELEMENTS (Simulating the 3D objects) -->
        <!-- Top Left Thumbs Up / Heart -->
        <div class="absolute top-48 left-10 md:left-32 w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-3xl transform -rotate-12 blur-[2px] opacity-80 shadow-float flex items-center justify-center text-white text-3xl z-0 hidden sm:flex">
            <i class="fa-solid fa-heart" style="color:#1e3a5f"></i>
        </div>
        <!-- Top Right Thumbs Up -->
        <div class="absolute top-40 right-10 md:right-40 w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl transform rotate-[15deg] blur-[1px] opacity-90 shadow-float flex items-center justify-center text-white text-2xl z-0 hidden sm:flex">
            <i class="fa-solid fa-thumbs-up" style="color :#1e3a5f" ></i>
        </div>
        <!-- Bottom Left Card -->
        <div class="absolute bottom-40 left-[-2rem] w-48 h-32 bg-gradient-to-r from-[#173e6b] to-[#205187] rounded-xl transform -rotate-[20deg] blur-[4px] opacity-70 shadow-2xl z-0 overflow-hidden flex flex-col justify-between p-4 hidden md:flex border border-blue-400/30">
            <div class="w-8 h-2 bg-white/20 rounded-full"></div>
            <div class="flex gap-1 text-yellow-400 text-sm">
                <i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
        </div>
        <!-- Bottom Right Card -->
        <div class="absolute bottom-32 right-[-3rem] w-56 h-36 bg-gradient-to-l from-[#173e6b] to-[#205187] rounded-xl transform rotate-[15deg] blur-[3px] opacity-80 shadow-2xl z-0 overflow-hidden flex flex-col justify-between p-5 hidden md:flex border border-blue-400/30">
            <div class="w-10 h-2 bg-white/20 rounded-full self-end"></div>
            <div class="flex gap-1 text-yellow-400 text-base justify-end">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
        </div>


        <!-- MAIN CONTENT CONTAINER -->
        <main class="relative z-10 w-full max-w-6xl mx-auto px-4 pt-12 pb-4 flex flex-col items-center flex-grow">
            
            <!-- Header Section -->
            <header class="text-center w-full flex flex-col items-center">
                <!-- Logos Placeholder -->
                <div class="flex justify-center items-center gap-3 mb-4">
                    <img src="{{ asset('images/logokementerian.png') }}" alt="" class="h-12 w-auto mr-3 transition-transform group-hover:scale-105">
                </div>

                <!-- Header Texts -->
                <div class="space-y-1 mb-8">
                    <p class="text-[10px] md:text-xs font-semibold tracking-widest text-brand-dark/80 uppercase">Kementerian Imigrasi dan Pemasyarakatan</p>
                    <p class="text-xs md:text-sm font-semibold tracking-wider text-brand-dark/80 uppercase">Direktorat Jenderal Pemasyarakatan</p>
                    <p class="text-sm md:text-base font-bold tracking-wider text-brand-dark uppercase">Kantor Wilayah Banten</p>
                </div>

                <!-- Main Title -->
                <h1 class="text-5xl md:text-7xl font-extrabold text-brand-dark tracking-tight mb-2 uppercase" data-aos="zoom-in">
                    Hasil Survei
                </h1>
                <p class="text-base md:text-lg font-bold text-brand-blue" data-aos="zoom-in">
                    Berdasarkan star-survei3a.kemenimipas.go.id
                </p>
            </header>

            <!-- Survey Cards Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-8 w-full max-w-4xl mt-16 relative">
                
                <!-- Card 1: SPKP/SKM -->
                <div class="relative w-full">
                    <!-- Quote Icon Badge -->
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-14 h-14 bg-gradient-to-b from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg border-2 border-white transform -rotate-6 z-20">
                        <i class="fa-solid fa-quote-left text-white text-xl" style="color:#1e3a5f"></i>
                    </div>
                    
                    <!-- Bubble Container -->
                    <div  class="glass-panel rounded-[40px] px-6 py-12 md:py-16 text-center relative bubble-tail-left h-full flex flex-col justify-center items-center " data-aos="zoom-in">
                        <p class="text-sm md:text-base font-bold text-brand-blue/80 mb-6 px-4">
                            Survei Persepsi Kualitas Pelayanan (SPKP/SKM)
                        </p>
                        <h2 class="text-5xl md:text-[3.5rem] leading-none font-extrabold text-brand-dark mb-2">
                            {{ $survei->SPKP1 ?? '3.98' }}/4
                        </h2>
                        <h3 class="text-4xl md:text-5xl font-extrabold text-brand-dark mb-4">
                            {{ $survei->SPKP2 ?? '99.47'}}/100
                        </h3>
                        <p class="text-lg font-bold text-brand-blue">
                             @if($survei->SPKP2 >= 90)
                                (Sangat Baik)
                            @elseif ($survei->SPKP2 >= 70 && $survei->SPKP2 < 90)
                                (Baik)
                            @elseif ($survei->SPKP2 >= 50 && $survei->SPKP2 < 70 )
                                (Kurang Baik)
                            @else
                                (Tidak Baik)
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Card 2: SPAK -->
                <div class="relative w-full mt-10 md:mt-0">
                    <!-- Quote Icon Badge -->
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-14 h-14 bg-gradient-to-b from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg border-2 border-white transform rotate-6 z-20 ">
                        <i class="fa-solid fa-quote-left text-white text-xl" style="color:#1e3a5f"></i>
                    </div>
                    
                    <!-- Bubble Container -->
                    <div class="glass-panel rounded-[40px] px-6 py-12 md:py-16 text-center relative bubble-tail-right h-full flex flex-col justify-center items-center " data-aos="zoom-in">
                        <p class="text-sm md:text-base font-bold text-brand-blue/80 mb-6 px-4">
                            Survei Persepsi Anti Korupsi (SPAK)
                        </p>
                        <h2 class="text-5xl md:text-[3.5rem] leading-none font-extrabold text-brand-dark mb-2">
                            {!! $survei->SPAK1 ?? '3.98' !!}/4
                        </h2>
                        <h3 class="text-4xl md:text-5xl font-extrabold text-brand-dark mb-4">
                            {!! $survei->SPAK2 ?? '99.42' !!}/100
                        </h3>
                        <p class="text-lg font-bold text-brand-blue">
                            @if($survei->SPAK2 >= 90)
                                (Sangat Baik)
                            @elseif ($survei->SPAK2 >= 70 && $survei->SPAK2 < 90)
                                (Baik)
                            @elseif ($survei->SPAK2 >= 50 && $survei->SPAK2 < 70 )
                                (Kurang Baik)
                            @else
                                (Tidak Baik)
                            @endif

                        </p>
                    </div>
                </div>

            </div>

            <!-- Info Pill (Between bubbles and mascots) -->
            <div class="mt-14 mb-4 relative z-30">
                <div class="bg-white/80 backdrop-blur-md px-6 py-3 rounded-full border border-white/50 shadow-sm max-w-sm text-center">
                    <p class="text-xs md:text-sm font-medium text-brand-dark/70">
                        Survei dilaksanakan pada periode bulan<br> 
                        <?php
                            $date = new Datetime();
                            $date->modify('-1 month');
                            echo $date->format('F Y');
                        ?>
                        dengan jumlah responden<br>sebanyak 31 orang.
                    </p>
                </div>
            </div>

            <!-- Mascots Placeholder Area -->
            <div class="flex justify-center items-end gap-2 md:gap-8 mt-4 relative z-20 w-full max-w-3xl">
                <!-- Mascot 1: Kang Pas -->
                <div class="flex flex-col items-center relative">
                    
                    <img src="{{ asset('images/Kang Pas.png') }}" alt="Kang Pas" class="h-100 md:h-100 w-auto object-contain drop-shadow-xl" />
                    
                    <!-- Name Badge -->
                    <div class="absolute bottom-4 transform -rotate-3 text-center">
                        <span class="block text-3xl font-black text-brand-dark font-serif italic" style="text-shadow: 2px 2px 0px white, -2px -2px 0px white, 2px -2px 0px white, -2px 2px 0px white;">Kang</span>
                        <span class="block text-3xl font-black text-brand-dark font-serif italic -mt-2" style="text-shadow: 2px 2px 0px white, -2px -2px 0px white, 2px -2px 0px white, -2px 2px 0px white;">Pas</span>
                    </div>
                </div>

                <!-- Mascot 2: Nong Pas -->
                <div class="flex flex-col items-center relative">
                    
                    <img src="{{ asset('images/Nong Pas.png') }}" alt="Nong Pas" class="h-100 md:h-100 w-auto object-contain drop-shadow-xl" style="top:-30px" />
                    
                    <!-- Name Badge -->
                    <div class="absolute bottom-4 transform rotate-3 text-center">
                        <span class="block text-3xl font-black text-brand-dark font-serif italic" style="text-shadow: 2px 2px 0px white, -2px -2px 0px white, 2px -2px 0px white, -2px 2px 0px white;">Nong</span>
                        <span class="block text-3xl font-black text-brand-dark font-serif italic -mt-2" style="text-shadow: 2px 2px 0px white, -2px -2px 0px white, 2px -2px 0px white, -2px 2px 0px white;">Pas</span>
                    </div>
                </div>
            </div>

        </main>
        
    </section>
    

    

@endsection
