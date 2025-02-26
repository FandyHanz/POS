<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SPL-001',
                'supplier_nama' => 'PT. Maju Jaya',
                'supplier_alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'created_at' => '2023-10-27 11:00:00',
                'updated_at' => '2023-10-27 11:00:00'
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SPL-002',
                'supplier_nama' => 'CV. Sumber Rejeki',
                'supplier_alamat' => 'Jl. Pahlawan No. 25, Surabaya',
                'created_at' => '2023-10-27 11:05:00',
                'updated_at' => '2023-10-27 11:05:00'
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SPL-003',
                'supplier_nama' => 'UD. Lancar Abadi',
                'supplier_alamat' => 'Komp. Pergudangan Indah Blok A No. 5, Bandung',
                'created_at' => '2023-10-27 11:10:00',
                'updated_at' => '2023-10-27 11:10:00'
            ]
        ];
        DB::table('m_supplier')->insert($data);
    }
}
