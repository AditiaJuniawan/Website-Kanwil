@extends('master')

@section('seo')
    <title>{{ $title }} — Kanwil Ditjenpas Banten</title>
@endsection

@section('content')
<style>
    footer, #back-to-top, .fa-whatsapp.text-3xl { display: none !important; }
    div[style*="position: fixed; bottom: 2rem"] { display: none !important; }
    body { overflow: hidden !important; margin: 0; padding: 0; }
</style>

<div style="width: 100vw; height: calc(100vh - 114px); background-color: #f1f5f9; display: flex; flex-direction: column; align-items: center; justify-content: center;">
    <object data="{{ $pdfUrl }}" type="application/pdf" width="100%" height="100%">
        <!-- Fallback untuk perangkat mobile yang tidak mendukung preview PDF bawaan -->
        <iframe src="https://docs.google.com/gview?url={{ urlencode($pdfUrl) }}&embedded=true" width="100%" height="100%" frameborder="0">
            <p>Browser Anda tidak mendukung pratinjau PDF. <a href="{{ $pdfUrl }}" target="_blank" style="color: #0369a1; text-decoration: underline;">Unduh PDF</a></p>
        </iframe>
    </object>
</div>
@endsection
