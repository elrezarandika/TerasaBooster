@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
    <p class="text-gray-500">Selamat datang di panel admin Terasa.Booster</p>
</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="stat-card">
        <div class="flex items-center justify-between">
            <div>
                <p class="stat-number">{{ $statistik['total_produk'] }}</p>
                <p class="stat-label">Total Produk</p>
            </div>
            <div class="w-12 h-12 bg-terasa-card/20 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-terasa-card" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div>
        </div>
        <p class="text-xs text-green-600 mt-2">{{ $statistik['produk_aktif'] }} aktif</p>
    </div>
    
    <div class="stat-card">
        <div class="flex items-center justify-between">
            <div>
                <p class="stat-number">{{ $statistik['total_artikel'] }}</p>
                <p class="stat-label">Total Artikel</p>
            </div>
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
            </div>
        </div>
        <p class="text-xs text-green-600 mt-2">{{ $statistik['artikel_dipublikasikan'] }} dipublikasikan</p>
    </div>
    
    <div class="stat-card">
        <div class="flex items-center justify-between">
            <div>
                <p class="stat-number">{{ $statistik['total_testimoni'] }}</p>
                <p class="stat-label">Total Testimoni</p>
            </div>
            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
            </div>
        </div>
        @if($statistik['testimoni_menunggu'] > 0)
        <p class="text-xs text-orange-600 mt-2">{{ $statistik['testimoni_menunggu'] }} menunggu persetujuan</p>
        @else
        <p class="text-xs text-gray-400 mt-2">Semua testimoni diproses</p>
        @endif
    </div>
    
    <div class="stat-card">
        <div class="flex items-center justify-between">
            <div>
                <p class="stat-number">{{ $statistik['total_lokasi'] }}</p>
                <p class="stat-label">Lokasi Admin</p>
            </div>
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions & Pending Testimonials -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Quick Actions -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Aksi Cepat</h2>
        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('admin.produk.tambah') }}" 
               class="flex items-center gap-3 p-4 bg-terasa-card/10 rounded-lg hover:bg-terasa-card/20 transition-colors">
                <svg class="w-8 h-8 text-terasa-card" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="font-medium text-gray-700">Tambah Produk</span>
            </a>
            
            <a href="{{ route('admin.artikel.tambah') }}" 
               class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="font-medium text-gray-700">Tambah Artikel</span>
            </a>
            
            <a href="{{ route('admin.lokasi.tambah') }}" 
               class="flex items-center gap-3 p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="font-medium text-gray-700">Tambah Lokasi</span>
            </a>
            
            <a href="{{ route('admin.analytics') }}" 
               class="flex items-center gap-3 p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                <span class="font-medium text-gray-700">Lihat Analytics</span>
            </a>
        </div>
    </div>
    
    <!-- Pending Testimonials -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Testimoni Menunggu</h2>
            <a href="{{ route('admin.testimoni.index', ['status' => 'menunggu']) }}" class="text-terasa-button text-sm hover:underline">
                Lihat Semua
            </a>
        </div>
        
        @if($testimoniMenunggu->count() > 0)
        <div class="space-y-4">
            @foreach($testimoniMenunggu as $testi)
            <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                @if($testi->pengguna->avatar)
                <img src="{{ $testi->pengguna->avatar }}" alt="" class="w-10 h-10 rounded-full">
                @else
                <div class="w-10 h-10 rounded-full bg-terasa-card flex items-center justify-center text-white text-sm">
                    {{ substr($testi->pengguna->name, 0, 1) }}
                </div>
                @endif
                <div class="flex-1">
                    <p class="font-medium text-gray-800 text-sm">{{ $testi->pengguna->name }}</p>
                    <p class="text-gray-600 text-sm line-clamp-2">{{ $testi->pesan }}</p>
                    <div class="flex gap-2 mt-2">
                        <form action="{{ route('admin.testimoni.setujui', $testi->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-xs bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">
                                Setujui
                            </button>
                        </form>
                        <form action="{{ route('admin.testimoni.tolak', $testi->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-xs bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                                Tolak
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-8 text-gray-500">
            <svg class="w-12 h-12 mx-auto text-gray-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p>Tidak ada testimoni yang menunggu</p>
        </div>
        @endif
    </div>
</div>
@endsection
