<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanwil Ditjenpas Banten</title>
    
    <!-- Vite: Tailwind CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link href="{{ asset('images/logopas.png') }}" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/css-tambahan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
</head>
<body class="font-sans text-slate-600 antialiased flex flex-col min-h-screen bg-slate-50">

    <!-- Top Bar -->
    <div class="bg-brand-900 text-slate-300 text-[11px] font-medium py-2 px-4 hidden md:block tracking-wide z-[60]">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <span class="flex items-center hover:text-white transition cursor-pointer"><a href="tel:082266662055"><i class="fa-solid fa-phone mr-2 text-brand-400"></i> Call Center: 0822-6666-2055</a></span>
                <span class="flex items-center hover:text-white transition cursor-pointer"><a href="mailto:Djpasbanten@gmail.com" ><i class="fa-solid fa-envelope mr-2 text-brand-400"></i> djpasbanten@gmail.com</a></span>
            </div>
            <div class="flex items-center space-x-4">
                <a href="https://www.instagram.com/pemasyarakatanbanten/" class="hover:text-gold-400 transition"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-gold-400 transition"><i class="fa-brands fa-facebook-f"></i></a>
                <div class="h-3 w-px bg-slate-600 mx-2"></div>
                <span class="flex items-center cursor-pointer hover:text-white transition">
                    <i class="fa-solid fa-globe mr-1"></i> Indonesia
                </span>
            </div>
        </div>
    </div>

    <!-- Main Navigation (Glassmorphism) -->
    <header class="glass-header fixed w-full z-50 shadow-sm top-0 md:top-[34px] transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Brand / Logo -->
                <a href="/" class="flex-shrink-0 flex items-center group">
                    <img src="{{ asset('images/logokementerian.png') }}" alt="Logo" class="h-12 w-auto mr-3 transition-transform group-hover:scale-105">
                    <div>
                        <h1 class="font-bold text-lg leading-none text-brand-900 tracking-tight uppercase">DITJENPAS</h1>
                        <p class="text-[10px] font-bold text-brand-600 tracking-[0.2em] uppercase mt-1">Kanwil Banten</p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex space-x-1 items-center">
                    <a href="/" class="{{ Request::is('/') ? 'bg-brand-50 text-brand-700' : 'text-slate-600 hover:bg-slate-50 hover:text-brand-700' }} px-4 py-2 font-semibold rounded-lg transition">Beranda</a>
                    <a href="/berita" class="px-4 py-2 text-slate-600 hover:text-brand-700 font-medium rounded-lg hover:bg-slate-50 transition">Berita</a>
                    <div class="relative group px-1">
                        <button class="px-4 py-2 text-slate-600 hover:text-brand-700 font-medium flex items-center rounded-lg hover:bg-slate-50 transition">
                            Tentang <i class="fa-solid fa-chevron-down ml-2 text-[10px] opacity-70"></i>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 bg-white border border-slate-100 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 p-2">
                            <a href="{{ url('/profil') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-brand-50 hover:text-brand-700 rounded-lg transition font-medium">Profil</a>
                            <a href="{{ url('/visi') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-brand-50 hover:text-brand-700 rounded-lg transition font-medium">Visi & Misi</a>
                            <a href="{{ url('/maskot') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-brand-50 hover:text-brand-700 rounded-lg transition font-medium">Maskot</a>
                            <a href="{{ url('/survei') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-brand-50 hover:text-brand-700 rounded-lg transition font-medium">Survei</a>
                        </div>
                    </div>
                    
                    <div class="relative group px-1">
                        <button class="px-4 py-2 text-slate-600 hover:text-brand-700 font-medium flex items-center rounded-lg hover:bg-slate-50 transition">
                            Layanan <i class="fa-solid fa-chevron-down ml-2 text-[10px] opacity-70"></i>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 bg-white border border-slate-100 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 p-2">
                            <a href="{{ url('/LayananPengaduan') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-brand-50 hover:text-brand-700 rounded-lg transition font-medium">Pengaduan</a>
                            <a href="{{ url('/LayananInformasi') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-brand-50 hover:text-brand-700 rounded-lg transition font-medium">Informasi</a>
                            <a href="{{ url('/LayananPerizinan') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-brand-50 hover:text-brand-700 rounded-lg transition font-medium">Perizinan</a>
                        </div>
                    </div>

                    <a href="#kontakkanwil" class="px-4 py-2 text-slate-600 hover:text-brand-700 font-medium rounded-lg hover:bg-slate-50 transition">Kontak</a>
                </nav>

                <!-- Search & Actions -->
                <div class="hidden md:flex items-center space-x-3">
                    <button class="w-10 h-10 rounded-full flex items-center justify-center text-slate-500 hover:text-brand-700 hover:bg-slate-100 transition">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <div class="h-6 w-px bg-slate-200"></div>
                    <a href="https://wa.me/6282266662055" target="_blank" class="bg-brand-700 hover:bg-brand-800 text-white px-6 py-2.5 rounded-full font-medium transition shadow-md shadow-brand-700/20 text-sm flex items-center">
                        <i class="fa-brands fa-whatsapp mr-2"></i> Pengaduan
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center">
                    <button id="mobile-toggle" class="text-slate-600 hover:text-brand-700 p-2">
                        <i class="fa-solid fa-bars text-2xl" id="icon-bars" ></i>
                        <i class="fa-solid fa-xmark text-2xl " id="icon-close" style="display: none;"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-panel" class="hidden lg:hidden bg-white border-t border-slate-100 shadow-xl p-4 space-y-2">
            <a href="/" class="block px-4 py-3 text-slate-600 font-semibold hover:bg-brand-50 hover:text-brand-700 rounded-xl transition">Beranda</a>
            <a href="/berita" class="block px-4 py-3 text-slate-600 font-semibold hover:bg-brand-50 hover:text-brand-700 rounded-xl transition">Berita</a>

            <div class="space-y-1">
           
                <p class="px-4 py-2 text-[10px] font-bold text-slate-400 uppercase tracking-widest">Tentang</p>
                <a href="{{ url('/profil') }}" class="block px-6 py-2 text-slate-600 hover:text-brand-700 transition">Profil</a>
                <a href="{{ url('/visi') }}" class="block px-6 py-2 text-slate-600 hover:text-brand-700 transition">Visi & Misi</a>
            </div>
            <div class="space-y-1">
                <p class="px-4 py-2 text-[10px] font-bold text-slate-400 uppercase tracking-widest">Layanan</p>
                <a href="{{ url('/LayananPengaduan') }}" class="block px-6 py-2 text-slate-600 hover:text-brand-700 transition">Pengaduan</a>
                <a href="{{ url('/LayananInformasi') }}" class="block px-6 py-2 text-slate-600 hover:text-brand-700 transition">Informasi</a>
                <a href="{{ url('/LayananPerizinan') }}" class="block px-6 py-2 text-slate-600 hover:text-brand-700 transition">Perizinan</a>
            </div>
            <a href="#kontakkanwil" class="block px-4 py-3 text-slate-600 font-semibold hover:bg-brand-50 hover:text-brand-700 rounded-xl transition">Kontak</a>
            <div class="pt-4">
                <a href="https://wa.me/6282266662055" target="_blank" class="w-full bg-brand-700 text-white px-6 py-3 rounded-xl font-bold flex items-center justify-center">
                    <i class="fa-brands fa-whatsapp mr-2"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </header>

    <main class="flex-grow pt-20 md:pt-[114px]">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-300 pt-20 pb-10 border-t-4 border-brand-500 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8 mb-16">
                
                <!-- Brand Info -->
                <div class="lg:col-span-4">
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('images/logokementerian.png') }}" alt="Logo" class="h-12 w-auto mr-3">
                        <div>
                            <h2 class="font-bold text-lg leading-none text-white tracking-tight uppercase">DITJENPAS</h2>
                            <p class="text-[10px] font-bold text-brand-400 tracking-[0.2em] uppercase mt-1">Kanwil Banten</p>
                        </div>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8 pr-4">
                        Mewujudkan tata kelola pemasyarakatan yang transparan, akuntabel, dan berorientasi pada pelayanan masyarakat yang profesional dan prima di wilayah Banten.
                    </p>
                    <div class="flex space-x-3">
                        <a href="https://www.instagram.com/pemasyarakatanbanten/" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-600 hover:text-white transition duration-300"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-600 hover:text-white transition duration-300"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-600 hover:text-white transition duration-300"><i class="fa-solid fa-x"></i></a>
                    </div>
                </div>

                <!-- Tautan Cepat -->
                <div class="lg:col-span-3 lg:col-start-6">
                    <h3 class="text-white font-bold mb-6 tracking-wide text-lg">Tautan Cepat</h3>
                    <ul class="space-y-4 text-sm">
                        <li><a href="{{ url('/profil') }}" class="hover:text-brand-400 transition flex items-center"><i class="fa-solid fa-minus text-brand-600 mr-3 text-xs"></i> Profil Instansi</a></li>
                        <li><a href="{{ url('/visi') }}" class="hover:text-brand-400 transition flex items-center"><i class="fa-solid fa-minus text-brand-600 mr-3 text-xs"></i> Visi & Misi</a></li>
                        <li><a href="{{ url('/LayananPengaduan') }}" class="hover:text-brand-400 transition flex items-center"><i class="fa-solid fa-minus text-brand-600 mr-3 text-xs"></i> Pengaduan Online</a></li>
                        <li><a href="{{ url('/survei') }}" class="hover:text-brand-400 transition flex items-center"><i class="fa-solid fa-minus text-brand-600 mr-3 text-xs"></i> Survei Kepuasan</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div id="kontakkanwil" class="lg:col-span-4">
                    <h3 class="text-white font-bold mb-6 tracking-wide text-lg">Hubungi Kami</h3>
                    <ul class="space-y-5 text-sm">
                        <li class="flex items-start group">
                            <div class="mt-0.5 w-8 flex-shrink-0 text-brand-500 group-hover:text-brand-400 transition"><i class="fa-solid fa-location-dot text-lg"></i></div>
                            <span class="group-hover:text-white transition">Jl. Brigjen KH Samun, Kotabaru, Kec. Serang, Kota Serang, Banten 42112</span>
                        </li>
                        <li class="flex items-center group">
                            <div class="w-8 flex-shrink-0 text-brand-500 group-hover:text-brand-400 transition"><i class="fa-solid fa-phone text-lg"></i></div>
                            <a href="https://wa.me/6282266662055" target="_blank"><span class="group-hover:text-white transition">0822-6666-2055</span></a>
                        </li>
                        <li class="flex items-center group">
                            <div class="w-8 flex-shrink-0 text-brand-500 group-hover:text-brand-400 transition"><i class="fa-solid fa-envelope text-lg"></i></div>
                            <a href="mailto:Djpasbanten@gmail.com" ><span class="group-hover:text-white transition">djpasbanten@gmail.com</span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright Line -->
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500 font-medium text-center md:text-left">
                <p>&copy; 2026 Kanwil Ditjenpas Banten. Seluruh Hak Cipta Dilindungi.</p>
                <div class="mt-4 md:mt-0 flex space-x-6">
                    <a href="#" class="hover:text-slate-300 transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-slate-300 transition">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Mobile Menu Toggle
        const mobileToggle = document.getElementById('mobile-toggle');
        const mobilePanel = document.getElementById('mobile-panel');
        const iconBars = document.getElementById('icon-bars');
        const iconClose = document.getElementById('icon-close');

        mobileToggle.addEventListener('click', () => {
            mobilePanel.classList.toggle('hidden');
            mobilePanel.classList.toggle('active');
            
            // Ubah Ikon antara Hamburger dan Silang (X)
            if (mobilePanel.classList.contains('active')) {
                iconBars.style.display = 'none';
                iconClose.style.display = 'block';
            } 
            else {
                iconBars.style.display = 'block';
                iconClose.style.display = 'none';
            }
        });

        // Sticky Nav Effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 20) {
                navbar.classList.add('shadow-md');
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                if(window.innerWidth > 768) {
                   navbar.style.top = "0px";
                }
            } else {
                navbar.classList.remove('shadow-md');
                navbar.style.background = 'rgba(255, 255, 255, 0.85)';
                if(window.innerWidth > 768) {
                   navbar.style.top = "34px";
                }
            }
        });
    </script>
</body>
</html>