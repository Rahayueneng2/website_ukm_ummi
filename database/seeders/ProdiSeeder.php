<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prodis')->insert([
            ['prodi_name' => 'Teknik Informatika', 'created_at' => now()],
            ['prodi_name' => 'Teknik Sipil', 'created_at' => now()],
            ['prodi_name' => 'Kimia', 'created_at' => now()],
            ['prodi_name' => 'Pendidikan Teknologi Informasi', 'created_at' => now()],
            ['prodi_name' => 'Pendidikan Bahasa Indonesia', 'created_at' => now()],
            ['prodi_name' => 'Pendidikan Biologi', 'created_at' => now()],
            ['prodi_name' => 'Pendidikan Guru PAUD', 'created_at' => now()],
            ['prodi_name' => 'Pendidikan Guru SD', 'created_at' => now()],
            ['prodi_name' => 'PJKR', 'created_at' => now()],
            ['prodi_name' => 'Pendidikan Matematika', 'created_at' => now()],
            ['prodi_name' => 'Akuntansi', 'created_at' => now()],
            ['prodi_name' => 'Manajemen Ritel', 'created_at' => now()],
            ['prodi_name' => 'D3 Perpajakan', 'created_at' => now()],
            ['prodi_name' => 'Administrasi Bisnis', 'created_at' => now()],
            ['prodi_name' => 'Administrasi Publik', 'created_at' => now()],
            ['prodi_name' => 'Hubungan Masyarakat', 'created_at' => now()],
            ['prodi_name' => 'Sastra Inggris', 'created_at' => now()],
            ['prodi_name' => 'Magister Ilmu Administrasi', 'created_at' => now()],
            ['prodi_name' => 'Agribisnis', 'created_at' => now()],
            ['prodi_name' => 'Akuakultur', 'created_at' => now()],
            ['prodi_name' => 'Ilmu Hukum', 'created_at' => now()],
            ['prodi_name' => 'D3 Keperawatan', 'created_at' => now()],
            ['prodi_name' => 'S1 Keperawatan dan Profesi Ners', 'created_at' => now()],
        ]);
    }
}
