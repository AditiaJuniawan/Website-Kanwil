@extends('master')

@section('seo')
    <title>{{ $title }} — Kanwil Ditjenpas Banten</title>
@endsection

@section('content')
<style>
    footer, #back-to-top, .fa-whatsapp.text-3xl { display: none !important; }
    div[style*="position: fixed; bottom: 2rem"] { display: none !important; }
    body { overflow: hidden !important; margin: 0; padding: 0; background-color: #f1f5f9; }

    .pdf-desktop { display: block; width: 100vw; height: calc(100vh - 114px); }
    .pdf-mobile { display: none; }

    @media (max-width: 768px) {
        .pdf-desktop { display: none; }
        .pdf-mobile { 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            width: 100vw; 
            height: calc(100vh - 114px); 
            text-align: center;
            padding: 20px;
        }
    }
</style>

<div class="pdf-desktop">
    <object data="{{ $pdfUrl }}" type="application/pdf" width="100%" height="100%">
        <p>Browser Anda tidak mendukung pratinjau PDF.</p>
    </object>
</div>

<div class="pdf-mobile">
    <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); max-width: 90%;">
        <div style="font-size: 48px; margin-bottom: 16px;">📄</div>
        <h2 style="font-size: 20px; font-weight: bold; color: #1e293b; margin-bottom: 10px;">Dokumen PDF</h2>
        <p style="font-size: 14px; color: #64748b; margin-bottom: 24px;">Pratinjau langsung dinonaktifkan di perangkat mobile agar lebih ringan dan cepat.</p>
        <a href="{{ $pdfUrl }}" target="_blank" style="display: inline-block; background-color: #0369a1; color: white; padding: 12px 24px; border-radius: 9999px; font-weight: 600; text-decoration: none; font-size: 15px;">Buka / Unduh Dokumen</a>
    </div>
</div>
@endsection
