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
    }
}
