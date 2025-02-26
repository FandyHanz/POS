<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Detail Penjualan 1 (PJL-001)
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 10000000, 'jumlah' => 1],
            ['penjualan_id' => 1, 'barang_id' => 2, 'harga' => 250000, 'jumlah' => 2],
            ['penjualan_id' => 1, 'barang_id' => 3, 'harga' => 500000, 'jumlah' => 1],
            // Detail Penjualan 2 (PJL-002)
            ['penjualan_id' => 2, 'barang_id' => 4, 'harga' => 2000000, 'jumlah' => 1],
            ['penjualan_id' => 2, 'barang_id' => 5, 'harga' => 300000, 'jumlah' => 2],
            ['penjualan_id' => 2, 'barang_id' => 6, 'harga' => 100000, 'jumlah' => 3],
            // Detail Penjualan 3 (PJL-003)
            ['penjualan_id' => 3, 'barang_id' => 7, 'harga' => 250000, 'jumlah' => 1],
            ['penjualan_id' => 3, 'barang_id' => 8, 'harga' => 300000, 'jumlah' => 1],
            ['penjualan_id' => 3, 'barang_id' => 9, 'harga' => 400000, 'jumlah' => 2],
            // Detail Penjualan 4 (PJL-004)
            ['penjualan_id' => 4, 'barang_id' => 10, 'harga' => 50000, 'jumlah' => 3],
            ['penjualan_id' => 4, 'barang_id' => 11, 'harga' => 15000, 'jumlah' => 5],
            ['penjualan_id' => 4, 'barang_id' => 12, 'harga' => 20000, 'jumlah' => 2],
            // Detail Penjualan 5 (PJL-005)
            ['penjualan_id' => 5, 'barang_id' => 13, 'harga' => 12000, 'jumlah' => 3],
            ['penjualan_id' => 5, 'barang_id' => 14, 'harga' => 30000, 'jumlah' => 1],
            ['penjualan_id' => 5, 'barang_id' => 15, 'harga' => 3000, 'jumlah' => 5],
            // Detail Penjualan 6 (PJL-006)
            ['penjualan_id' => 6, 'barang_id' => 1, 'harga' => 10000000, 'jumlah' => 1],
            ['penjualan_id' => 6, 'barang_id' => 5, 'harga' => 300000, 'jumlah' => 2],
            ['penjualan_id' => 6, 'barang_id' => 10, 'harga' => 50000, 'jumlah' => 3],
            // Detail Penjualan 7 (PJL-007)
            ['penjualan_id' => 7, 'barang_id' => 15, 'harga' => 3000, 'jumlah' => 5],
            ['penjualan_id' => 7, 'barang_id' => 4, 'harga' => 2000000, 'jumlah' => 1],
            ['penjualan_id' => 7, 'barang_id' => 9, 'harga' => 400000, 'jumlah' => 2],
            // Detail Penjualan 8 (PJL-008)
            ['penjualan_id' => 8, 'barang_id' => 8, 'harga' => 300000, 'jumlah' => 1],
            ['penjualan_id' => 8, 'barang_id' => 13, 'harga' => 12000, 'jumlah' => 3],
            ['penjualan_id' => 8, 'barang_id' => 2, 'harga' => 250000, 'jumlah' => 2],
            // Detail Penjualan 9 (PJL-009)
            ['penjualan_id' => 9, 'barang_id' => 3, 'harga' => 500000, 'jumlah' => 1],
            ['penjualan_id' => 9, 'barang_id' => 7, 'harga' => 250000, 'jumlah' => 1],
            ['penjualan_id' => 9, 'barang_id' => 12, 'harga' => 20000, 'jumlah' => 2],
            // Detail Penjualan 10 (PJL-010)
            ['penjualan_id' => 10, 'barang_id' => 6, 'harga' => 100000, 'jumlah' => 3],
            ['penjualan_id' => 10, 'barang_id' => 11, 'harga' => 15000, 'jumlah' => 5],
            ['penjualan_id' => 10, 'barang_id' => 14, 'harga' => 30000, 'jumlah' => 1]
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
