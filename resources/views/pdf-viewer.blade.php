@extends('master')

@section('seo')
    <title>{{ $title }} — Kanwil Ditjenpas Banten</title>
@endsection

@section('content')
<div class="w-full h-[calc(100vh-80px)] md:h-[calc(100vh-114px)]">
    <object data="{{ $pdfUrl }}" type="application/pdf" class="w-full h-full border-0">
        <iframe src="{{ $pdfUrl }}" class="w-full h-full border-0">
            <p>Browser Anda tidak mendukung pratinjau PDF. <a href="{{ $pdfUrl }}" class="text-brand-600 underline">Unduh file PDF di sini</a>.</p>
        </iframe>
    </object>
</div>
@endsection
