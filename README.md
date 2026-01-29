# Terasa.Booster - Website Katalog UMKM ASI Booster

Website katalog untuk UMKM Terasa.Booster yang menjual produk jus kesehatan untuk ibu menyusui. Website bersifat katalog dengan pemesanan melalui WhatsApp.

## 🌟 Fitur

### Halaman Publik
- **Beranda** - Hero section, produk unggulan, testimoni, dan CTA
- **Katalog** - Daftar produk dengan filter dan pencarian
- **Detail Produk** - Informasi lengkap produk dengan pilihan lokasi pemesanan
- **Blog** - Artikel tips & informasi seputar ASI dan menyusui
- **Tentang Kami** - Profil dan value perusahaan
- **Kontak** - Daftar lokasi admin WhatsApp

### Panel Admin
- Dashboard dengan statistik
- Google Analytics monitoring
- CRUD Produk
- CRUD Artikel/Blog
- CRUD Lokasi Admin
- Moderasi Testimoni
- Kelola Konten Homepage

### Fitur Lainnya
- Login dengan Google OAuth
- Responsive design (mobile-first)
- Animasi dekoratif (falling hearts & leaves)
- Integrasi WhatsApp untuk pemesanan
- Google Analytics tracking

## 🛠️ Tech Stack

- **Backend:** Laravel 10.x
- **Frontend:** Tailwind CSS 3.x + Alpine.js
- **Build Tool:** Vite
- **Database:** MySQL
- **Auth:** Laravel Socialite (Google OAuth)
- **Analytics:** Google Analytics 4

## 📋 Requirements

- PHP >= 8.1
- Composer
- Node.js >= 16
- MySQL >= 5.7

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/your-username/terasa-booster.git
cd terasa-booster
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database
Edit file `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=terasa_booster
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Konfigurasi Google OAuth
Buat project di [Google Cloud Console](https://console.cloud.google.com/):
1. Enable Google+ API
2. Create OAuth 2.0 credentials
3. Tambahkan ke `.env`:
```env
GOOGLE_CLIENT_ID=your-client-id
GOOGLE_CLIENT_SECRET=your-client-secret
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback
```

### 6. Konfigurasi Google Analytics
1. Buat property di [Google Analytics](https://analytics.google.com/)
2. Dapatkan Measurement ID (G-XXXXXXXXXX)
3. Tambahkan ke `.env`:
```env
GOOGLE_ANALYTICS_ID=G-XXXXXXXXXX
```

### 7. Jalankan Migrasi & Seeder
```bash
php artisan migrate
php artisan db:seed
php artisan storage:link
```

### 8. Build Assets
```bash
npm run dev
```
Atau untuk production:
```bash
npm run build
```

### 9. Jalankan Server
```bash
php artisan serve
```

Buka http://localhost:8000

## 📁 Struktur Folder Penting

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Admin/          # Controller admin dashboard
│   │   ├── AuthController.php
│   │   ├── BerandaController.php
│   │   └── TestimoniController.php
│   └── Middleware/
│       └── AdminMiddleware.php
├── Models/
│   ├── Produk.php
│   ├── Artikel.php
│   ├── Testimoni.php
│   ├── Lokasi.php
│   └── KontenHome.php
resources/
├── views/
│   ├── layouts/            # Layout templates
│   ├── admin/              # Admin dashboard views
│   ├── auth/               # Login page
│   └── ...                 # Public pages
├── css/app.css
└── js/app.js
```

## 🔐 Akses Admin

1. Login menggunakan Google OAuth
2. Set user sebagai admin di database:
```sql
UPDATE users SET is_admin = 1 WHERE email = 'your-email@gmail.com';
```
3. Akses admin panel: `/admin`

## 🎨 Customization

### Warna Brand
Edit `tailwind.config.js`:
```javascript
colors: {
    terasa: {
        bg: '#F8F8E1',       // Background cream
        text: '#FFFFFF',
        button: '#FF35A6',   // Pink button
        card: '#FF8AAE',     // Pink card
    }
}
```

### Konten Homepage
Semua teks di homepage dapat diedit melalui Admin Panel > Konten Home

## 📱 Screenshots

(Tambahkan screenshots website di sini)

## 📄 License

MIT License

## 👩‍💻 Developer

Dibuat dengan 💗 untuk ibu-ibu hebat Indonesia
