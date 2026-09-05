@extends('master')

@section('seo')
    <title>{{ $title }} — Kanwil Ditjenpas Banten</title>
@endsection

@section('content')
<style>
    /* Sembunyikan footer dan nonaktifkan scroll halaman utama agar hanya PDF yang bisa di-scroll */
    footer { display: none !important; }
    body { overflow: hidden !important; }
    /* Hilangkan margin/padding ekstra dari main */
    main { padding-bottom: 0 !important; margin-bottom: 0 !important; }
</style>

<div class="w-full h-[calc(100vh-80px)] md:h-[calc(100vh-114px)] -mb-8">
    <object data="{{ $pdfUrl }}" type="application/pdf" class="w-full h-full border-0 block">
        <iframe src="{{ $pdfUrl }}" class="w-full h-full border-0 block">
            <p>Browser Anda tidak mendukung pratinjau PDF. <a href="{{ $pdfUrl }}" class="text-brand-600 underline">Unduh file PDF di sini</a>.</p>
        </iframe>
    </object>
</div>
@endsection
