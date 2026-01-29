@extends('layouts.app')

@section('title', 'Blog - Terasa.Booster')

@section('content')
<!-- Header -->
<section class="bg-terasa-card py-16 px-4">
    <div class="max-w-6xl mx-auto text-center text-white">
        <h1 class="font-display text-4xl md:text-5xl mb-4">Blog</h1>
        <p class="text-white/80 text-lg">Tips & informasi seputar ASI, kesehatan ibu menyusui, dan nutrisi</p>
    </div>
</section>

<!-- Articles Grid -->
<section class="py-16 px-4">
    <div class="max-w-6xl mx-auto">
        @if($artikels->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($artikels as $artikel)
            <article class="card group">
                <div class="aspect-video overflow-hidden">
                    @if($artikel->gambar)
                    <img src="{{ Storage::url($artikel->gambar) }}" 
                         alt="{{ $artikel->judul }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                    <div class="w-full h-full bg-terasa-card flex items-center justify-center">
                        <svg class="w-12 h-12 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span>{{ $artikel->tanggal_publikasi?->format('d M Y') }}</span>
                        @if($artikel->penulis)
                        <span>•</span>
                        <span>{{ $artikel->penulis->name }}</span>
                        @endif
                    </div>
                    <h2 class="font-semibold text-xl text-gray-800 mb-3 line-clamp-2 group-hover:text-terasa-button transition-colors">
                        {{ $artikel->judul }}
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                        {{ $artikel->ringkasan_singkat }}
                    </p>
                    <a href="{{ route('blog.detail', $artikel->slug) }}" 
                       class="text-terasa-button font-medium hover:text-terasa-pink-dark transition-colors inline-flex items-center gap-1">
                        Baca selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="mt-12">
            {{ $artikels->links() }}
        </div>
        @else
        <div class="text-center py-20">
            <div class="w-24 h-24 bg-terasa-card/20 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-12 h-12 text-terasa-card" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
            </div>
            <h3 class="text-xl text-gray-600 mb-2">Belum ada artikel</h3>
            <p class="text-gray-500">Artikel akan segera tersedia</p>
        </div>
        @endif
    </div>
</section>
@endsection
