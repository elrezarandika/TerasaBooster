<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Jalankan database seeder untuk produk.
     */
    public function run(): void
    {
        $produks = [
            [
                'nama' => 'Booster ASI Premium',
                'slug' => 'booster-asi-premium',
                'deskripsi' => 'Jus premium dengan kombinasi daun katuk, kacang almond, dan kurma madu. Diperkaya dengan ekstrak fenugreek untuk hasil maksimal. Cocok untuk ibu menyusui yang ingin meningkatkan produksi ASI secara alami.',
                'manfaat' => "Meningkatkan produksi ASI secara alami\nMengandung nutrisi lengkap untuk ibu menyusui\nMeningkatkan kualitas ASI\nMembantu pemulihan pasca melahirkan\nMemberikan energi ekstra untuk ibu",
                'harga' => 75000,
                'gambar' => null,
                'aktif' => true,
                'urutan' => 1,
            ],
            [
                'nama' => 'Green Lactation Juice',
                'slug' => 'green-lactation-juice',
                'deskripsi' => 'Perpaduan sayuran hijau segar seperti bayam, katuk, dan wortel yang kaya akan zat besi dan vitamin A. Rasa segar dan mudah dikonsumsi setiap hari.',
                'manfaat' => "Kaya zat besi untuk mencegah anemia\nMeningkatkan kualitas ASI\nSumber vitamin A untuk kesehatan mata bayi\nMembantu pencernaan ibu\nMenjaga stamina ibu menyusui",
                'harga' => 55000,
                'gambar' => null,
                'aktif' => true,
                'urutan' => 2,
            ],
            [
                'nama' => 'Almond Milk Booster',
                'slug' => 'almond-milk-booster',
                'deskripsi' => 'Susu almond organik dengan tambahan madu dan kurma. Kaya akan protein nabati dan vitamin E. Sangat cocok untuk ibu yang memiliki alergi susu sapi.',
                'manfaat' => "Alternatif sehat untuk ibu dengan alergi susu sapi\nKaya protein nabati\nMengandung vitamin E untuk kulit sehat\nMembantu meningkatkan produksi ASI\nRasa lezat dan menyegarkan",
                'harga' => 65000,
                'gambar' => null,
                'aktif' => true,
                'urutan' => 3,
            ],
            [
                'nama' => 'Dates & Honey Blend',
                'slug' => 'dates-honey-blend',
                'deskripsi' => 'Kombinasi kurma pilihan dan madu murni yang manis alami. Sumber energi instan untuk ibu menyusui yang aktif. Dapat dikonsumsi langsung atau dicampur dengan minuman favorit.',
                'manfaat' => "Sumber energi instan\nMempercepat pemulihan pasca melahirkan\nKaya akan zat besi dan potasium\nMeningkatkan mood dan mengurangi stress\nAman dikonsumsi setiap hari",
                'harga' => 85000,
                'gambar' => null,
                'aktif' => true,
                'urutan' => 4,
            ],
            [
                'nama' => 'Berry Lactation Smoothie',
                'slug' => 'berry-lactation-smoothie',
                'deskripsi' => 'Smoothie berry mix dengan blueberry, strawberry, dan raspberry. Ditambah yogurt probiotik untuk kesehatan pencernaan. Segar dan kaya antioksidan.',
                'manfaat' => "Kaya antioksidan untuk kekebalan tubuh\nMengandung probiotik untuk pencernaan sehat\nSumber vitamin C alami\nRasa segar dan nikmat\nCocok untuk snack sehat",
                'harga' => 60000,
                'gambar' => null,
                'aktif' => true,
                'urutan' => 5,
            ],
            [
                'nama' => 'Super Mom Energy Pack',
                'slug' => 'super-mom-energy-pack',
                'deskripsi' => 'Paket lengkap berisi 5 botol jus booster berbeda untuk satu minggu. Variasi rasa agar tidak bosan. Cocok untuk ibu yang baru memulai journey menyusui.',
                'manfaat' => "Paket lengkap untuk satu minggu\nVariasi rasa yang nikmat\nKombinasi nutrisi lengkap\nPraktis dan ekonomis\nCocok untuk hadiah ibu baru",
                'harga' => 275000,
                'gambar' => null,
                'aktif' => true,
                'urutan' => 6,
            ],
        ];

        foreach ($produks as $produk) {
            Produk::create($produk);
        }
    }
}
