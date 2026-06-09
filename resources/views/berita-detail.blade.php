@extends('master')

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
