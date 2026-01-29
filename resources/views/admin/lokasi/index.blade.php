@extends('layouts.admin')

@section('title', 'Kelola Lokasi')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Kelola Lokasi Admin</h1>
        <p class="text-gray-500">Daftar lokasi dan admin WhatsApp untuk pemesanan</p>
    </div>
    <a href="{{ route('admin.lokasi.tambah') }}" class="btn-primary flex items-center gap-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        Tambah Lokasi
    </a>
</div>

<!-- Location Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($lokasis as $lokasi)
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-6">
            <div class="flex items-start justify-between mb-4">
                <div>
                    <h3 class="font-semibold text-gray-800">{{ $lokasi->nama }}</h3>
                    <p class="text-sm text-gray-500">{{ $lokasi->kota }}</p>
                </div>
                @if($lokasi->aktif)
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                    Aktif
                </span>
                @else
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                    Nonaktif
                </span>
                @endif
            </div>
            
            <div class="space-y-2 text-sm text-gray-600 mb-4">
                <div class="flex items-start gap-2">
                    <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    </svg>
                    <span class="line-clamp-2">{{ $lokasi->alamat }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>{{ $lokasi->nama_admin }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 flex-shrink-0 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    <span>{{ $lokasi->nomor_whatsapp }}</span>
                </div>
            </div>
            
            <div class="flex items-center gap-2 pt-4 border-t">
                <a href="{{ $lokasi->link_whatsapp }}" target="_blank" 
                   class="flex-1 text-center py-2 bg-green-500 text-white rounded-lg text-sm hover:bg-green-600 transition-colors">
                    Test WhatsApp
                </a>
                <a href="{{ route('admin.lokasi.edit', $lokasi->id) }}" 
                   class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </a>
                <form action="{{ route('admin.lokasi.hapus', $lokasi->id) }}" method="POST" 
                      onsubmit="return confirm('Yakin ingin menghapus lokasi ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full bg-white rounded-xl shadow-md p-12 text-center text-gray-500">
        <svg class="w-12 h-12 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
        </svg>
        <p>Belum ada lokasi admin</p>
        <a href="{{ route('admin.lokasi.tambah') }}" class="text-terasa-button hover:underline mt-2 inline-block">
            Tambah lokasi pertama
        </a>
    </div>
    @endforelse
</div>

<!-- Pagination -->
@if($lokasis->hasPages())
<div class="mt-6">
    {{ $lokasis->links() }}
</div>
@endif
@endsection
