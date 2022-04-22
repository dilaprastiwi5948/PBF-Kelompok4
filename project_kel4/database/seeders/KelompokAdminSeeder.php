<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KelompokAdminSeeder extends Seeder
{
    public function run()
    {
    DB::table('kelompokadmin')->insert([
        [
            'nama' => 'Mia',
            'status' => 'sudah',
            'bulan' => 'Mei 2022',
        ],
        [
            'nama' => 'Amir',
            'status' => 'sudah',
            'bulan' => 'Januari 2022',
            ]
            
        ]);
    }
}
