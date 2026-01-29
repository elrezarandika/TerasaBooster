<?php

namespace Database\Seeders;

use App\Models\KontenHome;
use Illuminate\Database\Seeder;

class KontenHomeSeeder extends Seeder
{
    /**
     * Jalankan database seeder untuk konten homepage.
     */
    public function run(): void
    {
        $kontens = [
            // Hero Section
            ['kunci' => 'hero_judul', 'nilai' => 'ASI Booster Alami untuk Ibu Hebat', 'tipe' => 'text'],
            ['kunci' => 'hero_subjudul', 'nilai' => 'Tingkatkan produksi ASI Anda dengan jus sehat alami dari Terasa.Booster. Terbuat dari bahan-bahan pilihan yang aman untuk ibu menyusui.', 'tipe' => 'textarea'],
            ['kunci' => 'hero_tombol', 'nilai' => 'Lihat Produk Kami', 'tipe' => 'text'],
            
            // Tagline Section
            ['kunci' => 'tagline', 'nilai' => 'Teman Setia Ibu Menyusui', 'tipe' => 'text'],
            ['kunci' => 'tagline_deskripsi', 'nilai' => 'Kami hadir untuk mendukung perjalanan menyusui Anda dengan produk-produk alami berkualitas tinggi. Setiap produk kami dibuat dengan cinta dan perhatian khusus untuk kesehatan ibu dan bayi.', 'tipe' => 'textarea'],
            
            // Kenapa Terasa Section
            ['kunci' => 'kenapa_judul', 'nilai' => 'Kenapa Pilih Terasa.Booster?', 'tipe' => 'text'],
            ['kunci' => 'manfaat_1', 'nilai' => '100% Bahan Alami', 'tipe' => 'text'],
            ['kunci' => 'manfaat_2', 'nilai' => 'Aman untuk Ibu & Bayi', 'tipe' => 'text'],
            ['kunci' => 'manfaat_3', 'nilai' => 'Fresh & Tanpa Pengawet', 'tipe' => 'text'],
            ['kunci' => 'manfaat_4', 'nilai' => 'Testimoni Terpercaya', 'tipe' => 'text'],
            
            // CTA Section
            ['kunci' => 'cta_judul', 'nilai' => 'Siap Meningkatkan Produksi ASI Anda?', 'tipe' => 'text'],
            ['kunci' => 'cta_deskripsi', 'nilai' => 'Pesan sekarang dan rasakan manfaatnya! Kami siap membantu perjalanan menyusui Anda.', 'tipe' => 'textarea'],
            ['kunci' => 'cta_tombol', 'nilai' => 'Pesan Sekarang', 'tipe' => 'text'],
            
            // Social Media
            ['kunci' => 'instagram', 'nilai' => 'https://instagram.com/terasa.booster', 'tipe' => 'text'],
            ['kunci' => 'facebook', 'nilai' => 'https://facebook.com/terasabooster', 'tipe' => 'text'],
            ['kunci' => 'tiktok', 'nilai' => 'https://tiktok.com/@terasa.booster', 'tipe' => 'text'],
            
            // Contact
            ['kunci' => 'email', 'nilai' => 'hello@terasa-booster.com', 'tipe' => 'text'],
            ['kunci' => 'whatsapp_utama', 'nilai' => '6281234567890', 'tipe' => 'text'],
        ];

        foreach ($kontens as $konten) {
            KontenHome::create($konten);
        }
    }
}
