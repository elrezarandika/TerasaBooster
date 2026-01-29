@extends('layouts.app')

@section('title', 'Katalog Produk - Terasa.Booster')

@section('content')
<!-- Header -->
<section class="bg-terasa-card py-16 px-4">
    <div class="max-w-6xl mx-auto text-center text-white">
        <h1 class="font-display text-4xl md:text-5xl mb-4">Katalog Produk</h1>
        <p class="text-white/80 text-lg">Pilih produk terbaik untuk perjalanan menyusui Anda</p>
    </div>
</section>

<!-- Products Grid -->
<section class="py-16 px-4">
    <div class="max-w-6xl mx-auto">
        @if($produk->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($produk as $item)
            <div class="card group">
                <div class="aspect-square overflow-hidden relative">
                    @if($item->gambar)
                    <img src="{{ Storage::url($item->gambar) }}" 
                         alt="{{ $item->nama }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                    <div class="w-full h-full bg-terasa-card flex items-center justify-center">
                        <span class="text-white text-lg font-medium">{{ $item->nama }}</span>
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-xl text-gray-800 mb-2">{{ $item->nama }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ Str::limit($item->deskripsi, 100) }}</p>
                    
                    @if($item->manfaat)
                    <div class="mb-4">
                        <p class="text-xs text-terasa-button font-medium mb-1">Manfaat:</p>
                        <p class="text-gray-500 text-sm line-clamp-2">{{ Str::limit($item->manfaat, 80) }}</p>
                    </div>
                    @endif
                    
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-terasa-button font-bold text-xl">{{ $item->harga_rupiah }}</span>
                    </div>
                    
                    <!-- WhatsApp Order Button -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="w-full btn-whatsapp justify-center">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Order via WhatsApp
                        </button>
                        
                        <!-- Location Dropdown -->
                        <div x-show="open" @click.away="open = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-1"
                             class="absolute bottom-full left-0 right-0 mb-2 bg-white rounded-lg shadow-xl border z-20">
                            <p class="text-gray-500 text-xs p-3 border-b">Pilih lokasi admin:</p>
                            @foreach($lokasi as $loc)
                            <a href="{{ $loc->linkWhatsappDenganPesan('Halo, saya ingin memesan produk: ' . $item->nama . ' (' . $item->harga_rupiah . ')') }}" 
                               target="_blank"
                               class="flex items-center gap-2 px-4 py-3 hover:bg-gray-50 transition-colors">
                                <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                                </svg>
                                <span class="text-gray-700 text-sm font-medium">{{ $loc->nama }} - {{ $loc->kota }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-20">
            <div class="w-24 h-24 bg-terasa-card/20 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-12 h-12 text-terasa-card" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                </svg>
            </div>
            <h3 class="text-xl text-gray-600 mb-2">Belum ada produk</h3>
            <p class="text-gray-500">Produk akan segera tersedia</p>
        </div>
        @endif
    </div>
</section>

<!-- Contact CTA -->
<section class="py-16 px-4 bg-white/50">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="font-display text-2xl md:text-3xl text-terasa-button mb-4">
            Butuh Bantuan Memilih Produk?
        </h2>
        <p class="text-gray-600 mb-6">
            Tim kami siap membantu Anda menemukan produk yang tepat
        </p>
        <a href="{{ route('kontak') }}" class="btn-primary">
            Hubungi Kami
        </a>
    </div>
</section>
@endsection
