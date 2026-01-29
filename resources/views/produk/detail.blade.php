@extends('layouts.app')

@section('title', $produk->nama . ' - Terasa.Booster')

@section('content')
<!-- Breadcrumb -->
<div class="bg-terasa-bg py-4 px-4">
    <div class="max-w-6xl mx-auto">
        <nav class="flex items-center gap-2 text-sm text-gray-500">
            <a href="{{ route('beranda') }}" class="hover:text-terasa-button">Home</a>
            <span>/</span>
            <a href="{{ route('katalog') }}" class="hover:text-terasa-button">Katalog</a>
            <span>/</span>
            <span class="text-terasa-button">{{ $produk->nama }}</span>
        </nav>
    </div>
</div>

<!-- Product Detail -->
<section class="py-12 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Image -->
            <div class="card overflow-hidden">
                @if($produk->gambar)
                <img src="{{ Storage::url($produk->gambar) }}" 
                     alt="{{ $produk->nama }}"
                     class="w-full aspect-square object-cover">
                @else
                <div class="w-full aspect-square bg-terasa-card flex items-center justify-center">
                    <span class="text-white text-2xl font-medium">{{ $produk->nama }}</span>
                </div>
                @endif
            </div>
            
            <!-- Product Info -->
            <div>
                <h1 class="font-display text-3xl md:text-4xl text-terasa-button mb-4">
                    {{ $produk->nama }}
                </h1>
                
                <div class="text-3xl font-bold text-terasa-button mb-6">
                    {{ $produk->harga_rupiah }}
                </div>
                
                <div class="prose prose-pink max-w-none mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Deskripsi</h3>
                    <p class="text-gray-600">{{ $produk->deskripsi }}</p>
                </div>
                
                @if($produk->manfaat)
                <div class="bg-terasa-card/10 rounded-xl p-6 mb-6">
                    <h3 class="text-lg font-semibold text-terasa-button mb-3 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Manfaat
                    </h3>
                    <p class="text-gray-600">{{ $produk->manfaat }}</p>
                </div>
                @endif
                
                <!-- Order Section -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="font-semibold text-gray-800 mb-4">Pesan Sekarang via WhatsApp</h3>
                    <p class="text-gray-500 text-sm mb-4">Pilih lokasi admin terdekat:</p>
                    
                    <div class="space-y-3">
                        @foreach($lokasi as $loc)
                        <a href="{{ $loc->linkWhatsappDenganPesan('Halo, saya ingin memesan produk: ' . $produk->nama . ' (' . $produk->harga_rupiah . ')') }}" 
                           target="_blank"
                           class="flex items-center justify-between p-4 border-2 border-green-100 rounded-xl hover:border-green-500 hover:bg-green-50 transition-all group">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center group-hover:bg-green-500 transition-colors">
                                    <svg class="w-5 h-5 text-green-600 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800">{{ $loc->nama }}</p>
                                    <p class="text-sm text-gray-500">{{ $loc->kota }}</p>
                                </div>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
@if($produkLain->count() > 0)
<section class="py-16 px-4 bg-white/50">
    <div class="max-w-6xl mx-auto">
        <h2 class="font-display text-2xl md:text-3xl text-terasa-button text-center mb-8">
            Produk Lainnya
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($produkLain as $item)
            <a href="{{ route('produk.detail', $item->slug) }}" class="card group">
                <div class="aspect-square overflow-hidden">
                    @if($item->gambar)
                    <img src="{{ Storage::url($item->gambar) }}" 
                         alt="{{ $item->nama }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                    <div class="w-full h-full bg-terasa-card flex items-center justify-center">
                        <span class="text-white text-sm">{{ $item->nama }}</span>
                    </div>
                    @endif
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-gray-800 mb-1">{{ $item->nama }}</h3>
                    <p class="text-terasa-button font-semibold">{{ $item->harga_rupiah }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
