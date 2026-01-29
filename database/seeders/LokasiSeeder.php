<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    /**
     * Jalankan database seeder untuk lokasi.
     */
    public function run(): void
    {
        $lokasis = [
            [
                'nama' => 'Terasa Booster Jakarta Selatan',
                'kota' => 'Jakarta Selatan',
                'alamat' => 'Jl. Kemang Raya No. 123, Kemang, Jakarta Selatan 12730',
                'nomor_whatsapp' => '6281234567890',
                'nama_admin' => 'Kak Sarah',
                'aktif' => true,
            ],
            [
                'nama' => 'Terasa Booster Bandung',
                'kota' => 'Bandung',
                'alamat' => 'Jl. Dago Atas No. 45, Coblong, Bandung 40135',
                'nomor_whatsapp' => '6281234567891',
                'nama_admin' => 'Kak Rina',
                'aktif' => true,
            ],
            [
                'nama' => 'Terasa Booster Surabaya',
                'kota' => 'Surabaya',
                'alamat' => 'Jl. Raya Darmo No. 78, Wonokromo, Surabaya 60241',
                'nomor_whatsapp' => '6281234567892',
                'nama_admin' => 'Kak Dewi',
                'aktif' => true,
            ],
            [
                'nama' => 'Terasa Booster Yogyakarta',
                'kota' => 'Yogyakarta',
                'alamat' => 'Jl. Malioboro No. 56, Gedongtengen, Yogyakarta 55271',
                'nomor_whatsapp' => '6281234567893',
                'nama_admin' => 'Kak Putri',
                'aktif' => true,
            ],
            [
                'nama' => 'Terasa Booster Bali',
                'kota' => 'Denpasar',
                'alamat' => 'Jl. Sunset Road No. 99, Kuta, Bali 80361',
                'nomor_whatsapp' => '6281234567894',
                'nama_admin' => 'Kak Ayu',
                'aktif' => true,
            ],
        ];

        foreach ($lokasis as $lokasi) {
            Lokasi::create($lokasi);
        }
    }
}
