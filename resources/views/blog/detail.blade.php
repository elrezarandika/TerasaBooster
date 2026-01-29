@extends('layouts.app')

@section('title', $artikel->judul . ' - Terasa.Booster')

@section('content')
<!-- Breadcrumb -->
<div class="bg-terasa-bg py-4 px-4">
    <div class="max-w-4xl mx-auto">
        <nav class="flex items-center gap-2 text-sm text-gray-500">
            <a href="{{ route('beranda') }}" class="hover:text-terasa-button">Home</a>
            <span>/</span>
            <a href="{{ route('blog') }}" class="hover:text-terasa-button">Blog</a>
            <span>/</span>
            <span class="text-terasa-button line-clamp-1">{{ $artikel->judul }}</span>
        </nav>
    </div>
</div>

<!-- Article Content -->
<article class="py-12 px-4">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <header class="mb-8">
            <h1 class="font-display text-3xl md:text-4xl text-terasa-button mb-4">
                {{ $artikel->judul }}
            </h1>
            
            <div class="flex items-center gap-4 text-gray-500">
                @if($artikel->penulis)
                <div class="flex items-center gap-2">
                    @if($artikel->penulis->avatar)
                    <img src="{{ $artikel->penulis->avatar }}" alt="{{ $artikel->penulis->name }}" class="w-8 h-8 rounded-full">
                    @else
                    <div class="w-8 h-8 rounded-full bg-terasa-card flex items-center justify-center text-white text-sm">
                        {{ substr($artikel->penulis->name, 0, 1) }}
                    </div>
                    @endif
                    <span>{{ $artikel->penulis->name }}</span>
                </div>
                @endif
                <span>•</span>
                <span>{{ $artikel->tanggal_publikasi?->format('d M Y') }}</span>
            </div>
        </header>
        
        <!-- Featured Image -->
        @if($artikel->gambar)
        <div class="mb-8 rounded-2xl overflow-hidden">
            <img src="{{ Storage::url($artikel->gambar) }}" 
                 alt="{{ $artikel->judul }}"
                 class="w-full aspect-video object-cover">
        </div>
        @endif
        
        <!-- Content -->
        <div class="prose prose-lg prose-pink max-w-none">
            {!! nl2br(e($artikel->konten)) !!}
        </div>
        
        <!-- Share -->
        <div class="mt-12 pt-8 border-t">
            <p class="text-gray-500 mb-4">Bagikan artikel ini:</p>
            <div class="flex gap-3">
                <a href="https://wa.me/?text={{ urlencode($artikel->judul . ' - ' . url()->current()) }}" 
                   target="_blank"
                   class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white hover:bg-green-600 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                    </svg>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                   target="_blank"
                   class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/>
                    </svg>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($artikel->judul) }}" 
                   target="_blank"
                   class="w-10 h-10 bg-black rounded-full flex items-center justify-center text-white hover:bg-gray-800 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</article>

<!-- Related Articles -->
@if($artikelTerkait->count() > 0)
<section class="py-16 px-4 bg-white/50">
    <div class="max-w-6xl mx-auto">
        <h2 class="font-display text-2xl md:text-3xl text-terasa-button text-center mb-8">
            Artikel Terkait
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($artikelTerkait as $related)
            <a href="{{ route('blog.detail', $related->slug) }}" class="card group">
                <div class="aspect-video overflow-hidden">
                    @if($related->gambar)
                    <img src="{{ Storage::url($related->gambar) }}" 
                         alt="{{ $related->judul }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                    <div class="w-full h-full bg-terasa-card flex items-center justify-center">
                        <svg class="w-8 h-8 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                    </div>
                    @endif
                </div>
                <div class="p-4">
                    <p class="text-xs text-gray-500 mb-2">{{ $related->tanggal_publikasi?->format('d M Y') }}</p>
                    <h3 class="font-medium text-gray-800 line-clamp-2 group-hover:text-terasa-button transition-colors">
                        {{ $related->judul }}
                    </h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
