@extends('master')

@section('seo')
<title>Portal Aplikasi Terintegrasi — Kanwil Ditjenpas Banten</title>
<meta name="description" content="Portal Aplikasi Terintegrasi (Application Gateway) Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten. Akses satu pintu untuk seluruh layanan digital, monitoring, administrasi, dan pendukung.">
<meta name="keywords" content="portal aplikasi, gateway ditjenpas banten, sipas banten, sultan banten, starpas banten, layanan publik pemasyarakatan">
<meta name="author" content="Kanwil Ditjenpas Banten">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url('/portal') }}">

{{-- Open Graph --}}
<meta property="og:type" content="website">
<meta property="og:title" content="Portal Aplikasi Terintegrasi — Kanwil Ditjenpas Banten">
<meta property="og:description" content="Akses satu pintu untuk seluruh aplikasi monitoring, pelayanan, administrasi, dan layanan digital di lingkungan Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten.">
<meta property="og:url" content="{{ url('/portal') }}">
<meta property="og:image" content="{{ asset('images/logokementerian.png') }}">

{{-- Twitter --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Portal Aplikasi Terintegrasi — Kanwil Ditjenpas Banten">
<meta name="twitter:description" content="Akses satu pintu untuk seluruh aplikasi di lingkungan Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten.">
<meta name="twitter:image" content="{{ asset('images/logokementerian.png') }}">
@endsection

@section('content')
<style>
    .portal-hero {
        background: linear-gradient(135deg, rgba(27, 61, 106, 0.95) 0%, rgba(22, 50, 87, 0.85) 100%), url('{{ asset("images/gedung2.png") }}');
        background-size: cover;
        background-position: center;
    }
    
    .filter-btn {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .filter-btn.active {
        background-color: #f59e0b; /* Gold */
        color: #1b3d6a; /* Brand Blue */
        box-shadow: 0 4px 14px rgba(245, 158, 11, 0.35);
        border-color: #f59e0b;
    }

    .app-card {
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .app-card:hover {
        transform: translateY(-8px);
    }

    /* Card Glow Themes */
    .glow-monitoring:hover {
        box-shadow: 0 20px 40px -15px rgba(59, 130, 246, 0.25);
        border-color: rgba(59, 130, 246, 0.4);
    }
    .glow-pelayanan:hover {
        box-shadow: 0 20px 40px -15px rgba(245, 158, 11, 0.25);
        border-color: rgba(245, 158, 11, 0.4);
    }
    .glow-administrasi:hover {
        box-shadow: 0 20px 40px -15px rgba(16, 185, 129, 0.25);
        border-color: rgba(16, 185, 129, 0.4);
    }
    .glow-dashboard:hover {
        box-shadow: 0 20px 40px -15px rgba(6, 182, 212, 0.25);
        border-color: rgba(6, 182, 212, 0.4);
    }
    .glow-pendukung:hover {
        box-shadow: 0 20px 40px -15px rgba(139, 92, 246, 0.25);
        border-color: rgba(139, 92, 246, 0.4);
    }
    .glow-layanan:hover {
        box-shadow: 0 20px 40px -15px rgba(244, 63, 94, 0.25);
        border-color: rgba(244, 63, 94, 0.4);
    }

    .pulse-dot {
        position: relative;
    }
    .pulse-dot::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: currentColor;
        border-radius: 50%;
        animation: pulse-ring 1.6s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
    }
    @keyframes pulse-ring {
        0% { transform: scale(0.33); opacity: 1; }
        80%, 100% { transform: scale(2.2); opacity: 0; }
    }
</style>

<!-- HERO SECTION: Elegant Title & Description -->
<section class="portal-hero text-white py-16 md:py-24 relative z-10 rounded-b-[2rem] md:rounded-b-[3.5rem] shadow-xl">
    <div class="absolute inset-0 bg-gradient-to-r from-brand-900/40 to-transparent pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 text-center">
        <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs font-semibold mb-6 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-gold-500 mr-2 animate-pulse"></span>
            Application Gateway — Satu Pintu Layanan
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-none mb-6">
            Portal Aplikasi <span class="text-gradient-gold">Terintegrasi</span>
        </h1>
        <p class="text-base md:text-lg text-brand-100 max-w-3xl mx-auto font-light leading-relaxed mb-10">
            Akses satu pintu untuk seluruh aplikasi internal dan layanan digital eksternal di lingkungan Kantor Wilayah Direktorat Jenderal Pemasyarakatan Provinsi Banten.
        </p>

        <!-- SEARCH INPUT -->
        <div class="max-w-3xl mx-auto relative px-4">
            <div class="relative h-16 group">
                <div class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass text-slate-400 text-xl group-focus-within:text-gold-500 transition-colors -translate-y-[2px]"></i>
                </div>
                <input type="text" id="search-app" placeholder="Cari Nama Aplikasi, Layanan, atau Deskripsi..." style="padding-left: 4rem !important; padding-right: 3rem !important;" class="w-full h-full bg-white border border-slate-200 rounded-2xl text-slate-800 text-base md:text-lg font-medium placeholder-slate-400 focus:outline-none focus:ring-4 focus:ring-gold-500/20 focus:border-gold-400 transition-all duration-300 shadow-xl hover:shadow-2xl">
                <button id="clear-search" class="absolute inset-y-0 right-0 pr-6 flex items-center text-slate-400 hover:text-red-500 transition-colors hidden" title="Hapus pencarian">
                    <i class="fa-solid fa-circle-xmark text-xl -translate-y-[2px]"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- APPLICATION GATEWAY BODY -->
<section class="py-12 bg-slate-50 relative -mt-6 z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- CATEGORY FILTERS (CHIPS) -->
        <div class="flex flex-wrap items-center justify-center gap-3 mb-12" data-aos="fade-up">
            <button class="filter-btn active px-5 py-2.5 rounded-full border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-100 hover:border-slate-300" data-filter="all">
                <i class="fa-solid fa-grid-2 mr-1.5"></i> Semua
            </button>
            <button class="filter-btn px-5 py-2.5 rounded-full border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-100 hover:border-slate-300" data-filter="monitoring">
                <i class="fa-solid fa-chart-line mr-1.5"></i> Monitoring
            </button>
            <button class="filter-btn px-5 py-2.5 rounded-full border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-100 hover:border-slate-300" data-filter="pelayanan">
                <i class="fa-solid fa-handshake-angle mr-1.5"></i> Pelayanan
            </button>
            <button class="filter-btn px-5 py-2.5 rounded-full border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-100 hover:border-slate-300" data-filter="administrasi">
                <i class="fa-solid fa-folder-open mr-1.5"></i> Administrasi
            </button>
            <button class="filter-btn px-5 py-2.5 rounded-full border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-100 hover:border-slate-300" data-filter="dashboard">
                <i class="fa-solid fa-chart-pie mr-1.5"></i> Dashboard
            </button>
            <button class="filter-btn px-5 py-2.5 rounded-full border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-100 hover:border-slate-300" data-filter="pendukung">
                <i class="fa-solid fa-gears mr-1.5"></i> Pendukung
            </button>
            <button class="filter-btn px-5 py-2.5 rounded-full border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-100 hover:border-slate-300" data-filter="layanan">
                <i class="fa-solid fa-globe mr-1.5"></i> Layanan Digital
            </button>
        </div>

        <!-- APP CARDS GRID -->
        <div id="apps-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($apps as $app)
            @php
                $glowClass = 'glow-monitoring'; // Default
                $iconBg = 'bg-blue-50 text-blue-600';
                $headerGradient = 'from-blue-500 to-indigo-600';
                
                if(str_contains($app->categories, 'pelayanan')) {
                    $glowClass = 'glow-pelayanan';
                    $iconBg = 'bg-amber-50 text-amber-700';
                    $headerGradient = 'from-amber-500 to-orange-500';
                } elseif(str_contains($app->categories, 'administrasi')) {
                    $glowClass = 'glow-administrasi';
                    $iconBg = 'bg-emerald-50 text-emerald-600';
                    $headerGradient = 'from-emerald-500 to-teal-600';
                } elseif(str_contains($app->categories, 'pendukung')) {
                    $glowClass = 'glow-pendukung';
                    $iconBg = 'bg-violet-50 text-violet-600';
                    $headerGradient = 'from-violet-500 to-purple-600';
                } elseif(str_contains($app->categories, 'layanan')) {
                    $glowClass = 'glow-layanan';
                    $iconBg = 'bg-rose-50 text-rose-600';
                    $headerGradient = 'from-rose-500 to-pink-600';
                }
            @endphp
            <div class="app-card relative overflow-hidden {{ $glowClass }} bg-white rounded-3xl p-6 border border-slate-150/80 shadow-soft" data-categories="{{ $app->categories }}" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r {{ $headerGradient }}"></div>
                <div class="flex-grow pt-2">
                    <div class="flex justify-between items-start mb-5">
                        <div class="w-12 h-12 {{ $iconBg }} rounded-2xl flex items-center justify-center text-xl shadow-inner">
                            <i class="{{ $app->icon }}"></i>
                        </div>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-green-50 text-green-700 border border-green-200/50">
                            <span class="w-1.5 h-1.5 bg-green-500 rounded-full mr-1.5 pulse-dot text-green-500"></span> Aktif
                        </span>
                    </div>
                    <div class="flex flex-wrap gap-1.5 mb-3">
                        @foreach(explode(',', $app->categories) as $category)
                            @if(trim($category))
                                <span class="px-2 py-0.5 text-[9px] font-bold text-slate-700 bg-slate-100 border border-slate-200 rounded capitalize">{{ trim($category) }}</span>
                            @endif
                        @endforeach
                    </div>
                    <h3 class="app-title text-xl font-extrabold text-brand-950 mb-2">{{ $app->name }}</h3>
                    <p class="app-desc text-xs text-slate-500 leading-relaxed mb-6 font-light">
                        {{ $app->description }}
                    </p>
                </div>
                <div class="border-t border-slate-100 pt-4 mt-auto">
                    <a href="{{ $app->url }}" target="_blank" class="w-full bg-brand-900 hover:bg-brand-850 text-white font-bold py-3 px-4 rounded-xl text-xs transition duration-300 flex items-center justify-center gap-2 group shadow-sm">
                        Akses Aplikasi <i class="fa-solid fa-arrow-up-right-from-square text-[10px] group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition duration-300"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- NO RESULTS CONTAINER -->
        <div id="no-results" class="hidden text-center py-24 bg-white rounded-3xl border border-slate-150 shadow-soft" data-aos="fade-up">
            <div class="w-20 h-20 bg-slate-100 text-slate-400 rounded-full flex items-center justify-center text-3xl mx-auto mb-6">
                <i class="fa-solid fa-magnifying-glass-minus animate-pulse"></i>
            </div>
            <h3 class="text-xl font-extrabold text-slate-800 mb-2">Aplikasi tidak ditemukan</h3>
            <p class="text-sm text-slate-400 max-w-sm mx-auto font-light leading-relaxed mb-8">
                Tidak ada aplikasi atau layanan digital yang sesuai dengan kata kunci atau filter kategori yang Anda cari.
            </p>
            <button id="reset-filter" class="bg-gold-500 hover:bg-gold-400 text-brand-900 font-bold px-6 py-3 rounded-full text-xs uppercase tracking-wider transition-all duration-300 shadow-md">
                Reset Pencarian &amp; Filter
            </button>
        </div>

    </div>
</section>

<!-- JAVASCRIPT FOR INTERACTIVE FILTER & SEARCH -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('search-app');
        const clearBtn = document.getElementById('clear-search');
        const filterBtns = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.app-card');
        const noResults = document.getElementById('no-results');
        const resetBtn = document.getElementById('reset-filter');
        const appsGrid = document.getElementById('apps-grid');

        // Apply dynamic visibility
        function performFiltering() {
            const query = searchInput.value.toLowerCase().trim();
            const activeFilterBtn = document.querySelector('.filter-btn.active');
            const activeCategory = activeFilterBtn ? activeFilterBtn.getAttribute('data-filter') : 'all';
            let visibleCount = 0;

            cards.forEach(card => {
                const title = card.querySelector('.app-title').textContent.toLowerCase();
                const desc = card.querySelector('.app-desc').textContent.toLowerCase();
                const categories = card.getAttribute('data-categories').split(',');

                const matchesQuery = title.includes(query) || desc.includes(query);
                const matchesCategory = activeCategory === 'all' || categories.includes(activeCategory);

                if (matchesQuery && matchesCategory) {
                    card.style.display = 'flex';
                    // Trigger reflow/animation
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 10);
                    visibleCount++;
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95)';
                    card.style.display = 'none';
                }
            });

            // Toggle No Results Container
            if (visibleCount === 0) {
                appsGrid.style.display = 'none';
                noResults.style.display = 'block';
                setTimeout(() => {
                    noResults.style.opacity = '1';
                }, 10);
            } else {
                appsGrid.style.display = 'grid';
                noResults.style.display = 'none';
                noResults.style.opacity = '0';
            }

            // Toggle Search Clear Button
            if (query.length > 0) {
                clearBtn.classList.remove('hidden');
            } else {
                clearBtn.classList.add('hidden');
            }
        }

        // Live Search Input Event
        searchInput.addEventListener('input', performFiltering);

        // Clear Search Button
        clearBtn.addEventListener('click', function() {
            searchInput.value = '';
            performFiltering();
            searchInput.focus();
        });

        // Category Filter Buttons
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                performFiltering();
            });
        });

        // Reset Filter Button
        resetBtn.addEventListener('click', function() {
            searchInput.value = '';
            filterBtns.forEach(b => b.classList.remove('active'));
            const allBtn = document.querySelector('.filter-btn[data-filter="all"]');
            if (allBtn) allBtn.classList.add('active');
            performFiltering();
        });
    });
</script>
@endsection
