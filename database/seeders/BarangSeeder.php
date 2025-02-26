<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1, // Asumsi kategori Elektronik
                'barang_kode' => 'BRG-001',
                'barang_nama' => 'Laptop XYZ',
                'harga_beli' => 9000000,
                'harga_jual' => 10000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG-002',
                'barang_nama' => 'Mouse Wireless',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG-003',
                'barang_nama' => 'Keyboard Mekanik',
                'harga_beli' => 400000,
                'harga_jual' => 500000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 1,
                'barang_kode' => 'BRG-004',
                'barang_nama' => 'Monitor LED 24 inch',
                'harga_beli' => 1800000,
                'harga_jual' => 2000000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_kode' => 'BRG-005',
                'barang_nama' => 'Speaker Bluetooth',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
            ],
            // Supplier 2
            [
                'barang_id' => 6,
                'kategori_id' => 2, // Asumsi kategori Pakaian
                'barang_kode' => 'BRG-006',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 80000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'BRG-007',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_kode' => 'BRG-008',
                'barang_nama' => 'Jaket Hoodie',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 2,
                'barang_kode' => 'BRG-009',
                'barang_nama' => 'Sepatu Sneakers',
                'harga_beli' => 350000,
                'harga_jual' => 400000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 2,
                'barang_kode' => 'BRG-010',
                'barang_nama' => 'Topi Baseball',
                'harga_beli' => 40000,
                'harga_jual' => 50000,
            ],
            // Supplier 3
            [
                'barang_id' => 11,
                'kategori_id' => 3, // Asumsi kategori Makanan dan Minuman
                'barang_kode' => 'BRG-011',
                'barang_nama' => 'Beras Premium',
                'harga_beli' => 13000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 3,
                'barang_kode' => 'BRG-012',
                'barang_nama' => 'Minyak Goreng',
                'harga_beli' => 18000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 3,
                'barang_kode' => 'BRG-013',
                'barang_nama' => 'Gula Pasir',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 3,
                'barang_kode' => 'BRG-014',
                'barang_nama' => 'Telur Ayam',
                'harga_beli' => 27000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 3,
                'barang_kode' => 'BRG-015',
                'barang_nama' => 'Mie Instan',
                'harga_beli' => 2500,
                'harga_jual' => 3000,
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
