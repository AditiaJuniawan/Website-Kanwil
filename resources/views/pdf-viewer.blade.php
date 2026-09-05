@extends('master')

@section('seo')
    <title>{{ $title }} — Kanwil Ditjenpas Banten</title>
@endsection

@section('content')
<style>
    /* Sembunyikan footer dan tombol melayang */
    footer, #back-to-top, .fa-whatsapp.text-3xl { display: none !important; }
    /* Nonaktifkan scroll halaman utama */
    body { overflow: hidden !important; }
    /* Hilangkan margin/padding ekstra */
    main { padding-bottom: 0 !important; margin-bottom: 0 !important; }
    /* Sembunyikan div floating buttons sepenuhnya jika perlu */
    div[style*="position: fixed; bottom: 2rem"] { display: none !important; }
</style>

<div class="w-full h-[calc(100vh-80px)] md:h-[calc(100vh-114px)] bg-slate-100 relative">
    <iframe src="{{ $pdfUrl }}#toolbar=0&navpanes=0&scrollbar=0" class="absolute inset-0 w-full h-full border-0" title="PDF Viewer"></iframe>
</div>
@endsection
