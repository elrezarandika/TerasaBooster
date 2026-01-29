<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan database seeder utama.
     */
    public function run(): void
    {
        $this->call([
            KontenHomeSeeder::class,
            LokasiSeeder::class,
            ProdukSeeder::class,
            ArtikelSeeder::class,
        ]);
    }
}
