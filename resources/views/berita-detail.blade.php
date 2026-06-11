@extends('master')

@section('seo')
<title>{{ $post->title }} — Kanwil Ditjenpas Banten</title>
<meta name="description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
<meta name="keywords" content="{{ $post->title }}, kanwil ditjenpas banten, pemasyarakatan banten, berita pemasyarakatan">
<meta name="author" content="Kanwil Ditjenpas Banten">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="{{ url('/berita/' . $post->slug) }}">
<meta property="og:type" content="article">
<meta property="og:title" content="{{ $post->title }}">
<meta property="og:description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
<meta property="og:url" content="{{ url('/berita/' . $post->slug) }}">
<meta property="og:image" content="{{ $post->image ? asset('storage/' . $post->image) : asset('images/logokementerian.png') }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="Kanwil Ditjenpas Banten">
<meta property="og:locale" content="id_ID">
@if($post->published_at)
<meta property="article:published_time" content="{{ \Carbon\Carbon::parse($post->published_at)->toIso8601String() }}">
<meta property="article:modified_time" content="{{ $post->updated_at?->toIso8601String() }}">
@endif
<meta property="article:author" content="Kanwil Ditjenpas Banten">
<meta property="article:section" content="Berita">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $post->title }}">
<meta name="twitter:description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
<meta name="twitter:image" content="{{ $post->image ? asset('storage/' . $post->image) : asset('images/logokementerian.png') }}">
<script type="application/ld+json">
@php
$jsonLd = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'NewsArticle',
            'headline' => addslashes($post->title),
            'description' => addslashes(Str::limit(strip_tags($post->content), 200)),
            'image' => $post->image ? asset('storage/' . $post->image) : asset('images/logokementerian.png'),
            'url' => url('/berita/' . $post->slug),
            'datePublished' => $post->published_at ? \Carbon\Carbon::parse($post->published_at)->toIso8601String() : $post->created_at->toIso8601String(),
            'dateModified' => $post->updated_at?->toIso8601String() ?? now()->toIso8601String(),
            'author' => [
                '@type' => 'Organization',
                'name' => 'Kanwil Ditjenpas Banten',
                'url' => 'https://ditjenpasbanten.com',
            ],
            'publisher' => [
                '@type' => 'GovernmentOrganization',
                'name' => 'Kanwil Ditjenpas Banten',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => 'https://ditjenpasbanten.com/images/logokementerian.png',
                ],
            ],
            'mainEntityOfPage' => url('/berita/' . $post->slug),
            'inLanguage' => 'id',
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Beranda', 'item' => 'https://ditjenpasbanten.com/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Berita', 'item' => 'https://ditjenpasbanten.com/berita'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => addslashes($post->title), 'item' => url('/berita/' . $post->slug)],
            ],
        ],
    ],
];
@endphp
{!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endsection

@section('content')
    {{-- Hero Sub --}}
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>{{ $post->title }}</h1>
            <a href="{{ url('/') }}">Beranda</a> &gt; <a href="{{ url('/berita') }}">Berita</a> &gt; <span class="text-white/70">Detail</span>
        </div>
    </section>

    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">

                {{-- Konten Utama --}}
                <article class="flex-1 min-w-0" data-aos="fade-up">
                    {{-- Card Artikel --}}
                    <div class="bg-white rounded-3xl shadow-soft overflow-hidden">

                        {{-- Gambar Utama --}}
                        @if($post->image)
                            <div class="w-full aspect-[16/7] overflow-hidden">
                                <img src="{{ asset('storage/' . $post->image) }}"
                                     alt="{{ $post->title }}"
                                     class="w-full h-full object-cover">
                            </div>
                        @else
                            <div class="w-full aspect-[16/7] bg-gradient-to-br from-brand-700 to-brand-900 flex items-center justify-center">
                                <i class="fa-solid fa-newspaper text-6xl text-white/30"></i>
                            </div>
                        @endif

                        {{-- Konten --}}
                        <div class="p-8 md:p-12">
                            {{-- Meta --}}
                            <div class="flex flex-wrap items-center gap-4 mb-6">
                                <span class="inline-flex items-center bg-brand-50 text-brand-700 text-xs font-bold px-3 py-1.5 rounded-lg uppercase tracking-wider">
                                    <i class="fa-solid fa-tag mr-1.5"></i> Kegiatan
                                </span>
                                @if($post->published_at)
                                <span class="flex items-center text-sm text-slate-400 font-medium">
                                    <i class="fa-regular fa-calendar mr-2"></i>
                                    {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d F Y') }}
                                </span>
                                @endif
                            </div>

                            {{-- Judul --}}
                            <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 leading-tight mb-8">
                                {{ $post->title }}
                            </h1>

                            {{-- Divider --}}
                            <div class="h-px bg-slate-100 mb-8"></div>

                            {{-- Isi Berita --}}
                            <div class="berita-content leading-relaxed text-slate-600 text-justify">
                                {!! $post->content !!}
                            </div>

                            <style>
                                .berita-content p {
                                    margin-bottom: 1.25rem;
                                    line-height: 1.85;
                                    text-align: justify;
                                }
                                .berita-content br + br {
                                    display: block;
                                    margin-top: 1rem;
                                    content: "";
                                }
                                .custom-scrollbar::-webkit-scrollbar {
                                    width: 6px;
                                }
                                .custom-scrollbar::-webkit-scrollbar-track {
                                    background: #f1f5f9;
                                    border-radius: 10px;
                                }
                                .custom-scrollbar::-webkit-scrollbar-thumb {
                                    background: #cbd5e1;
                                    border-radius: 10px;
                                }
                                .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                                    background: #94a3b8;
                                }
                            </style>

                            {{-- Divider --}}
                            <div class="h-px bg-slate-100 mt-10 mb-8"></div>

                            {{-- Tombol Kembali --}}
                            <a href="{{ url('/berita') }}"
                               class="inline-flex items-center bg-brand-700 hover:bg-brand-800 text-white px-6 py-3 rounded-full font-semibold transition shadow-md shadow-brand-700/20 text-sm">
                                <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Daftar Berita
                            </a>
                        </div>
                    </div>

                    {{-- Section Komentar --}}
                    <div class="mt-8 bg-white rounded-3xl shadow-soft p-8 md:p-12">
                        <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center">
                            <span class="w-1.5 h-6 bg-brand-600 rounded-full mr-3 inline-block"></span>
                            Komentar ({{ $comments->count() }})
                        </h3>

                        {{-- Alert Sukses --}}
                        @if(session('success'))
                            <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-2xl flex items-start gap-3 border border-green-200" id="success-alert">
                                <i class="fa-solid fa-circle-check text-lg mt-0.5"></i>
                                <div>
                                    <p class="font-semibold text-sm">{{ session('success') }}</p>
                                </div>
                            </div>
                        @endif

                        {{-- List Komentar --}}
                        @if($comments->isEmpty())
                            <div class="text-center py-10 bg-slate-50 rounded-2xl border border-dashed border-slate-200">
                                <i class="fa-regular fa-comments text-4xl text-slate-300 mb-3 block"></i>
                                <p class="text-slate-500 font-medium text-sm">Belum ada komentar. Jadilah yang pertama memberikan komentar!</p>
                            </div>
                        @else
                            <div class="space-y-6 mb-10 max-h-[500px] overflow-y-auto pr-2 custom-scrollbar">
                                @foreach($comments as $comment)
                                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 hover:bg-slate-100/70 transition">
                                        {{-- Avatar dengan inisial nama --}}
                                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-brand-600 to-brand-800 flex items-center justify-center text-white font-bold text-sm shadow-sm flex-shrink-0">
                                            {{ strtoupper(substr($comment->name, 0, 1)) }}
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="flex items-center justify-between gap-2 mb-1">
                                                <h4 class="font-semibold text-slate-800 text-sm truncate">{{ $comment->name }}</h4>
                                                <span class="text-xs text-slate-400 font-medium">
                                                    {{ $comment->created_at->diffForHumans() }}
                                                </span>
                                            </div>
                                            <p class="text-sm text-slate-600 leading-relaxed whitespace-pre-line">{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        {{-- Divider --}}
                        <div class="h-px bg-slate-100 my-8"></div>

                        {{-- Form Komentar --}}
                        <h4 class="text-lg font-bold text-slate-800 mb-6 flex items-center">
                            <i class="fa-regular fa-comment-dots mr-2.5 text-brand-600"></i>
                            Tinggalkan Komentar
                        </h4>

                        <form action="{{ route('comments.store', $post->slug) }}" method="POST" class="space-y-5">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="name" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Nama <span class="text-red-500">*</span></label>
                                    <input type="text" 
                                           id="name" 
                                           name="name" 
                                           value="{{ old('name') }}"
                                           placeholder="Nama Anda"
                                           class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition text-sm text-slate-800 @error('name') border-red-500 @enderror"
                                           required>
                                    @error('name')
                                        <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Email</label>
                                    <input type="email" 
                                           id="email" 
                                           name="email" 
                                           value="{{ old('email') }}"
                                           placeholder="email@example.com (opsional)"
                                           class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition text-sm text-slate-800 @error('email') border-red-500 @enderror">
                                    <p class="text-[10px] text-slate-400 mt-1 font-medium">Email Anda tidak akan dipublikasikan.</p>
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="comment" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Komentar <span class="text-red-500">*</span></label>
                                <textarea id="comment" 
                                          name="comment" 
                                          rows="4" 
                                          placeholder="Tulis komentar Anda di sini..."
                                          class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition text-sm text-slate-800 @error('comment') border-red-500 @enderror"
                                          required>{{ old('comment') }}</textarea>
                                @error('comment')
                                    <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" 
                                    class="inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-brand-700 hover:bg-brand-800 text-white font-semibold rounded-lg shadow-md shadow-brand-700/10 hover:shadow-brand-800/20 transition text-xs group">
                                Kirim Komentar
                                <i class="fa-solid fa-paper-plane text-[10px] transition-transform group-hover:translate-x-0.5"></i>
                            </button>
                        </form>
                    </div>
                </article>

                {{-- Sidebar --}}
                <aside class="w-full lg:w-80 flex-shrink-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="sticky top-32 space-y-6">

                        {{-- Berita Terkait --}}
                        @if($recentPosts->count() > 0)
                        <div class="bg-white rounded-3xl shadow-soft p-6">
                            <h2 class="text-base font-bold text-slate-800 mb-5 flex items-center">
                                <span class="w-1 h-5 bg-brand-600 rounded-full mr-3 inline-block"></span>
                                Berita Lainnya
                            </h2>
                            <div class="space-y-5">
                                @foreach($recentPosts as $recent)
                                <a href="{{ url('/berita/' . $recent->slug) }}"
                                   class="group flex items-start gap-3 hover:bg-slate-50 rounded-2xl p-2 -mx-2 transition">
                                    <div class="w-20 h-16 rounded-xl overflow-hidden flex-shrink-0 bg-slate-100">
                                        @if($recent->image)
                                            <img src="{{ asset('storage/' . $recent->image) }}"
                                                 alt="{{ $recent->title }}"
                                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center bg-brand-50">
                                                <i class="fa-solid fa-image text-brand-300 text-xl"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-semibold text-slate-700 group-hover:text-brand-700 leading-snug line-clamp-2 transition">
                                            {{ $recent->title }}
                                        </p>
                                        @if($recent->published_at)
                                        <p class="text-xs text-slate-400 mt-1.5 flex items-center">
                                            <i class="fa-regular fa-calendar mr-1.5"></i>
                                            {{ \Carbon\Carbon::parse($recent->published_at)->translatedFormat('d M Y') }}
                                        </p>
                                        @endif
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        {{-- Bagikan --}}
                        <div class="bg-white rounded-3xl shadow-soft p-6">
                            <h2 class="text-base font-bold text-slate-800 mb-4 flex items-center">
                                <span class="w-1 h-5 bg-brand-600 rounded-full mr-3 inline-block"></span>
                                Bagikan Berita
                            </h2>
                            <div class="flex flex-wrap gap-3">
                                <a href="https://wa.me/?text={{ urlencode($post->title . ' - ' . url('/berita/' . $post->slug)) }}"
                                   target="_blank"
                                   class="flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-4 py-2 rounded-full transition">
                                    <i class="fa-brands fa-whatsapp"></i> WhatsApp
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url('/berita/' . $post->slug)) }}"
                                   target="_blank"
                                   class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2 rounded-full transition">
                                    <i class="fa-brands fa-facebook-f"></i> Facebook
                                </a>
                                <button onclick="navigator.clipboard.writeText('{{ url('/berita/' . $post->slug) }}'); this.innerHTML='<i class=\'fa-solid fa-check\'></i> Tersalin!'; setTimeout(() => this.innerHTML='<i class=\'fa-solid fa-link\'></i> Salin Link', 2000)"
                                        class="flex items-center gap-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-semibold px-4 py-2 rounded-full transition">
                                    <i class="fa-solid fa-link"></i> Salin Link
                                </button>
                            </div>
                        </div>

                    </div>
                </aside>

            </div>
        </div>
    </section>
@endsection
