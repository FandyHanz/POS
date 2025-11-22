<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['department_id' => 1, 'department_nama' => 'Accounting'],
            ['department_id' => 2, 'department_nama' => 'Bussines Development'],
            ['department_id' => 3, 'department_nama' => 'Engginering'],
            ['department_id' => 4, 'department_nama' => 'Human Resource'],
            ['department_id' => 5, 'department_nama' => 'Legal'],
            ['department_id' => 6, 'department_nama' => 'Marketing'],
            ['department_id' => 7, 'department_nama' => 'Product Management'],
            ['department_id' => 8, 'department_nama' => 'Sales'],
            ['department_id' => 9, 'department_nama' => 'Training'],
        ];

        DB::table('m_department')->insert($data);
    }
}
