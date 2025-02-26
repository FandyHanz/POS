<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'KTGR-001',
                'kategori_nama' => 'Elektronik',
                'created_at' => '2023-10-27 10:00:00',
                'updated_at' => '2023-10-27 10:00:00'
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'KTGR-002',
                'kategori_nama' => 'Pakaian',
                'created_at' => '2023-10-27 10:05:00',
                'updated_at' => '2023-10-27 10:05:00'
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'KTGR-003',
                'kategori_nama' => 'Makanan dan Minuman',
                'created_at' => '2023-10-27 10:10:00',
                'updated_at' => '2023-10-27 10:10:00'
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'KTGR-004',
                'kategori_nama' => 'Peralatan Rumah',
                'created_at' => '2023-10-27 10:15:00',
                'updated_at' => '2023-10-27 10:15:00'
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'KTGR-005',
                'kategori_nama' => 'Buku dan Alat Tulis',
                'created_at' => '2023-10-27 10:20:00',
                'updated_at' => '2023-10-27 10:20:00'
            ]
        ];
        DB::table('m_kategori')->insert($data);
    }
}
