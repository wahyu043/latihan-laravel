<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            'nama' => 'Andi Saputra',
            'nis' => 101,
            'tgl_lahir' => '2003-12-22'
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Budi Cahya',
            'nis' => 102,
            'tgl_lahir' => '2004-01-30'
        ]);
    }
}
