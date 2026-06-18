<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::where('email', 'test@example.com')->doesntExist()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        // Seed default Kanwil profile if table is empty
        \App\Models\Kanwil::firstOrCreate(
            ['id' => 1],
            [
                'vision' => 'Terwujudnya Pemasyarakatan yang Profesional dalam Mendukung Penegakan Hukum Berbasis Hak Asasi Manusia yang Berkeadilan untuk Mewujudkan Indonesia Maju yang Berdaulat, Mandiri dan Berkepribadian, berlandaskan Gotong Royong',
                'mission' => '<ol><li>Mendukung Penegakan Hukum di Bidang Penyelenggaraan Pemasyarakatan yang Bebas dari Korupsi, Bermartabat dan Terpercaya</li><li>Ikut Serta dalam Menjaga Stabilitas Kemanan Melalui Peran Pemasyarakatan</li><li>Mewujudkan Penyelenggaraan Pemasyarakatan yang Profesional dalam Mendukung Penegakan Hukum Berbasis Hak Asasi Manusia yang Berkeadilan</li><li>Melaksanakan Tata Laksana Pemerintahan yang Baik Melalui Reformasi Birokrasi</li></ol>',
                'description' => 'Kantor Wilayah Kementerian Hukum dan HAM Banten',
                'maskot_kang_description' => 'Kang merupakan maskot resmi Kantor Wilayah Direktorat Jenderal Pemasyarakatan (Ditjenpas) Banten. Visualisasinya mengadopsi bentuk bidak catur yang melambangkan strategi dan ketetapan langkah, serta dipadukan dengan busana adat Baduy sebagai representasi penghormatan terhadap nilai kearifan lokal Provinsi Banten.',
                'maskot_nong_description' => 'Nong merupakan pasangan maskot resmi Kantor Wilayah Direktorat Jenderal Pemasyarakatan (Ditjenpas) Banten. Direpresentasikan melalui figur bidak catur yang melambangkan kecerdasan strategi, Nong tampil anggun dengan balutan kerudung bermotif batik Baduy sebagai perwujudan martabat dan keanggunan budaya lokal di lingkungan pemasyarakatan.',
            ]
        );

        // Seed default Survei results if table is empty
        \App\Models\Survei::firstOrCreate(
            ['id' => 1],
            [
                'SPKP1' => 3.98,
                'SPKP2' => 99.47,
                'SPAK1' => 3.98,
                'SPAK2' => 99.42,
            ]
        );

        // Seed default Posts if table is empty
        \App\Models\Post::firstOrCreate(
            ['slug' => 'siaran-pers'],
            [
                'title' => 'Siaran Pers',
                'content' => 'Materi siaran pers Kantor Wilayah Kementerian Hukum dan HAM Banten.',
                'image' => null,
                'published_at' => '2026-02-26 00:00:00',
            ]
        );

        \App\Models\Post::firstOrCreate(
            ['slug' => 'persembahyangan-purnama'],
            [
                'title' => 'Persembahyangan Purnama, Momentum Penguatan Nilai Spiritual',
                'content' => 'Kegiatan persembahyangan bersama dalam rangka meningkatkan spiritualitas jajaran pemasyarakatan.',
                'image' => null,
                'published_at' => '2026-03-03 00:00:00',
            ]
        );

        \App\Models\Post::firstOrCreate(
            ['slug' => 'perkuat-layanan-kesehatan'],
            [
                'title' => 'Perkuat Layanan Kesehatan, Tinjau Akreditasi Klinik Rutan',
                'content' => 'Peninjauan langsung proses akreditasi klinik guna memastikan pelayanan kesehatan WBP berjalan optimal.',
                'image' => null,
                'published_at' => '2026-02-28 00:00:00',
            ]
        );

        // Seed default leaders if table is empty
        \App\Models\Leader::firstOrCreate(
            ['name' => 'Mumammad Ali Syeh Banna,Bc.I.P.,S.Sos.,M.Si'],
            [
                'position' => 'Kepala Kantor Wilayah Ditjenpas Banten',
                'image' => 'kakanwil.png',
                'order' => 1,
            ]
        );

        \App\Models\Leader::firstOrCreate(
            ['name' => 'Mumamad Khapi, A.Md.I.P.,S.Sos.,M.M'],
            [
                'position' => "Kepala Bagian\nTata Usaha dan Umum",
                'image' => 'kabagtum.png',
                'order' => 2,
            ]
        );

        \App\Models\Leader::firstOrCreate(
            ['name' => 'Ahmad Hardi, Bc.I.P.,S.H.,M.M'],
            [
                'position' => "Kepala Bidang\nPelayanan dan Pembinaan",
                'image' => 'kabidPK.png',
                'order' => 3,
            ]
        );

        \App\Models\Leader::firstOrCreate(
            ['name' => 'Ade Kusmanto, A.Md.IP.,S.H.,M.H'],
            [
                'position' => "Kepala Bidang\nPembimbing Kemasyarakatan",
                'image' => 'kabidPKP.png',
                'order' => 4,
            ]
        );

        // Seed default Portal Apps if table is empty
        if (\App\Models\PortalApp::count() === 0) {
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
                \App\Models\PortalApp::create($appData);
            }
        }

        // Seed default Quick Access settings if empty
        if (\App\Models\Setting::where('key', 'quick_access')->doesntExist()) {
            $quickAccessData = [
                ["title" => "Profil Instansi", "url" => "/profil", "icon" => "fa-solid fa-building-user", "category" => "profil"],
                ["title" => "Visi & Misi", "url" => "/visi", "icon" => "fa-solid fa-building-user", "category" => "profil"],
                ["title" => "Maskot Si Benteng", "url" => "/maskot", "icon" => "fa-solid fa-building-user", "category" => "profil"],
                ["title" => "Tentang Aplikasi", "url" => "/tentang", "icon" => "fa-solid fa-building-user", "category" => "profil"],
                ["title" => "STARPAS Banten", "url" => "https://sites.google.com/view/starpasbanten/", "icon" => "fa-solid fa-handshake-angle", "category" => "layanan"],
                ["title" => "Layanan Pengaduan", "url" => "/LayananPengaduan", "icon" => "fa-solid fa-handshake-angle", "category" => "layanan"],
                ["title" => "Layanan Perizinan", "url" => "/LayananPerizinan", "icon" => "fa-solid fa-handshake-angle", "category" => "layanan"],
                ["title" => "Layanan Informasi", "url" => "/LayananInformasi", "icon" => "fa-solid fa-handshake-angle", "category" => "layanan"],
                ["title" => "Survei Kepuasan", "url" => "/survei", "icon" => "fa-solid fa-circle-info", "category" => "informasi"],
                ["title" => "Berita & Kegiatan", "url" => "/berita", "icon" => "fa-solid fa-circle-info", "category" => "informasi"],
                ["title" => "Profil Aplikasi", "url" => "/tentang", "icon" => "fa-solid fa-circle-info", "category" => "informasi"],
                ["title" => "Sultan Banten", "url" => "https://sultan.ditjenpasbanten.com/dashboard.php", "icon" => "fa-solid fa-chart-line", "category" => "data"],
                ["title" => "Peta Lokasi UPT", "url" => "#map", "icon" => "fa-solid fa-chart-line", "category" => "data"],
                ["title" => "Statistik Hunian", "url" => "#statistik-upt", "icon" => "fa-solid fa-chart-line", "category" => "data"],
                ["title" => "Berita Utama", "url" => "/berita", "icon" => "fa-solid fa-newspaper", "category" => "berita"],
                ["title" => "Galeri Kegiatan", "url" => "/berita", "icon" => "fa-solid fa-newspaper", "category" => "berita"],
                ["title" => "Gateway Portal Aplikasi", "url" => "/portal", "icon" => "fa-solid fa-laptop-code", "category" => "internal"],
                ["title" => "SIPAS Banten", "url" => "https://sipas.ditjenpasbanten.com/", "icon" => "fa-solid fa-laptop-code", "category" => "internal"],
                ["title" => "Login Admin Portal", "url" => "/login", "icon" => "fa-solid fa-laptop-code", "category" => "internal"],
                ["title" => "Form Pengaduan", "url" => "/formpengaduan", "icon" => "fa-solid fa-comments", "category" => "kontak"],
                ["title" => "WhatsApp Chat", "url" => "https://wa.me/6282266662055", "icon" => "fa-solid fa-comments", "category" => "kontak"],
                ["title" => "Alamat & Lokasi", "url" => "#kontakkanwil", "icon" => "fa-solid fa-comments", "category" => "kontak"],
                ["title" => "Ditjen Pemasyarakatan", "url" => "https://ditjenpas.go.id", "icon" => "fa-solid fa-link", "category" => "tautan"],
                ["title" => "Kemenkumham RI", "url" => "https://kemenkumham.go.id", "icon" => "fa-solid fa-link", "category" => "tautan"],
                ["title" => "Kanwil Kemenkumham Banten", "url" => "https://banten.kemenkumham.go.id", "icon" => "fa-solid fa-link", "category" => "tautan"],
                ["title" => "Portal E-Lapor", "url" => "https://www.lapor.go.id", "icon" => "fa-solid fa-link", "category" => "tautan"]
            ];
            \App\Models\Setting::create([
                'key' => 'quick_access',
                'value' => json_encode($quickAccessData)
            ]);
        }
    }
}

