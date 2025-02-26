<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1, // Admin
                'pembeli' => 'Budi Santoso',
                'penjualan_kode' => 'PJL-001',
                'penjualan_tanggal' => '2023-10-27 16:00:00',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2, // Manager
                'pembeli' => 'Siti Aminah',
                'penjualan_kode' => 'PJL-002',
                'penjualan_tanggal' => '2023-10-27 16:10:00',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3, // Staff
                'pembeli' => 'Joko Widodo',
                'penjualan_kode' => 'PJL-003',
                'penjualan_tanggal' => '2023-10-27 16:20:00',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Dewi Lestari',
                'penjualan_kode' => 'PJL-004',
                'penjualan_tanggal' => '2023-10-27 16:30:00',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Agus Salim',
                'penjualan_kode' => 'PJL-005',
                'penjualan_tanggal' => '2023-10-27 16:40:00',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Rina Wati',
                'penjualan_kode' => 'PJL-006',
                'penjualan_tanggal' => '2023-10-27 16:50:00',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Andi Pratama',
                'penjualan_kode' => 'PJL-007',
                'penjualan_tanggal' => '2023-10-27 17:00:00',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Dina Sari',
                'penjualan_kode' => 'PJL-008',
                'penjualan_tanggal' => '2023-10-27 17:10:00',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Eko Susanto',
                'penjualan_kode' => 'PJL-009',
                'penjualan_tanggal' => '2023-10-27 17:20:00',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Fatimah Zahra',
                'penjualan_kode' => 'PJL-010',
                'penjualan_tanggal' => '2023-10-27 17:30:00',
            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
