<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{ // <-- Brace from line 9
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Independent data first
            LevelSeeder::class,
            KategoriSeeder::class,
            SupplierSeeder::class,

            // Data that depends on the above
            UserSeeder::class,     // Depends on LevelSeeder
            BarangSeeder::class,   // Depends on KategoriSeeder

            // Data that depends on users and products
            StokSeeder::class,          // Depends on BarangSeeder and UserSeeder
            PenjualanSeeder::class,     // Depends on UserSeeder

            // Data that depends on sales
            PenjualanDetailSeeder::class, // Depends on PenjualanSeeder and BarangSeeder
        ]);
    } // <-- This closes the run() method

} // <-- ADD THIS LINE to close the class
