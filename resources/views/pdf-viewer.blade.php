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

<div style="width: 100vw; height: calc(100vh - 114px); background-color: #f1f5f9;">
    <embed src="{{ $pdfUrl }}" type="application/pdf" width="100%" height="100%" />
</div>
@endsection
