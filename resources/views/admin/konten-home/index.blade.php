@extends('layouts.admin')

@section('title', 'Kelola Konten Home')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-gray-800">Kelola Konten Homepage</h1>
    <p class="text-gray-500">Edit teks dan konten yang tampil di halaman utama</p>
</div>

<form action="{{ route('admin.konten-home.simpan') }}" method="POST" class="max-w-3xl">
    @csrf
    
    <div class="space-y-6">
        <!-- Hero Section -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-terasa-card" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
                Hero Section
            </h2>
            
            <div class="space-y-4">
                <div>
                    <label for="hero_judul" class="block text-sm font-medium text-gray-700 mb-2">Judul Hero</label>
                    <input type="text" 
                           name="konten[hero_judul]" 
                           id="hero_judul" 
                           value="{{ $konten['hero_judul'] ?? 'ASI Booster Alami untuk Ibu Hebat' }}"
                           class="admin-input">
                </div>
                
                <div>
                    <label for="hero_subjudul" class="block text-sm font-medium text-gray-700 mb-2">Subjudul Hero</label>
                    <textarea name="konten[hero_subjudul]" 
                              id="hero_subjudul" 
                              rows="2"
                              class="admin-input">{{ $konten['hero_subjudul'] ?? 'Tingkatkan produksi ASI Anda dengan jus sehat alami dari Terasa.Booster. Terbuat dari bahan-bahan pilihan yang aman untuk ibu menyusui.' }}</textarea>
                </div>
                
                <div>
                    <label for="hero_tombol" class="block text-sm font-medium text-gray-700 mb-2">Teks Tombol</label>
                    <input type="text" 
                           name="konten[hero_tombol]" 
                           id="hero_tombol" 
                           value="{{ $konten['hero_tombol'] ?? 'Lihat Produk Kami' }}"
                           class="admin-input">
                </div>
            </div>
        </div>
        
        <!-- Tagline Section -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-terasa-card" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                </svg>
                Tagline
            </h2>
            
            <div class="space-y-4">
                <div>
                    <label for="tagline" class="block text-sm font-medium text-gray-700 mb-2">Tagline Utama</label>
                    <input type="text" 
                           name="konten[tagline]" 
                           id="tagline" 
                           value="{{ $konten['tagline'] ?? 'Teman Setia Ibu Menyusui' }}"
                           class="admin-input">
                </div>
                
                <div>
                    <label for="tagline_deskripsi" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Tagline</label>
                    <textarea name="konten[tagline_deskripsi]" 
                              id="tagline_deskripsi" 
                              rows="3"
                              class="admin-input">{{ $konten['tagline_deskripsi'] ?? 'Kami hadir untuk mendukung perjalanan menyusui Anda dengan produk-produk alami berkualitas tinggi. Setiap produk kami dibuat dengan cinta dan perhatian khusus untuk kesehatan ibu dan bayi.' }}</textarea>
                </div>
            </div>
        </div>
        
        <!-- Kenapa Terasa Section -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-terasa-card" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Kenapa Terasa
            </h2>
            
            <div class="space-y-4">
                <div>
                    <label for="kenapa_judul" class="block text-sm font-medium text-gray-700 mb-2">Judul Section</label>
                    <input type="text" 
                           name="konten[kenapa_judul]" 
                           id="kenapa_judul" 
                           value="{{ $konten['kenapa_judul'] ?? 'Kenapa Pilih Terasa.Booster?' }}"
                           class="admin-input">
                </div>
                
                <div>
                    <label for="manfaat_1" class="block text-sm font-medium text-gray-700 mb-2">Manfaat 1</label>
                    <input type="text" 
                           name="konten[manfaat_1]" 
                           id="manfaat_1" 
                           value="{{ $konten['manfaat_1'] ?? '100% Bahan Alami' }}"
                           class="admin-input">
                </div>
                
                <div>
                    <label for="manfaat_2" class="block text-sm font-medium text-gray-700 mb-2">Manfaat 2</label>
                    <input type="text" 
                           name="konten[manfaat_2]" 
                           id="manfaat_2" 
                           value="{{ $konten['manfaat_2'] ?? 'Aman untuk Ibu & Bayi' }}"
                           class="admin-input">
                </div>
                
                <div>
                    <label for="manfaat_3" class="block text-sm font-medium text-gray-700 mb-2">Manfaat 3</label>
                    <input type="text" 
                           name="konten[manfaat_3]" 
                           id="manfaat_3" 
                           value="{{ $konten['manfaat_3'] ?? 'Fresh & Tanpa Pengawet' }}"
                           class="admin-input">
                </div>
                
                <div>
                    <label for="manfaat_4" class="block text-sm font-medium text-gray-700 mb-2">Manfaat 4</label>
                    <input type="text" 
                           name="konten[manfaat_4]" 
                           id="manfaat_4" 
                           value="{{ $konten['manfaat_4'] ?? 'Testimoni Terpercaya' }}"
                           class="admin-input">
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-terasa-card" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                </svg>
                Call to Action
            </h2>
            
            <div class="space-y-4">
                <div>
                    <label for="cta_judul" class="block text-sm font-medium text-gray-700 mb-2">Judul CTA</label>
                    <input type="text" 
                           name="konten[cta_judul]" 
                           id="cta_judul" 
                           value="{{ $konten['cta_judul'] ?? 'Siap Meningkatkan Produksi ASI Anda?' }}"
                           class="admin-input">
                </div>
                
                <div>
                    <label for="cta_deskripsi" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi CTA</label>
                    <textarea name="konten[cta_deskripsi]" 
                              id="cta_deskripsi" 
                              rows="2"
                              class="admin-input">{{ $konten['cta_deskripsi'] ?? 'Pesan sekarang dan rasakan manfaatnya! Kami siap membantu perjalanan menyusui Anda.' }}</textarea>
                </div>
                
                <div>
                    <label for="cta_tombol" class="block text-sm font-medium text-gray-700 mb-2">Teks Tombol CTA</label>
                    <input type="text" 
                           name="konten[cta_tombol]" 
                           id="cta_tombol" 
                           value="{{ $konten['cta_tombol'] ?? 'Pesan Sekarang' }}"
                           class="admin-input">
                </div>
            </div>
        </div>
        
        <!-- Submit Button -->
        <div class="flex items-center gap-4">
            <button type="submit" class="btn-primary">Simpan Semua Perubahan</button>
        </div>
    </div>
</form>
@endsection
