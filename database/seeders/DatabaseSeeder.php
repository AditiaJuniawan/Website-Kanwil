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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

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
