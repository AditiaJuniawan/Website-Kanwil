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

// 2. CURATED STATIC FALLBACK DATA SPECIFIC TO BANTEN UPTs
$staticItems = [
    [
        'id' => 'static-1',
        'title' => 'Pendaftaran Bantuan Hukum Gratis Triwulan II Tahun 2026',
        'slug' => 'pendaftaran-bantuan-hukum-gratis-triwulan-ii-2026',
        'content' => "Kantor Wilayah Kementerian Hukum dan HAM Banten kembali membuka pendaftaran program Bantuan Hukum Gratis untuk masyarakat kurang mampu untuk Triwulan II Tahun Anggaran 2026.\n\nProgram ini bekerja sama dengan Organisasi Bantuan Hukum (OBH) terakreditasi di wilayah Banten untuk memberikan pendampingan hukum baik litigasi maupun non-litigasi secara cuma-cuma.\n\nMasyarakat yang membutuhkan cukup membawa Surat Keterangan Tidak Mampu (SKTM) dan Kartu Identitas ke Kantor Wilayah atau ke Lapas/Rutan terdekat di daerah Serang, Tangerang, Cilegon, Rangkasbitung, atau Pandeglang.",
        'image' => null,
        'category' => 'Pengumuman',
        'category_slug' => 'pengumuman',
        'published_at' => '10 Jun 2026',
        'icon' => 'fa-solid fa-bullhorn',
        'badge_color' => 'bg-red-50 text-red-700 border-red-200/50',
        'badge_hover' => 'glow-pengumuman',
    ],
    [
        'id' => 'static-2',
        'title' => 'Himbauan Peningkatan Kewaspadaan Menjelang Hari Raya Keagamaan di Lapas & Rutan Banten',
        'slug' => 'himbauan-peningkatan-kewaspadaan-hari-raya-keagamaan-2026',
        'content' => "Kepala Kantor Wilayah Kementerian Hukum dan HAM Banten mengeluarkan instruksi resmi kepada seluruh Kepala Unit Pelaksana Teknis (UPT) Pemasyarakatan se-Banten untuk meningkatkan kewaspadaan dan pengamanan menjelang perayaan Hari Raya Keagamaan.\n\nInstruksi ini meliputi peningkatan intensitas razia insidental kamar hunian, pengawasan ketat barang titipan kunjungan keluarga, koordinasi dengan aparat penegak hukum (TNI/Polri), serta kesiapan personel pengamanan 24 jam guna mengantisipasi gangguan keamanan dan ketertiban di lingkungan Lapas dan Rutan.",
        'image' => null,
        'category' => 'Pengumuman',
        'category_slug' => 'pengumuman',
        'published_at' => '05 Jun 2026',
        'icon' => 'fa-solid fa-triangle-exclamation',
        'badge_color' => 'bg-red-50 text-red-700 border-red-200/50',
        'badge_hover' => 'glow-pengumuman',
    ],
    [
        'id' => 'static-3',
        'title' => 'Sosialisasi Pencegahan Pungli & Gratifikasi Pelayanan di Lapas Kelas IIA Serang',
        'slug' => 'sosialisasi-pencegahan-pungli-gratifikasi-lapas-serang',
        'content' => "Kanwil Ditjenpas Banten mengadakan kegiatan Sosialisasi Pencegahan Pungutan Liar (Pungli) dan Gratifikasi bagi seluruh petugas pemasyarakatan di Lapas Kelas IIA Serang.\n\nKegiatan ini bertujuan memperkuat integritas petugas dalam memberikan pelayanan publik kepada warga binaan dan keluarganya, sekaligus sebagai langkah nyata mendukung pembangunan Zona Integritas menuju Wilayah Bebas dari Korupsi (WBK) dan Wilayah Birokrasi Bersih dan Melayani (WBBM) di lingkungan pemasyarakatan Banten.",
        'image' => null,
        'category' => 'Agenda',
        'category_slug' => 'agenda',
        'published_at' => '15 Jun 2026',
        'icon' => 'fa-solid fa-calendar-days',
        'badge_color' => 'bg-amber-50 text-amber-700 border-amber-200/50',
        'badge_hover' => 'glow-agenda',
    ],
    [
        'id' => 'static-4',
        'title' => 'Rapat Koordinasi Evaluasi Capaian Kinerja UPT Pemasyarakatan Banten Semester I',
        'slug' => 'rapat-koordinasi-evaluasi-capaian-kinerja-semester-i',
        'content' => "Akan diselenggarakan Rapat Koordinasi Evaluasi Capaian Kinerja Semester I Tahun Anggaran 2026 UPT Pemasyarakatan se-Banten pada tanggal 18 Juni 2026 bertempat di Aula Lantai 3 Kantor Wilayah Kemenkumham Banten.\n\nRapat ini akan dihadiri oleh seluruh Kepala Lapas, Rutan, LPKA, Bapas, dan Rupbasan untuk memaparkan capaian target kinerja, evaluasi penyerapan anggaran, serta penyusunan strategi penyelesaian kendala operasional di lapangan.",
        'image' => null,
        'category' => 'Agenda',
        'category_slug' => 'agenda',
        'published_at' => '18 Jun 2026',
        'icon' => 'fa-solid fa-calendar-check',
        'badge_color' => 'bg-amber-50 text-amber-700 border-amber-200/50',
        'badge_hover' => 'glow-agenda',
    ],
    [
        'id' => 'static-5',
        'title' => 'Kanwil Kemenkumham Banten Raih Penghargaan Pelayanan Publik Terbaik dari MenpanRB',
        'slug' => 'kanwil-banten-raih-penghargaan-pelayanan-publik-terbaik-menpanrb',
        'content' => "Kantor Wilayah Kementerian Hukum dan HAM Banten berhasil menyabet penghargaan Pelayanan Publik Terbaik Tahun 2026 dari Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (MenpanRB).\n\nPenghargaan ini diberikan atas komitmen tinggi jajaran Kanwil Banten dalam mengimplementasikan transformasi pelayanan berbasis digital, transparansi, serta penyediaan fasilitas pelayanan ramah HAM di seluruh satuan kerja pemasyarakatan dan keimigrasian di wilayah Provinsi Banten.",
        'image' => null,
        'category' => 'Prestasi',
        'category_slug' => 'prestasi',
        'published_at' => '25 Mei 2026',
        'icon' => 'fa-solid fa-trophy',
        'badge_color' => 'bg-violet-50 text-violet-750 border-violet-200/50',
        'badge_hover' => 'glow-prestasi',
    ],
    [
        'id' => 'static-6',
        'title' => 'Lapas Kelas IIA Tangerang Sabet Predikat Wilayah Bebas dari Korupsi (WBK)',
        'slug' => 'lapas-tangerang-sabet-predikat-wilayah-bebas-korupsi-wbk',
        'content' => "Lapas Kelas IIA Tangerang menorehkan prestasi gemilang dengan meraih predikat Wilayah Bebas dari Korupsi (WBK) dari KemenpanRB setelah melalui proses evaluasi yang ketat.\n\nKunci keberhasilan ini adalah inovasi layanan kunjungan online, keterbukaan informasi publik, penegakan integritas bebas pungli, serta pelayanan pemasyarakatan yang bersih dan berorientasi pada kepuasan warga binaan dan keluarganya.",
        'image' => null,
        'category' => 'Prestasi',
        'category_slug' => 'prestasi',
        'published_at' => '12 Mei 2026',
        'icon' => 'fa-solid fa-medal',
        'badge_color' => 'bg-violet-50 text-violet-750 border-violet-200/50',
        'badge_hover' => 'glow-prestasi',
    ],
    [
        'id' => 'static-7',
        'title' => 'Laporan Keterbukaan Akses Informasi Publik (PPID) Triwulan I Tahun 2026',
        'slug' => 'laporan-ppid-keterbukaan-informasi-publik-triwulan-i-2026',
        'content' => "Pejabat Pengelola Informasi dan Dokumentasi (PPID) Kantor Wilayah Kemenkumham Banten mempublikasikan Laporan Akses Informasi Publik Triwulan I Tahun 2026.\n\nLaporan ini merinci jumlah permohonan informasi publik yang diterima, waktu rata-rata tanggapan (yang berhasil dipangkas menjadi hanya 2 hari kerja), serta tingkat kepuasan pemohon informasi yang mencapai 96.7%. Berkas laporan lengkap dapat diunduh di desk layanan informasi.",
        'image' => null,
        'category' => 'Informasi Publik',
        'category_slug' => 'informasi',
        'published_at' => '15 Mei 2026',
        'icon' => 'fa-solid fa-circle-info',
        'badge_color' => 'bg-teal-50 text-teal-700 border-teal-200/50',
        'badge_hover' => 'glow-informasi',
    ],
    [
        'id' => 'static-8',
        'title' => 'Brosur Digital Layanan Pemasyarakatan Terpadu Kanwil Banten',
        'slug' => 'brosur-digital-layanan-pemasyarakatan-terpadu-banten',
        'content' => "PPID Kanwil Ditjenpas Banten merilis Brosur Digital Layanan Pemasyarakatan Terpadu edisi revisi terbaru 2026.\n\nBrosur ini memuat panduan komprehensif bagi keluarga warga binaan mengenai hak-hak integrasi (Cuti Bersyarat, Pembebasan Bersyarat, Cuti Menjelang Bebas), tata tertib kunjungan, alur pengaduan resmi, hingga pemanfaatan aplikasi STARPAS dan SULTAN Banten untuk transparansi layanan.",
        'image' => null,
        'category' => 'Informasi Publik',
        'category_slug' => 'informasi',
        'published_at' => '05 Mei 2026',
        'icon' => 'fa-solid fa-file-pdf',
        'badge_color' => 'bg-teal-50 text-teal-700 border-teal-200/50',
        'badge_hover' => 'glow-informasi',
    ],
];

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

            {{-- B. CURATED STATIC FALLBACK POSTS LOOP --}}
            @foreach($staticItems as $item)
                <div class="info-card {{ $item['badge_hover'] }} bg-white rounded-[2rem] p-5 border border-slate-150/70 shadow-soft" data-type="static" data-category="{{ $item['category_slug'] }}" data-aos="fade-up">
                    <div class="flex-grow">
                        {{-- Static decorative icon card placeholder --}}
                        <div class="relative overflow-hidden rounded-2xl mb-4 aspect-[4/3] bg-gradient-to-br from-slate-50 to-slate-100 border border-slate-200/60 flex flex-col items-center justify-center shadow-inner group">
                            <div class="w-16 h-16 rounded-2xl bg-white border border-slate-200/60 shadow-sm flex items-center justify-center text-brand-800 text-2xl mb-2 transition duration-300 group-hover:scale-110">
                                <i class="{{ $item['icon'] }}"></i>
                            </div>
                            <span class="text-[10px] text-slate-400 font-semibold">Dokumen Resmi Banten</span>
                            
                            {{-- Category Badge overlay --}}
                            <div class="absolute top-4 left-4">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-xl text-[10px] font-bold uppercase tracking-wider shadow {{ $item['badge_color'] }}">
                                    <i class="{{ $item['icon'] }} mr-1 text-[9px]"></i> {{ $item['category'] }}
                                </span>
                            </div>
                        </div>

                        {{-- Metadata --}}
                        <div class="flex items-center text-[11px] text-slate-400 mb-2 font-semibold">
                            <i class="fa-regular fa-calendar mr-1.5 text-slate-350"></i> 
                            {{ $item['published_at'] }}
                        </div>

                        {{-- Title --}}
                        <h3 class="card-title text-base font-extrabold text-brand-950 mb-2 leading-snug line-clamp-2">
                            {{ $item['title'] }}
                        </h3>

                        {{-- Excerpt --}}
                        <p class="card-excerpt text-[11px] text-slate-500 leading-relaxed font-light mb-6 line-clamp-3">
                            {{ Str::limit(strip_tags($item['content']), 120) }}
                        </p>
                    </div>

                    {{-- Modal Action Button --}}
                    <div class="border-t border-slate-100 pt-4 mt-auto">
                        <button class="open-modal-btn w-full bg-slate-50 hover:bg-slate-100 border border-slate-200/80 text-brand-900 font-bold py-2.5 px-4 rounded-xl text-[11px] transition duration-300 flex items-center justify-center gap-1.5 group shadow-sm"
                                data-id="{{ $item['id'] }}"
                                data-title="{{ $item['title'] }}"
                                data-content="{{ $item['content'] }}"
                                data-category="{{ $item['category'] }}"
                                data-date="{{ $item['published_at'] }}"
                                data-badge-color="{{ $item['badge_color'] }}">
                            Baca Selengkapnya <i class="fa-solid fa-chevron-right text-[8px] group-hover:translate-x-0.5 transition duration-300"></i>
                        </button>
                    </div>
                </div>
            @endforeach

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

{{-- MODERN INTERACTIVE DETAIL MODAL (FOR STATIC CONTENT PREVIEW) --}}
<div id="info-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300">
    <div class="bg-white rounded-[2rem] max-w-2xl w-full mx-4 shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300">
        <div class="p-6 md:p-8 relative">
            {{-- Close Button --}}
            <button id="close-modal" class="absolute top-6 right-6 w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:text-slate-850 hover:bg-slate-200 transition shadow-sm" title="Tutup">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
            
            {{-- Category & Date --}}
            <div class="flex items-center gap-3 mb-4">
                <span id="modal-badge" class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider border"></span>
                <span id="modal-date" class="text-xs text-slate-400 font-semibold"></span>
            </div>
            
            {{-- Title --}}
            <h2 id="modal-title" class="text-xl md:text-2xl font-extrabold text-brand-950 mb-6 leading-tight pr-8"></h2>
            
            <hr class="border-slate-100 mb-6">
            
            {{-- Content Scrollable --}}
            <div id="modal-content" class="text-slate-600 text-sm leading-relaxed max-h-[300px] overflow-y-auto pr-2 custom-scrollbar whitespace-pre-line text-justify"></div>
            
            <hr class="border-slate-100 my-6">
            
            {{-- Footer info --}}
            <div class="flex justify-between items-center">
                <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wide">Kanwil Ditjenpas Banten</span>
                <button onclick="closeModal()" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold px-5 py-2.5 rounded-xl text-xs transition">
                    Tutup Detail
                </button>
            </div>
        </div>
    </div>
</div>

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

        // 3. STATIC MODAL PREVIEW MANAGEMENT
        const modal = document.getElementById('info-modal');
        const modalTitle = document.getElementById('modal-title');
        const modalContent = document.getElementById('modal-content');
        const modalBadge = document.getElementById('modal-badge');
        const modalDate = document.getElementById('modal-date');

        // Attach event listeners to all modal buttons using data-* attributes
        document.querySelectorAll('.open-modal-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const title = this.getAttribute('data-title');
                const content = this.getAttribute('data-content');
                const category = this.getAttribute('data-category');
                const date = this.getAttribute('data-date');
                const badgeColorClass = this.getAttribute('data-badge-color');

                modalTitle.textContent = title;
                modalContent.textContent = content;
                modalDate.innerHTML = `<i class="fa-regular fa-calendar mr-1.5"></i> ${date}`;
                modalBadge.textContent = category;
                modalBadge.className = `px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider border ${badgeColorClass}`;

                modal.classList.remove('hidden');
                setTimeout(() => {
                    modal.classList.add('opacity-100');
                    modal.querySelector('.transform').classList.remove('scale-95');
                    modal.querySelector('.transform').classList.add('scale-100');
                }, 10);
            });
        });

        window.closeModal = function() {
            modal.classList.remove('opacity-100');
            modal.querySelector('.transform').classList.remove('scale-100');
            modal.querySelector('.transform').classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        };

        document.getElementById('close-modal').addEventListener('click', closeModal);
        modal.addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });
    });
</script>
@endsection
