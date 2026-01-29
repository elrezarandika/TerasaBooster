@extends('layouts.admin')

@section('title', isset($artikel) ? 'Edit Artikel' : 'Tambah Artikel')

@section('content')
<div class="mb-8">
    <a href="{{ route('admin.artikel.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali
    </a>
    <h1 class="text-2xl font-bold text-gray-800">{{ isset($artikel) ? 'Edit Artikel' : 'Tulis Artikel Baru' }}</h1>
</div>

<form action="{{ isset($artikel) ? route('admin.artikel.update', $artikel->id) : route('admin.artikel.simpan') }}" 
      method="POST" 
      enctype="multipart/form-data"
      class="max-w-4xl">
    @csrf
    @if(isset($artikel))
    @method('PUT')
    @endif
    
    <div class="bg-white rounded-xl shadow-md p-6 space-y-6">
        <!-- Judul -->
        <div>
            <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Judul Artikel *</label>
            <input type="text" 
                   name="judul" 
                   id="judul" 
                   value="{{ old('judul', $artikel->judul ?? '') }}" 
                   required
                   class="admin-input @error('judul') border-red-500 @enderror"
                   placeholder="Masukkan judul artikel yang menarik...">
            @error('judul')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Ringkasan -->
        <div>
            <label for="ringkasan" class="block text-sm font-medium text-gray-700 mb-2">Ringkasan</label>
            <textarea name="ringkasan" 
                      id="ringkasan" 
                      rows="3" 
                      class="admin-input @error('ringkasan') border-red-500 @enderror"
                      placeholder="Ringkasan singkat artikel untuk preview...">{{ old('ringkasan', $artikel->ringkasan ?? '') }}</textarea>
            <p class="mt-1 text-xs text-gray-500">Maksimal 200 karakter. Akan ditampilkan di daftar artikel.</p>
            @error('ringkasan')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Konten -->
        <div>
            <label for="konten" class="block text-sm font-medium text-gray-700 mb-2">Konten Artikel *</label>
            <textarea name="konten" 
                      id="konten" 
                      rows="15" 
                      required
                      class="admin-input @error('konten') border-red-500 @enderror"
                      placeholder="Tulis konten artikel di sini... Mendukung HTML.">{{ old('konten', $artikel->konten ?? '') }}</textarea>
            <p class="mt-1 text-xs text-gray-500">Anda dapat menggunakan HTML untuk formatting.</p>
            @error('konten')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Gambar -->
        <div>
            <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2">Gambar Utama</label>
            
            @if(isset($artikel) && $artikel->gambar)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $artikel->gambar) }}" 
                     alt="{{ $artikel->judul }}" 
                     class="w-48 h-32 object-cover rounded-lg">
                <p class="text-xs text-gray-500 mt-1">Gambar saat ini</p>
            </div>
            @endif
            
            <input type="file" 
                   name="gambar" 
                   id="gambar" 
                   accept="image/*"
                   class="admin-input @error('gambar') border-red-500 @enderror">
            <p class="mt-1 text-xs text-gray-500">Format: JPG, PNG, WebP. Maksimal 2MB. Rasio 16:9 disarankan.</p>
            @error('gambar')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Status Publikasi -->
        <div>
            <label class="flex items-center gap-3 cursor-pointer">
                <input type="checkbox" 
                       name="dipublikasikan" 
                       value="1" 
                       {{ old('dipublikasikan', $artikel->dipublikasikan ?? false) ? 'checked' : '' }}
                       class="w-5 h-5 rounded border-gray-300 text-terasa-button focus:ring-terasa-button">
                <span class="text-sm font-medium text-gray-700">Publikasikan Artikel</span>
            </label>
            <p class="mt-1 text-xs text-gray-500 ml-8">Artikel yang dipublikasikan akan tampil di halaman blog</p>
        </div>
        
        <!-- Buttons -->
        <div class="flex items-center gap-4 pt-4 border-t">
            <button type="submit" class="btn-primary">
                {{ isset($artikel) ? 'Simpan Perubahan' : 'Simpan Artikel' }}
            </button>
            <a href="{{ route('admin.artikel.index') }}" class="btn-secondary">Batal</a>
        </div>
    </div>
</form>
@endsection
