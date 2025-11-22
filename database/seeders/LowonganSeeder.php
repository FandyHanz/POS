<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['lowongan_id' => 1, 'dept_id' => 1, 'posisi' => 'Staff Akuntansi', 'quota' => 12, 'Deskripsi' => 'Mengelola Jurnal Harian'],
            ['lowongan_id' => 2, 'dept_id' => 2, 'posisi' => 'Bussines Development Officer', 'quota' => 10, 'Deskripsi' => 'Riset dan membuka peluang baru'],
            ['lowongan_id' => 3, 'dept_id' => 3, 'posisi' => 'Software Engineer', 'quota' => 3, 'Deskripsi' => 'Mengembangkan fitur berbasis laravel']
        ];

        DB::table('m_lowongan')->insert($data);
    }
}
