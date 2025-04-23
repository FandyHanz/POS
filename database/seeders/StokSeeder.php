<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supp_id' => 1,
                'barang_id' => 1,  // Laptop XYZ
                'user_id' => 1,     // Admin
                'stok_tanggal' => '2023-10-27 14:00:00',
                'stok_jumlah' => 10,
            ],
            [
                'supp_id' => 1,
                'barang_id' => 2,  // Mouse Wireless
                'user_id' => 1,
                'stok_tanggal' => '2023-10-27 14:05:00',
                'stok_jumlah' => 50,
            ],
            [
                'supp_id' => 1,
                'barang_id' => 3,  // Keyboard Mekanik
                'user_id' => 1,
                'stok_tanggal' => '2023-10-27 14:10:00',
                'stok_jumlah' => 20,
            ],
            [
                'supp_id' => 1,
                'barang_id' => 4,  // Monitor LED 24 inch
                'user_id' => 1,
                'stok_tanggal' => '2023-10-27 14:15:00',
                'stok_jumlah' => 15,
            ],
            [
                'supp_id' => 1,
                'barang_id' => 5,  // Speaker Bluetooth
                'user_id' => 1,
                'stok_tanggal' => '2023-10-27 14:20:00',
                'stok_jumlah' => 30,
            ],
            // Supplier 2
            [
                'supp_id' => 2,
                'barang_id' => 6,  // Kaos Polos
                'user_id' => 2,     // Manager
                'stok_tanggal' => '2023-10-27 14:25:00',
                'stok_jumlah' => 100,
            ],
            [
                'supp_id' => 2,
                'barang_id' => 7,  // Celana Jeans
                'user_id' => 2,
                'stok_tanggal' => '2023-10-27 14:30:00',
                'stok_jumlah' => 50,
            ],
            [
                'supp_id' => 2,
                'barang_id' => 8,  // Jaket Hoodie
                'user_id' => 2,
                'stok_tanggal' => '2023-10-27 14:35:00',
                'stok_jumlah' => 30,
            ],
            [
                'supp_id' => 2,
                'barang_id' => 9,  // Sepatu Sneakers
                'user_id' => 2,
                'stok_tanggal' => '2023-10-27 14:40:00',
                'stok_jumlah' => 20,
            ],
            [
                'supp_id' => 2,
                'barang_id' => 10, // Topi Baseball
                'user_id' => 2,
                'stok_tanggal' => '2023-10-27 14:45:00',
                'stok_jumlah' => 80,
            ],
            // Supplier 3
            [
                'supp_id' => 3,
                'barang_id' => 11, // Beras Premium
                'user_id' => 3,     // Staff
                'stok_tanggal' => '2023-10-27 14:50:00',
                'stok_jumlah' => 200,
            ],
            [
                'supp_id' => 3,
                'barang_id' => 12, // Minyak Goreng
                'user_id' => 3,
                'stok_tanggal' => '2023-10-27 14:55:00',
                'stok_jumlah' => 150,
            ],
            [
                'supp_id' => 3,
                'barang_id' => 13, // Gula Pasir
                'user_id' => 3,
                'stok_tanggal' => '2023-10-27 15:00:00',
                'stok_jumlah' => 180,
            ],
            [
                'supp_id' => 3,
                'barang_id' => 14, // Telur Ayam
                'user_id' => 3,
                'stok_tanggal' => '2023-10-27 15:05:00',
                'stok_jumlah' => 100,
            ],
            [
                'supp_id' => 3,
                'barang_id' => 15, // Mie Instan
                'user_id' => 3,
                'stok_tanggal' => '2023-10-27 15:10:00',
                'stok_jumlah' => 500,
            ]
        ];
        DB::table('t_stok')->insert($data);
    }
}
