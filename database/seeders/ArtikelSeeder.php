<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\User;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Jalankan database seeder untuk artikel.
     */
    public function run(): void
    {
        // Pastikan ada user admin untuk penulis
        $admin = User::where('is_admin', true)->first();
        
        if (!$admin) {
            $admin = User::create([
                'name' => 'Admin Terasa',
                'email' => 'admin@terasa-booster.com',
                'password' => bcrypt('password123'),
                'is_admin' => true,
            ]);
        }

        $artikels = [
            [
                'judul' => 'Tips Meningkatkan Produksi ASI Secara Alami',
                'slug' => 'tips-meningkatkan-produksi-asi-secara-alami',
                'ringkasan' => 'Pelajari cara-cara alami untuk meningkatkan produksi ASI Anda. Mulai dari pola makan hingga teknik menyusui yang benar.',
                'konten' => '<p>Menyusui adalah perjalanan indah antara ibu dan bayi. Namun, tidak jarang ibu mengalami kekhawatiran tentang produksi ASI mereka. Berikut adalah beberapa tips alami untuk meningkatkan produksi ASI:</p>

<h2>1. Menyusui Sesering Mungkin</h2>
<p>Semakin sering Anda menyusui, semakin banyak ASI yang diproduksi. Ini karena tubuh bekerja berdasarkan prinsip supply and demand.</p>

<h2>2. Konsumsi Makanan Galaktogogog</h2>
<p>Makanan seperti daun katuk, kacang almond, oatmeal, dan kurma dikenal dapat membantu meningkatkan produksi ASI.</p>

<h2>3. Istirahat yang Cukup</h2>
<p>Kelelahan dapat mempengaruhi produksi ASI. Usahakan untuk tidur saat bayi tidur dan minta bantuan keluarga.</p>

<h2>4. Hidrasi yang Baik</h2>
<p>Minum air putih yang cukup sangat penting. ASI sebagian besar terdiri dari air, jadi pastikan Anda terhidrasi dengan baik.</p>

<h2>5. Kelola Stress</h2>
<p>Stress dapat menghambat produksi ASI. Cobalah teknik relaksasi seperti meditasi atau yoga ringan.</p>',
                'gambar' => null,
                'user_id' => $admin->id,
                'dipublikasikan' => true,
            ],
            [
                'judul' => 'Manfaat Kurma untuk Ibu Menyusui',
                'slug' => 'manfaat-kurma-untuk-ibu-menyusui',
                'ringkasan' => 'Kurma bukan hanya manis dan lezat, tapi juga memiliki banyak manfaat untuk ibu menyusui. Yuk simak selengkapnya!',
                'konten' => '<p>Kurma telah lama dikenal sebagai superfood untuk ibu menyusui. Buah kecil ini menyimpan banyak manfaat yang luar biasa.</p>

<h2>Kandungan Nutrisi Kurma</h2>
<ul>
<li>Kaya akan zat besi - mencegah anemia</li>
<li>Sumber potasium - menjaga keseimbangan elektrolit</li>
<li>Mengandung vitamin B6 - penting untuk metabolisme</li>
<li>Tinggi serat - menjaga pencernaan sehat</li>
</ul>

<h2>Manfaat untuk Ibu Menyusui</h2>
<p>Kurma membantu meningkatkan kadar oksitosin dalam tubuh, hormon yang berperan penting dalam produksi dan pengeluaran ASI. Selain itu, kurma juga memberikan energi instan yang sangat dibutuhkan ibu menyusui.</p>

<h2>Cara Konsumsi</h2>
<p>Anda bisa mengonsumsi kurma langsung, atau mencampurkannya dengan susu, smoothie, atau jus booster ASI seperti produk Terasa.Booster.</p>',
                'gambar' => null,
                'user_id' => $admin->id,
                'dipublikasikan' => true,
            ],
            [
                'judul' => 'Mengapa Daun Katuk Baik untuk ASI?',
                'slug' => 'mengapa-daun-katuk-baik-untuk-asi',
                'ringkasan' => 'Daun katuk sudah digunakan turun temurun oleh ibu menyusui di Indonesia. Apa rahasia di balik manfaatnya?',
                'konten' => '<p>Daun katuk (Sauropus androgynus) adalah tanaman tradisional yang sudah digunakan selama berabad-abad oleh ibu menyusui di Asia Tenggara.</p>

<h2>Kandungan Aktif</h2>
<p>Daun katuk mengandung laktagogum, senyawa yang dapat merangsang produksi ASI. Selain itu, daun ini juga kaya akan:</p>
<ul>
<li>Protein tinggi</li>
<li>Vitamin A, B, dan C</li>
<li>Mineral seperti kalsium dan zat besi</li>
<li>Antioksidan</li>
</ul>

<h2>Penelitian Ilmiah</h2>
<p>Beberapa penelitian menunjukkan bahwa konsumsi daun katuk dapat meningkatkan produksi ASI hingga 50%. Senyawa dalam daun katuk bekerja dengan merangsang hormon prolaktin.</p>

<h2>Cara Aman Mengonsumsi</h2>
<p>Daun katuk sebaiknya dikonsumsi dalam bentuk yang sudah diolah (dimasak atau diekstrak) untuk keamanan. Produk Terasa.Booster menggunakan ekstrak daun katuk yang sudah diolah dengan standar keamanan pangan.</p>',
                'gambar' => null,
                'user_id' => $admin->id,
                'dipublikasikan' => true,
            ],
            [
                'judul' => 'Panduan Menyimpan ASI Perah dengan Benar',
                'slug' => 'panduan-menyimpan-asi-perah-dengan-benar',
                'ringkasan' => 'ASI perah harus disimpan dengan benar agar tetap berkualitas. Berikut panduan lengkapnya untuk working mom.',
                'konten' => '<p>Bagi ibu bekerja, memerah dan menyimpan ASI adalah bagian penting dari perjalanan menyusui. Berikut panduan lengkap menyimpan ASI perah:</p>

<h2>Suhu dan Durasi Penyimpanan</h2>
<table>
<tr><td>Suhu ruangan (25°C)</td><td>4-6 jam</td></tr>
<tr><td>Kulkas (4°C)</td><td>3-5 hari</td></tr>
<tr><td>Freezer (-18°C)</td><td>6-12 bulan</td></tr>
</table>

<h2>Tips Penyimpanan</h2>
<ul>
<li>Gunakan wadah khusus ASI yang BPA-free</li>
<li>Beri label tanggal dan waktu pemerahan</li>
<li>Simpan di bagian belakang kulkas/freezer</li>
<li>Jangan campur ASI hangat dengan ASI dingin</li>
</ul>

<h2>Cara Mencairkan ASI</h2>
<p>Cairkan ASI beku dengan memindahkan ke kulkas semalam, atau rendam wadah dalam air hangat. Jangan gunakan microwave karena dapat merusak nutrisi dan menyebabkan hot spots.</p>',
                'gambar' => null,
                'user_id' => $admin->id,
                'dipublikasikan' => true,
            ],
        ];

        foreach ($artikels as $artikel) {
            Artikel::create($artikel);
        }
    }
}
