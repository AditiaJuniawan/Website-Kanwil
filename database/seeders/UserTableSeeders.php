<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */ 
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'adit',
            'email' => 'adit@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
