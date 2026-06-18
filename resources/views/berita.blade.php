@extends('master')

@section('seo')
<title>Pusat Informasi &amp; Berita Terintegrasi — Kanwil Ditjenpas Banten</title>
<meta name="description" content="Pusat Informasi, Berita Resmi, Pengumuman Penting, Agenda Kegiatan, dan Prestasi di lingkungan Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten.">
<meta name="keywords" content="berita pemasyarakatan banten, pengumuman lapas rutan banten, agenda kanwil ditjenpas banten, prestasi pemasyarakatan">
<meta name="author" content="Kanwil Ditjenpas Banten">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url('/berita') }}">

{{-- Open Graph --}}
<meta property="og:type" content="website">
<meta property="og:title" content="Pusat Informasi &amp; Berita Terintegrasi — Kanwil Ditjenpas Banten">
<meta property="og:description" content="Pusat Informasi, Berita Resmi, Pengumuman Penting, Agenda Kegiatan, dan Prestasi di lingkungan Kantor Wilayah Direktorat Jenderal Pemasyarakatan Banten.">
<meta property="og:url" content="{{ url('/berita') }}">
<meta property="og:image" content="{{ asset('images/logokementerian.png') }}">

{{-- Twitter --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pusat Informasi &amp; Berita Terintegrasi — Kanwil Ditjenpas Banten">
<meta name="twitter:description" content="Informasi dan Berita Resmi Terkini Kantor Wilayah Kemenkumham Banten.">
<meta name="twitter:image" content="{{ asset('images/logokementerian.png') }}">
@endsection

@section('content')
@php
// 1. DYNAMIC CATEGORIZATION FUNCTION FOR DATABASE POSTS
if (!function_exists('classifyPost')) {
    function classifyPost($title) {
        $titleLower = strtolower($title);
        if (str_contains($titleLower, 'pengumuman')) {
            return [
                'category' => 'Pengumuman',
                'category_slug' => 'pengumuman',
                'icon' => 'fa-solid fa-bullhorn',
                'badge_color' => 'bg-red-50 text-red-700 border-red-200/50',
                'badge_hover' => 'glow-pengumuman',
            ];
        }
        if (str_contains($titleLower, 'agenda') || str_contains($titleLower, 'jadwal')) {
            return [
                'category' => 'Agenda',
                'category_slug' => 'agenda',
                'icon' => 'fa-solid fa-calendar-days',
                'badge_color' => 'bg-amber-50 text-amber-700 border-amber-200/50',
                'badge_hover' => 'glow-agenda',
            ];
        }
        if (str_contains($titleLower, 'prestasi') || str_contains($titleLower, 'capaian') || str_contains($titleLower, 'penghargaan') || str_contains($titleLower, 'juara') || str_contains($titleLower, 'sabet') || str_contains($titleLower, 'raih')) {
            return [
                'category' => 'Prestasi',
                'category_slug' => 'prestasi',
                'icon' => 'fa-solid fa-trophy',
                'badge_color' => 'bg-violet-50 text-violet-750 border-violet-200/50',
                'badge_hover' => 'glow-prestasi',
            ];
        }
        if (str_contains($titleLower, 'informasi') || str_contains($titleLower, 'ppid') || str_contains($titleLower, 'kip')) {
            return [
                'category' => 'Informasi Publik',
                'category_slug' => 'informasi',
                'icon' => 'fa-solid fa-circle-info',
                'badge_color' => 'bg-teal-50 text-teal-700 border-teal-200/50',
                'badge_hover' => 'glow-informasi',
            ];
        }
        return [
            'category' => 'Berita & Kegiatan',
            'category_slug' => 'berita',
            'icon' => 'fa-solid fa-newspaper',
            'badge_color' => 'bg-blue-50 text-brand-700 border-blue-200/50',
            'badge_hover' => 'glow-berita',
        ];
    }
}

// Determine Hero Highlight (the most recent DB post)
$heroPost = $posts->first();
@endphp

<style>
    .filter-tab {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .filter-tab.active {
        background-color: #1b3d6a; /* Brand Blue */
        color: white;
        box-shadow: 0 4px 14px rgba(27, 61, 106, 0.25);
        border-color: #1b3d6a;
    }

    .info-card {
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .info-card:hover {
        transform: translateY(-8px);
    }

    /* Glow Hover Animations */
    .glow-berita:hover {
        box-shadow: 0 20px 40px -15px rgba(59, 130, 246, 0.2);
        border-color: rgba(59, 130, 246, 0.35);
    }
    .glow-pengumuman:hover {
        box-shadow: 0 20px 40px -15px rgba(239, 68, 68, 0.2);
        border-color: rgba(239, 68, 68, 0.35);
    }
    .glow-agenda:hover {
        box-shadow: 0 20px 40px -15px rgba(245, 158, 11, 0.2);
        border-color: rgba(245, 158, 11, 0.35);
    }
    .glow-prestasi:hover {
        box-shadow: 0 20px 40px -15px rgba(139, 92, 246, 0.2);
        border-color: rgba(139, 92, 246, 0.35);
    }
    .glow-informasi:hover {
        box-shadow: 0 20px 40px -15px rgba(20, 184, 166, 0.2);
        border-color: rgba(20, 184, 166, 0.35);
    }
</style>

{{-- BREADCRUMB / HERO SUB --}}
<section class="hero-sub">
    <div class="container hero-content-sub flex flex-col items-center text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold tracking-wider mb-2">BERITA &amp; INFORMASI</h1>
        <div class="flex justify-center items-center gap-3 text-sm font-medium mt-4 bg-black/20 px-6 py-2 rounded-full backdrop-blur-sm inline-flex mx-auto">
            <a href="{{ url('/') }}" class="hover:text-gold-400 transition flex items-center"><i class="fa-solid fa-house mr-1.5"></i> Beranda</a>
            <i class="fa-solid fa-chevron-right text-[10px] opacity-70"></i>
            <span class="font-bold text-white">Berita &amp; Informasi</span>
        </div>
    </div>
</section>

{{-- CORE INFORMATION HUB SECTION --}}
<section class="py-16 bg-slate-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- HERO HIGHLIGHT: Latest News Banner --}}
        @if($heroPost)
            @php
                $heroMeta = classifyPost($heroPost->title);
            @endphp
            <div class="bg-white rounded-[2.5rem] shadow-soft border border-slate-100 p-6 md:p-8 mb-16 overflow-hidden" data-aos="fade-up">
                <div class="flex flex-col lg:flex-row gap-8 items-center">
                    
                    {{-- Left: Image side with hover zoom --}}
                    <div class="w-full lg:w-1/2 aspect-[16/10] lg:aspect-[16/9] overflow-hidden rounded-2xl relative shadow-md group">
                        @if($heroPost->image)
                            <img src="{{ asset('storage/' . $heroPost->image) }}" alt="{{ $heroPost->title }}" class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-brand-700 to-brand-900 flex flex-col items-center justify-center text-white">
                                <i class="fa-solid fa-newspaper text-6xl opacity-30 mb-4"></i>
                                <span class="text-xs text-white/50">Gambar belum tersedia</span>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-xs font-bold uppercase tracking-wider shadow-md bg-brand-700 text-white">
                                <i class="fa-solid fa-star mr-1.5 text-gold-400"></i> BERITA UTAMA
                            </span>
                        </div>
                    </div>

                    {{-- Right: Content side --}}
                    <div class="w-full lg:w-1/2">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider {{ $heroMeta['badge_color'] }}">
                                <i class="{{ $heroMeta['icon'] }} mr-1.5"></i> {{ $heroMeta['category'] }}
                            </span>
                            @if($heroPost->published_at)
                                <span class="text-xs text-slate-400 font-medium">
                                    <i class="fa-regular fa-calendar mr-1.5"></i>
                                    {{ \Carbon\Carbon::parse($heroPost->published_at)->locale('id')->isoFormat('D MMMM YYYY') }}
                                </span>
                            @endif
                        </div>
                        
                        <h2 class="text-2xl md:text-3xl font-extrabold text-brand-950 leading-tight mb-4 tracking-tight group-hover:text-brand-700 transition">
                            <a href="{{ route('berita.show', $heroPost->slug) }}">{{ $heroPost->title }}</a>
                        </h2>
                        
                        <p class="text-xs text-slate-500 leading-relaxed mb-6 font-light line-clamp-3">
                            {{ Str::limit(strip_tags($heroPost->content), 220) }}
                        </p>

                        <div class="flex items-center gap-4">
                            <a href="{{ route('berita.show', $heroPost->slug) }}" class="inline-flex items-center bg-brand-900 hover:bg-brand-800 text-white font-bold px-6 py-3.5 rounded-full text-xs transition shadow-md shadow-brand-700/20">
                                Baca Selengkapnya <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
                            </a>
                            <span class="text-[11px] text-slate-400 font-bold uppercase tracking-wider flex items-center">
                                <i class="fa-regular fa-clock mr-1"></i> {{ max(2, round(str_word_count(strip_tags($heroPost->content)) / 180)) }} Menit Baca
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- INTERACTIVE SEARCH & CATEGORY FILTER TABS --}}
        <div class="bg-white rounded-[2rem] shadow-soft border border-slate-100 p-6 mb-12" data-aos="fade-up">
            <div class="flex flex-col lg:flex-row justify-between items-center gap-6">
                
                {{-- Left: Filter Tabs --}}
                <div class="flex flex-wrap items-center gap-2 w-full lg:w-auto">
                    <button class="filter-tab active px-4 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-50" data-category="all">
                        Semua
                    </button>
                    <button class="filter-tab px-4 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-50" data-category="berita">
                        Berita &amp; Kegiatan
                    </button>
                    <button class="filter-tab px-4 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-50" data-category="pengumuman">
                        Pengumuman
                    </button>
                    <button class="filter-tab px-4 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-50" data-category="agenda">
                        Agenda
                    </button>
                    <button class="filter-tab px-4 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-50" data-category="prestasi">
                        Prestasi
                    </button>
                    <button class="filter-tab px-4 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-700 font-bold text-xs tracking-wider uppercase hover:bg-slate-50" data-category="informasi">
                        Informasi Publik
                    </button>
                </div>

                {{-- Right: Search bar --}}
                <div class="relative w-full lg:w-80 h-11 group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass text-slate-400 text-sm group-focus-within:text-brand-500 transition-colors -translate-y-[1px]"></i>
                    </div>
                    <input type="text" id="search-hub" placeholder="Cari Informasi atau Berita..." style="padding-left: 2.75rem !important; padding-right: 2.5rem !important;" class="w-full h-full bg-white border border-slate-200/80 rounded-xl text-slate-800 text-sm font-medium placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-500/20 focus:border-brand-400 transition-all shadow-sm">
                    <button id="clear-hub-search" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-red-500 transition-colors hidden">
                        <i class="fa-solid fa-circle-xmark text-base -translate-y-[1px]"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- CARDS GRID --}}
        <div id="hub-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            {{-- A. DATABASE POSTS LOOP --}}
            @forelse($posts as $post)
                @php
                    $meta = classifyPost($post->title);
                @endphp
                <div class="info-card {{ $meta['badge_hover'] }} bg-white rounded-[2rem] p-5 border border-slate-150/70 shadow-soft" data-type="db" data-category="{{ $meta['category_slug'] }}" data-aos="fade-up">
                    <div class="flex-grow">
                        {{-- Image with aspect ratio --}}
                        <div class="relative overflow-hidden rounded-2xl mb-4 aspect-[4/3] bg-slate-50 shadow-inner group">
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover absolute inset-0 group-hover:scale-103 transition-transform duration-500" loading="lazy">
                            @else
                                <div class="absolute inset-0 bg-gradient-to-br from-brand-700 to-brand-900 flex flex-col items-center justify-center text-white">
                                    <i class="fa-solid fa-newspaper text-4xl opacity-30 mb-2"></i>
                                    <span class="text-[10px] text-white/45">Berita</span>
                                </div>
                            @endif
                            
                            {{-- Category Badge overlay --}}
                            <div class="absolute top-4 left-4">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-xl text-[10px] font-bold uppercase tracking-wider shadow {{ $meta['badge_color'] }}">
                                    <i class="{{ $meta['icon'] }} mr-1 text-[9px]"></i> {{ $meta['category'] }}
                                </span>
                            </div>
                        </div>

                        {{-- Metadata --}}
                        <div class="flex items-center text-[11px] text-slate-400 mb-2 font-semibold">
                            <i class="fa-regular fa-calendar mr-1.5 text-slate-350"></i> 
                            {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->locale('id')->isoFormat('D MMM YYYY') : 'Baru saja' }}
                        </div>

                        {{-- Title --}}
                        <h3 class="card-title text-base font-extrabold text-brand-950 mb-2 leading-snug line-clamp-2 hover:text-brand-650 transition">
                            <a href="{{ route('berita.show', $post->slug) }}">{{ $post->title }}</a>
                        </h3>

                        {{-- Excerpt --}}
                        <p class="card-excerpt text-[11px] text-slate-500 leading-relaxed font-light mb-6 line-clamp-3">
                            {{ Str::limit(strip_tags($post->content), 120) }}
                        </p>
                    </div>

                    {{-- Action Button --}}
                    <div class="border-t border-slate-100 pt-4 mt-auto">
                        <a href="{{ route('berita.show', $post->slug) }}" class="w-full bg-slate-50 hover:bg-slate-100 border border-slate-200/80 text-brand-900 font-bold py-2.5 px-4 rounded-xl text-[11px] transition duration-300 flex items-center justify-center gap-1.5 group shadow-sm">
                            Baca Selengkapnya <i class="fa-solid fa-chevron-right text-[8px] group-hover:translate-x-0.5 transition duration-300"></i>
                        </a>
                    </div>
                </div>
            @empty
                {{-- If empty, JavaScript can still show static content, but keep layout clean --}}
            @endforelse



        </div>

        {{-- EMPTY STATE CONTAINER --}}
        <div id="hub-empty" class="hidden text-center py-20 bg-white rounded-3xl border border-slate-150 shadow-soft" data-aos="fade-up">
            <div class="w-16 h-16 bg-slate-100 text-slate-400 rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
                <i class="fa-solid fa-magnifying-glass-minus animate-pulse"></i>
            </div>
            <h3 class="text-lg font-extrabold text-slate-800 mb-1">Informasi tidak ditemukan</h3>
            <p class="text-xs text-slate-400 max-w-sm mx-auto font-light leading-relaxed mb-6">
                Tidak ada berita, pengumuman, agenda, atau capaian prestasi yang sesuai dengan kata kunci atau filter Anda.
            </p>
            <button id="reset-hub-filter" class="bg-brand-900 hover:bg-brand-850 text-white font-bold px-6 py-2.5 rounded-xl text-xs transition duration-300 shadow">
                Reset Filter
            </button>
        </div>

    </div>
</section>



{{-- CLIENT-SIDE JAVASCRIPT FOR REAL-TIME FILTERING & SEARCHING --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('search-hub');
        const clearBtn = document.getElementById('clear-hub-search');
        const filterBtns = document.querySelectorAll('.filter-tab');
        const cards = document.querySelectorAll('.info-card');
        const emptyState = document.getElementById('hub-empty');
        const resetBtn = document.getElementById('reset-hub-filter');
        const hubGrid = document.getElementById('hub-grid');

        // Main filter execution logic
        function filterHub() {
            const query = searchInput.value.toLowerCase().trim();
            const activeTab = document.querySelector('.filter-tab.active');
            const targetCategory = activeTab ? activeTab.getAttribute('data-category') : 'all';
            let visibleCount = 0;

            cards.forEach(card => {
                const title = card.querySelector('.card-title').textContent.toLowerCase();
                const excerpt = card.querySelector('.card-excerpt').textContent.toLowerCase();
                const cardCategory = card.getAttribute('data-category');

                const matchesSearch = title.includes(query) || excerpt.includes(query);
                const matchesCategory = targetCategory === 'all' || cardCategory === targetCategory;

                if (matchesSearch && matchesCategory) {
                    card.style.display = 'flex';
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

            // Toggle empty state UI
            if (visibleCount === 0) {
                hubGrid.style.display = 'none';
                emptyState.style.display = 'block';
                setTimeout(() => {
                    emptyState.style.opacity = '1';
                }, 10);
            } else {
                hubGrid.style.display = 'grid';
                emptyState.style.display = 'none';
                emptyState.style.opacity = '0';
            }

            // Toggle search clear button
            if (query.length > 0) {
                clearBtn.classList.remove('hidden');
            } else {
                clearBtn.classList.add('hidden');
            }
        }

        // Event listener for search typing
        searchInput.addEventListener('input', filterHub);

        // Clear search input button
        clearBtn.addEventListener('click', function() {
            searchInput.value = '';
            filterHub();
            searchInput.focus();
        });

        // Event listener for category tabs
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                filterHub();
            });
        });

        // Reset filter button
        resetBtn.addEventListener('click', function() {
            searchInput.value = '';
            filterBtns.forEach(b => b.classList.remove('active'));
            const allBtn = document.querySelector('.filter-tab[data-category="all"]');
            if (allBtn) allBtn.classList.add('active');
            filterHub();
        });


    });
</script>
@endsection
