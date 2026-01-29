@extends('layouts.admin')

@section('title', isset($produk) ? 'Edit Produk' : 'Tambah Produk')

@section('content')
<div class="mb-8">
    <a href="{{ route('admin.produk.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali
    </a>
    <h1 class="text-2xl font-bold text-gray-800">{{ isset($produk) ? 'Edit Produk' : 'Tambah Produk Baru' }}</h1>
</div>

<form action="{{ isset($produk) ? route('admin.produk.update', $produk->id) : route('admin.produk.simpan') }}" 
      method="POST" 
      enctype="multipart/form-data"
      class="max-w-3xl">
    @csrf
    @if(isset($produk))
    @method('PUT')
    @endif
    
    <div class="bg-white rounded-xl shadow-md p-6 space-y-6">
        <!-- Nama -->
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Produk *</label>
            <input type="text" 
                   name="nama" 
                   id="nama" 
                   value="{{ old('nama', $produk->nama ?? '') }}" 
                   required
                   class="admin-input @error('nama') border-red-500 @enderror"
                   placeholder="Contoh: Booster ASI Premium">
            @error('nama')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Deskripsi -->
        <div>
            <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi *</label>
            <textarea name="deskripsi" 
                      id="deskripsi" 
                      rows="4" 
                      required
                      class="admin-input @error('deskripsi') border-red-500 @enderror"
                      placeholder="Jelaskan produk secara detail...">{{ old('deskripsi', $produk->deskripsi ?? '') }}</textarea>
            @error('deskripsi')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Manfaat -->
        <div>
            <label for="manfaat" class="block text-sm font-medium text-gray-700 mb-2">Manfaat</label>
            <textarea name="manfaat" 
                      id="manfaat" 
                      rows="4" 
                      class="admin-input @error('manfaat') border-red-500 @enderror"
                      placeholder="Tuliskan manfaat produk, satu per baris...">{{ old('manfaat', $produk->manfaat ?? '') }}</textarea>
            <p class="mt-1 text-xs text-gray-500">Tuliskan satu manfaat per baris</p>
            @error('manfaat')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Harga -->
        <div>
            <label for="harga" class="block text-sm font-medium text-gray-700 mb-2">Harga (Rp) *</label>
            <input type="number" 
                   name="harga" 
                   id="harga" 
                   value="{{ old('harga', $produk->harga ?? '') }}" 
                   required
                   min="0"
                   class="admin-input @error('harga') border-red-500 @enderror"
                   placeholder="Contoh: 50000">
            @error('harga')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Gambar -->
        <div>
            <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2">Gambar Produk</label>
            
            @if(isset($produk) && $produk->gambar)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $produk->gambar) }}" 
                     alt="{{ $produk->nama }}" 
                     class="w-32 h-32 object-cover rounded-lg">
                <p class="text-xs text-gray-500 mt-1">Gambar saat ini</p>
            </div>
            @endif
            
            <input type="file" 
                   name="gambar" 
                   id="gambar" 
                   accept="image/*"
                   class="admin-input @error('gambar') border-red-500 @enderror">
            <p class="mt-1 text-xs text-gray-500">Format: JPG, PNG, WebP. Maksimal 2MB</p>
            @error('gambar')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Urutan -->
        <div>
            <label for="urutan" class="block text-sm font-medium text-gray-700 mb-2">Urutan Tampil</label>
            <input type="number" 
                   name="urutan" 
                   id="urutan" 
                   value="{{ old('urutan', $produk->urutan ?? 0) }}" 
                   min="0"
                   class="admin-input w-32 @error('urutan') border-red-500 @enderror">
            <p class="mt-1 text-xs text-gray-500">Angka lebih kecil ditampilkan lebih dulu</p>
            @error('urutan')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Status Aktif -->
        <div>
            <label class="flex items-center gap-3 cursor-pointer">
                <input type="checkbox" 
                       name="aktif" 
                       value="1" 
                       {{ old('aktif', $produk->aktif ?? true) ? 'checked' : '' }}
                       class="w-5 h-5 rounded border-gray-300 text-terasa-button focus:ring-terasa-button">
                <span class="text-sm font-medium text-gray-700">Produk Aktif</span>
            </label>
            <p class="mt-1 text-xs text-gray-500 ml-8">Produk aktif akan ditampilkan di katalog</p>
        </div>
        
        <!-- Buttons -->
        <div class="flex items-center gap-4 pt-4 border-t">
            <button type="submit" class="btn-primary">
                {{ isset($produk) ? 'Simpan Perubahan' : 'Tambah Produk' }}
            </button>
            <a href="{{ route('admin.produk.index') }}" class="btn-secondary">Batal</a>
        </div>
    </div>
</form>
@endsection
