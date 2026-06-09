@extends('master')

@section('content')
    {{-- Hero Sub --}}
    <section class="hero-sub">
        <div class="container hero-content-sub">
            <h1>BERITA SEPUTAR KANWIL DITJENPAS BANTEN</h1>
            <a href="{{ url('/') }}">Beranda</a> &gt;
            <a href="{{ url('/berita') }}">Berita</a> &gt;
            <span class="text-white/70">{{ Str::limit($post->title, 60) }}</span>
        </div>
    </section>

    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-10">

                {{-- ===== MAIN ARTICLE COLUMN ===== --}}
                <article class="lg:w-2/3 bg-white rounded-3xl shadow-lg overflow-hidden" data-aos="fade-up">

                    {{-- Featured Image --}}
                    <div class="relative w-full aspect-video bg-slate-100 overflow-hidden">
                        @if($post->image)
                            <img
                                src="{{ asset('storage/' . $post->image) }}"
                                alt="{{ $post->title }}"
                                class="w-full h-full object-cover"
                            >
                        @else
                            <div class="absolute inset-0 flex flex-col items-center justify-center bg-gradient-to-br from-brand-700 to-brand-900">
                                <i class="fa-solid fa-newspaper text-6xl text-white/20 mb-4"></i>
                                <p class="text-white/40 text-sm font-medium">Tidak ada gambar</p>
                            </div>
                        @endif
                        {{-- Category badge --}}
                        <div class="absolute top-5 left-5">
                            <span class="bg-white/90 backdrop-blur-sm text-brand-700 text-[11px] font-bold px-4 py-1.5 rounded-full uppercase tracking-wider shadow-md">
                                Kegiatan
                            </span>
                        </div>
                    </div>

                    {{-- Article Body --}}
                    <div class="p-8 md:p-12">

                        {{-- Meta --}}
                        <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400 font-medium mb-5">
                            <span class="flex items-center gap-1.5">
                                <i class="fa-regular fa-calendar text-brand-500"></i>
                                {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->locale('id')->isoFormat('D MMMM YYYY') : 'Tanggal tidak tersedia' }}
                            </span>
                            <span class="h-3 w-px bg-slate-200"></span>
                            <span class="flex items-center gap-1.5">
                                <i class="fa-solid fa-tag text-brand-500"></i>
                                Kanwil Ditjenpas Banten
                            </span>
                        </div>

                        {{-- Title --}}
                        <h1 class="text-2xl md:text-3xl font-extrabold text-slate-900 leading-tight mb-8 tracking-tight">
                            {{ $post->title }}
                        </h1>

                        {{-- Divider --}}
                        <div class="w-16 h-1.5 bg-brand-600 rounded-full mb-8"></div>

                        {{-- Content --}}
                        <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed text-[15px]">
                            @if($post->content)
                                {!! nl2br(e($post->content)) !!}
                            @else
                                <p class="text-slate-400 italic">Konten berita belum tersedia.</p>
                            @endif
                        </div>

                        {{-- Share & Back --}}
                        <div class="mt-12 pt-8 border-t border-slate-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                            <a href="{{ url('/berita') }}"
                               class="inline-flex items-center gap-2 text-brand-700 font-semibold hover:text-brand-900 transition group">
                                <i class="fa-solid fa-arrow-left text-sm group-hover:-translate-x-1 transition-transform"></i>
                                Kembali ke Daftar Berita
                            </a>
                            <div class="flex items-center gap-2">
                                <span class="text-xs text-slate-400 font-medium mr-1">Bagikan:</span>
                                <a href="https://wa.me/?text={{ urlencode($post->title . ' - ' . url()->current()) }}"
                                   target="_blank"
                                   class="w-9 h-9 rounded-full bg-green-500 hover:bg-green-600 text-white flex items-center justify-center transition shadow-sm text-sm">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                   target="_blank"
                                   class="w-9 h-9 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition shadow-sm text-sm">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(url()->current()) }}"
                                   target="_blank"
                                   class="w-9 h-9 rounded-full bg-slate-800 hover:bg-slate-900 text-white flex items-center justify-center transition shadow-sm text-sm">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                {{-- ===== SIDEBAR ===== --}}
                <aside class="lg:w-1/3 space-y-6" data-aos="fade-up" data-aos-delay="100">

                    {{-- Berita Terkini Widget --}}
                    <div class="bg-white rounded-3xl shadow-lg p-6">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-6 bg-brand-600 rounded-full"></div>
                            <h2 class="text-base font-extrabold text-slate-800 uppercase tracking-wide">Berita Terkini</h2>
                        </div>

                        @if($recentPosts->isEmpty())
                            <p class="text-slate-400 text-sm italic">Belum ada berita lainnya.</p>
                        @else
                            <div class="space-y-5">
                                @foreach($recentPosts as $recent)
                                    <a href="{{ route('berita.show', $recent->slug) }}"
                                       class="flex gap-4 group">
                                        <div class="flex-shrink-0 w-20 h-20 rounded-2xl overflow-hidden bg-slate-100 relative">
                                            @if($recent->image)
                                                <img src="{{ asset('storage/' . $recent->image) }}"
                                                     alt="{{ $recent->title }}"
                                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                            @else
                                                <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-brand-700 to-brand-900">
                                                    <i class="fa-solid fa-newspaper text-white/30 text-xl"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-[11px] text-slate-400 mb-1 flex items-center gap-1">
                                                <i class="fa-regular fa-calendar text-brand-500"></i>
                                                {{ $recent->published_at ? \Carbon\Carbon::parse($recent->published_at)->locale('id')->isoFormat('D MMM YYYY') : '-' }}
                                            </p>
                                            <h3 class="text-sm font-semibold text-slate-700 group-hover:text-brand-700 transition leading-snug line-clamp-3">
                                                {{ $recent->title }}
                                            </h3>
                                        </div>
                                    </a>
                                    @if(!$loop->last)
                                        <div class="border-t border-slate-100"></div>
                                    @endif
                                @endforeach
                            </div>
                        @endif

                        <a href="{{ url('/berita') }}"
                           class="mt-6 flex items-center justify-center gap-2 w-full py-3 rounded-xl bg-brand-50 hover:bg-brand-100 text-brand-700 font-semibold text-sm transition">
                            Lihat Semua Berita
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>

                    {{-- Contact Widget --}}
                    <div class="bg-gradient-to-br from-brand-700 to-brand-900 rounded-3xl shadow-lg p-6 text-white">
                        <h2 class="font-bold text-lg mb-2">Ada Pertanyaan?</h2>
                        <p class="text-white/70 text-sm mb-5 leading-relaxed">
                            Hubungi kami melalui WhatsApp atau media sosial untuk informasi lebih lanjut.
                        </p>
                        <a href="https://wa.me/6282266662055" target="_blank"
                           class="inline-flex items-center gap-2 bg-white text-brand-800 font-bold px-5 py-2.5 rounded-full text-sm hover:bg-brand-50 transition shadow-md">
                            <i class="fa-brands fa-whatsapp text-green-600 text-base"></i>
                            Chat via WhatsApp
                        </a>
                    </div>

                </aside>
            </div>
        </div>
    </section>
@endsection
