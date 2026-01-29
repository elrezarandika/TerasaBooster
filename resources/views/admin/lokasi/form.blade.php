@extends('layouts.admin')

@section('title', isset($lokasi) ? 'Edit Lokasi' : 'Tambah Lokasi')

@section('content')
<div class="mb-8">
    <a href="{{ route('admin.lokasi.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali
    </a>
    <h1 class="text-2xl font-bold text-gray-800">{{ isset($lokasi) ? 'Edit Lokasi' : 'Tambah Lokasi Baru' }}</h1>
</div>

<form action="{{ isset($lokasi) ? route('admin.lokasi.update', $lokasi->id) : route('admin.lokasi.simpan') }}" 
      method="POST"
      class="max-w-2xl">
    @csrf
    @if(isset($lokasi))
    @method('PUT')
    @endif
    
    <div class="bg-white rounded-xl shadow-md p-6 space-y-6">
        <!-- Nama Lokasi -->
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Lokasi *</label>
            <input type="text" 
                   name="nama" 
                   id="nama" 
                   value="{{ old('nama', $lokasi->nama ?? '') }}" 
                   required
                   class="admin-input @error('nama') border-red-500 @enderror"
                   placeholder="Contoh: Terasa Booster Jakarta Selatan">
            @error('nama')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Kota -->
        <div>
            <label for="kota" class="block text-sm font-medium text-gray-700 mb-2">Kota *</label>
            <input type="text" 
                   name="kota" 
                   id="kota" 
                   value="{{ old('kota', $lokasi->kota ?? '') }}" 
                   required
                   class="admin-input @error('kota') border-red-500 @enderror"
                   placeholder="Contoh: Jakarta Selatan">
            @error('kota')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Alamat -->
        <div>
            <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">Alamat Lengkap *</label>
            <textarea name="alamat" 
                      id="alamat" 
                      rows="3" 
                      required
                      class="admin-input @error('alamat') border-red-500 @enderror"
                      placeholder="Masukkan alamat lengkap...">{{ old('alamat', $lokasi->alamat ?? '') }}</textarea>
            @error('alamat')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Nama Admin -->
        <div>
            <label for="nama_admin" class="block text-sm font-medium text-gray-700 mb-2">Nama Admin *</label>
            <input type="text" 
                   name="nama_admin" 
                   id="nama_admin" 
                   value="{{ old('nama_admin', $lokasi->nama_admin ?? '') }}" 
                   required
                   class="admin-input @error('nama_admin') border-red-500 @enderror"
                   placeholder="Contoh: Kak Sarah">
            @error('nama_admin')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Nomor WhatsApp -->
        <div>
            <label for="nomor_whatsapp" class="block text-sm font-medium text-gray-700 mb-2">Nomor WhatsApp *</label>
            <input type="text" 
                   name="nomor_whatsapp" 
                   id="nomor_whatsapp" 
                   value="{{ old('nomor_whatsapp', $lokasi->nomor_whatsapp ?? '') }}" 
                   required
                   class="admin-input @error('nomor_whatsapp') border-red-500 @enderror"
                   placeholder="Contoh: 6281234567890">
            <p class="mt-1 text-xs text-gray-500">Gunakan format internasional tanpa tanda + (contoh: 6281234567890)</p>
            @error('nomor_whatsapp')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Status Aktif -->
        <div>
            <label class="flex items-center gap-3 cursor-pointer">
                <input type="checkbox" 
                       name="aktif" 
                       value="1" 
                       {{ old('aktif', $lokasi->aktif ?? true) ? 'checked' : '' }}
                       class="w-5 h-5 rounded border-gray-300 text-terasa-button focus:ring-terasa-button">
                <span class="text-sm font-medium text-gray-700">Lokasi Aktif</span>
            </label>
            <p class="mt-1 text-xs text-gray-500 ml-8">Lokasi aktif akan tampil di pilihan pemesanan</p>
        </div>
        
        <!-- Buttons -->
        <div class="flex items-center gap-4 pt-4 border-t">
            <button type="submit" class="btn-primary">
                {{ isset($lokasi) ? 'Simpan Perubahan' : 'Tambah Lokasi' }}
            </button>
            <a href="{{ route('admin.lokasi.index') }}" class="btn-secondary">Batal</a>
        </div>
    </div>
</form>
@endsection
