<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\PortalApp;

$apps = [
    [
        'name' => 'Sultan Banten',
        'description' => 'Sistem Update Laporan Terintegrasi Aman dan Nyaman. Portal visualisasi data hunian, kapasitas, dan status overkapasitas seluruh UPT Banten secara real-time.',
        'icon' => 'fa-solid fa-chart-line',
        'url' => 'https://sultan.ditjenpasbanten.com/dashboard.php',
        'categories' => 'monitoring,dashboard',
        'order' => 1,
    ],
    [
        'name' => 'SIPAS Banten',
        'description' => 'Sistem Informasi Pemasyarakatan Banten. Aplikasi internal untuk manajemen data administrasi kantor wilayah dan unit pelaksana teknis se-Banten.',
        'icon' => 'fa-solid fa-folder-open',
        'url' => 'https://sipas.ditjenpasbanten.com/',
        'categories' => 'administrasi',
        'order' => 2,
    ],
    [
        'name' => 'STARPAS Banten',
        'description' => 'Standar Pelayanan Pemasyarakatan Banten. Pusat panduan standar operasional pelayanan publik untuk memudahkan masyarakat dalam pengurusan layanan pemasyarakatan.',
        'icon' => 'fa-solid fa-shield-halved',
        'url' => 'https://sites.google.com/view/starpasbanten/',
        'categories' => 'pelayanan,layanan',
        'order' => 3,
    ],
    [
        'name' => 'Layanan Izin Penelitian',
        'description' => 'Aplikasi permohonan izin penelitian mahasiswa/peneliti di lingkungan Kantor Wilayah dan UPT Pemasyarakatan Banten secara daring.',
        'icon' => 'fa-solid fa-book-open-reader',
        'url' => url('/LayananPerizinan'),
        'categories' => 'pelayanan',
        'order' => 4,
    ],
    [
        'name' => 'Layanan Pengaduan',
        'description' => 'Formulir pengaduan masyarakat atas dugaan pelanggaran disiplin, kode etik, pungli, gratifikasi, atau penurunan integritas petugas di wilayah Banten.',
        'icon' => 'fa-solid fa-bullhorn',
        'url' => url('/LayananPengaduan'),
        'categories' => 'pelayanan,layanan',
        'order' => 5,
    ],
    [
        'name' => 'Permohonan Informasi',
        'description' => 'Layanan Pejabat Pengelola Informasi dan Dokumentasi (PPID). Permohonan berkas, dokumen, dan data publik sesuai UU Keterbukaan Informasi Publik.',
        'icon' => 'fa-solid fa-circle-info',
        'url' => url('/LayananInformasi'),
        'categories' => 'pelayanan',
        'order' => 6,
    ],
    [
        'name' => 'Survei Kepuasan (IKM/IPK)',
        'description' => 'Sistem evaluasi kepuasan masyarakat terhadap kualitas pelayanan (IKM) serta persepsi korupsi (IPK) di lingkungan unit kerja Pemasyarakatan Banten.',
        'icon' => 'fa-solid fa-square-poll-vertical',
        'url' => url('/survei'),
        'categories' => 'pendukung',
        'order' => 7,
    ],
    [
        'name' => 'WhatsApp Aduan Kanwil',
        'description' => 'Kanal interaksi interaktif dan pelaporan langsung berbasis WhatsApp Chat. Respons cepat dari pusat pelayanan integritas Kantor Wilayah Banten.',
        'icon' => 'fa-brands fa-whatsapp text-2xl',
        'url' => 'https://wa.me/6282266662055',
        'categories' => 'layanan',
        'order' => 8,
    ],
    [
        'name' => 'SP4N-LAPOR!',
        'description' => 'Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional. Layanan aspirasi dan pengaduan rakyat online yang terintegrasi secara nasional.',
        'icon' => 'fa-solid fa-landmark',
        'url' => 'https://www.lapor.go.id',
        'categories' => 'pendukung',
        'order' => 9,
    ],
    [
        'name' => 'Portal Kemenkumham RI',
        'description' => 'Portal resmi Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia. Akses informasi kebijakan hukum nasional, keimigrasian, AHU, dsb.',
        'icon' => 'fa-solid fa-globe',
        'url' => 'https://kemenkumham.go.id',
        'categories' => 'layanan',
        'order' => 10,
    ],
    [
        'name' => 'Portal Ditjenpas',
        'description' => 'Portal resmi Direktorat Jenderal Pemasyarakatan Kemenkumham RI. Informasi pembinaan narapidana dan kebijakan pemasyarakatan terpusat.',
        'icon' => 'fa-solid fa-building-columns',
        'url' => 'https://ditjenpas.go.id',
        'categories' => 'layanan',
        'order' => 11,
    ],
    [
        'name' => 'Portal Kanwil Banten',
        'description' => 'Portal informasi Kantor Wilayah Kementerian Hukum dan HAM Provinsi Banten. Pusat integrasi hukum, keimigrasian, dan pemasyarakatan wilayah Banten.',
        'icon' => 'fa-solid fa-building',
        'url' => 'https://banten.kemenkumham.go.id',
        'categories' => 'layanan',
        'order' => 12,
    ]
];

foreach ($apps as $appData) {
    PortalApp::firstOrCreate(['name' => $appData['name']], $appData);
}

echo "Successfully seeded " . count($apps) . " portal apps.\n";
