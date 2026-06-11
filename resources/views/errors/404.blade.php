<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ditemukan (404) — Kanwil Ditjenpas Banten</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logopas.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css'])
</head>
<body class="font-sans text-slate-600 antialiased bg-slate-50 flex items-center justify-center min-h-screen p-4 overflow-hidden relative">
    
    <!-- Background Glow and Patterns -->
    <div class="absolute top-[-20%] left-[-10%] w-[50%] aspect-square rounded-full bg-brand-200/20 blur-[120px] pointer-events-none z-0"></div>
    <div class="absolute bottom-[-20%] right-[-10%] w-[50%] aspect-square rounded-full bg-gold-200/20 blur-[120px] pointer-events-none z-0"></div>
    
    <div class="max-w-2xl w-full text-center relative z-10" data-aos="zoom-in">
        <!-- Logo -->
        <div class="flex justify-center items-center mb-8">
            <img src="{{ asset('images/logokementerian.png') }}" alt="Logo" class="h-16 w-auto mr-3 drop-shadow-md">
            <div class="text-left">
                <h1 class="font-extrabold text-2xl leading-none text-brand-900 tracking-tight uppercase">DITJENPAS</h1>
                <p class="text-[10px] font-bold text-brand-600 tracking-[0.2em] uppercase mt-1">Kanwil Banten</p>
            </div>
        </div>

        <!-- Card Container -->
        <div class="bg-white rounded-[2.5rem] shadow-xl border border-slate-100 p-8 md:p-12 relative overflow-hidden">
            <!-- Animated Icon / Illustration -->
            <div class="relative w-36 h-36 mx-auto mb-8 flex items-center justify-center">
                <div class="absolute inset-0 bg-brand-50 rounded-full animate-ping opacity-25"></div>
                <div class="absolute inset-2 bg-brand-100/60 rounded-full animate-pulse"></div>
                <div class="relative w-24 h-24 bg-gradient-to-br from-brand-700 to-brand-900 rounded-3xl flex items-center justify-center shadow-lg shadow-brand-900/20 transform rotate-12 transition hover:rotate-0 duration-300">
                    <span class="text-4xl font-extrabold text-white">404</span>
                </div>
            </div>

            <!-- Header Message -->
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-800 leading-tight mb-4">
                Halaman Tidak Ditemukan
            </h2>
            
            <p class="text-slate-500 text-sm md:text-base leading-relaxed mb-8 max-w-lg mx-auto">
                Maaf, halaman yang Anda cari tidak dapat ditemukan atau telah dipindahkan. Silakan periksa kembali URL Anda atau kembali ke halaman beranda.
            </p>

            <!-- Call to Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/') }}" class="bg-brand-700 hover:bg-brand-800 text-white font-bold px-8 py-3.5 rounded-full transition-all text-sm shadow-md shadow-brand-700/20 flex items-center justify-center">
                    <i class="fa-solid fa-house mr-2"></i> Kembali ke Beranda
                </a>
                <a href="tel:082266662055" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold px-8 py-3.5 rounded-full transition-all text-sm flex items-center justify-center">
                    <i class="fa-solid fa-phone mr-2"></i> Hubungi Kami
                </a>
            </div>
        </div>

        <!-- Footer Note -->
        <p class="text-slate-400 text-xs mt-8 font-medium">
            &copy; 2026 Kanwil Ditjenpas Banten. Seluruh Hak Cipta Dilindungi.
        </p>
    </div>

</body>
</html>
