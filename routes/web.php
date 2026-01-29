<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\LokasiController;
use App\Http\Controllers\Admin\TestimoniController as AdminTestimoniController;
use App\Http\Controllers\Admin\KontenHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes - terasa.booster
|--------------------------------------------------------------------------
*/

// ========================================
// Halaman Publik
// ========================================

// Home
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Katalog Produk
Route::get('/katalog', [BerandaController::class, 'katalog'])->name('katalog');
Route::get('/produk/{slug}', [BerandaController::class, 'detailProduk'])->name('produk.detail');

// Blog
Route::get('/blog', [BerandaController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [BerandaController::class, 'detailArtikel'])->name('blog.detail');

// Tentang Kami
Route::get('/tentang-kami', [BerandaController::class, 'tentangKami'])->name('tentang-kami');

// Kontak
Route::get('/kontak', [BerandaController::class, 'kontak'])->name('kontak');

// Testimoni
Route::get('/testimoni', [TestimoniController::class, 'daftarTestimoni'])->name('testimoni');

// ========================================
// Autentikasi Google OAuth
// ========================================

Route::get('/login', [AuthController::class, 'halamanLogin'])->name('login');
Route::get('/auth/google', [AuthController::class, 'redirectKeGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ========================================
// Route yang memerlukan login
// ========================================

Route::middleware('auth')->group(function () {
    // Kirim testimoni (hanya user yang login)
    Route::post('/testimoni', [TestimoniController::class, 'simpanTestimoni'])->name('testimoni.simpan');
});

// ========================================
// Dashboard Admin (Protected)
// ========================================

Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('analytics');
    
    // CRUD Produk
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('/produk/tambah', [ProdukController::class, 'tambah'])->name('produk.tambah');
    Route::post('/produk', [ProdukController::class, 'simpan'])->name('produk.simpan');
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{id}', [ProdukController::class, 'hapus'])->name('produk.hapus');
    
    // CRUD Artikel Blog
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
    Route::get('/artikel/tambah', [ArtikelController::class, 'tambah'])->name('artikel.tambah');
    Route::post('/artikel', [ArtikelController::class, 'simpan'])->name('artikel.simpan');
    Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::put('/artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('/artikel/{id}', [ArtikelController::class, 'hapus'])->name('artikel.hapus');
    
    // CRUD Lokasi
    Route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi.index');
    Route::get('/lokasi/tambah', [LokasiController::class, 'tambah'])->name('lokasi.tambah');
    Route::post('/lokasi', [LokasiController::class, 'simpan'])->name('lokasi.simpan');
    Route::get('/lokasi/{id}/edit', [LokasiController::class, 'edit'])->name('lokasi.edit');
    Route::put('/lokasi/{id}', [LokasiController::class, 'update'])->name('lokasi.update');
    Route::delete('/lokasi/{id}', [LokasiController::class, 'hapus'])->name('lokasi.hapus');
    
    // Moderasi Testimoni
    Route::get('/testimoni', [AdminTestimoniController::class, 'index'])->name('testimoni.index');
    Route::post('/testimoni/{id}/setujui', [AdminTestimoniController::class, 'setujui'])->name('testimoni.setujui');
    Route::post('/testimoni/{id}/tolak', [AdminTestimoniController::class, 'tolak'])->name('testimoni.tolak');
    Route::post('/testimoni/{id}/batalkan', [AdminTestimoniController::class, 'batalkanPersetujuan'])->name('testimoni.batalkan');
    
    // Pengaturan Konten Home
    Route::get('/konten-home', [KontenHomeController::class, 'index'])->name('konten-home.index');
    Route::post('/konten-home', [KontenHomeController::class, 'simpan'])->name('konten-home.simpan');
});
