@extends('layouts.app')

@section('title', 'Tentang Kami - Terasa.Booster')

@section('content')
<!-- Header -->
<section class="bg-terasa-card py-16 px-4">
    <div class="max-w-6xl mx-auto text-center text-white">
        <h1 class="font-display text-4xl md:text-5xl mb-4">Tentang Kami</h1>
        <p class="text-white/80 text-lg">Mengenal lebih dekat Terasa.Booster</p>
    </div>
</section>

<!-- About Content -->
<section class="py-16 px-4">
    <div class="max-w-4xl mx-auto">
        <!-- Story -->
        <div class="card-pink p-8 md:p-12 text-white mb-12">
            <h2 class="font-display text-2xl md:text-3xl mb-6">Cerita Kami</h2>
            <div class="space-y-4 text-white/90">
                <p>
                    Terasa.Booster lahir dari keinginan untuk membantu para ibu menyusui di Indonesia 
                    mendapatkan produk ASI booster berkualitas tinggi dengan bahan-bahan alami.
                </p>
                <p>
                    Kami memahami betapa pentingnya masa menyusui bagi ibu dan bayi. Karena itu, 
                    kami berkomitmen untuk menyediakan produk yang tidak hanya efektif meningkatkan 
                    produksi ASI, tetapi juga aman dan lezat untuk dikonsumsi.
                </p>
                <p>
                    {!! nl2br(e($konten['about_short'] ?? 'Dengan tim yang berpengalaman dan dedikasi tinggi, kami terus berinovasi untuk memberikan yang terbaik bagi para ibu Indonesia.')) !!}
                </p>
            </div>
        </div>
        
        <!-- Values -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="text-center">
                <div class="w-20 h-20 bg-terasa-card rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-xl text-gray-800 mb-2">Penuh Kasih</h3>
                <p class="text-gray-600">Setiap produk dibuat dengan penuh kasih untuk ibu dan bayi</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-terasa-card rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-xl text-gray-800 mb-2">Terpercaya</h3>
                <p class="text-gray-600">Kualitas dan keamanan produk adalah prioritas utama kami</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-terasa-card rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-xl text-gray-800 mb-2">Alami</h3>
                <p class="text-gray-600">100% bahan alami tanpa pengawet berbahaya</p>
            </div>
        </div>
        
        <!-- Mission -->
        <div class="bg-white rounded-2xl p-8 md:p-12 shadow-lg">
            <h2 class="font-display text-2xl md:text-3xl text-terasa-button mb-6 text-center">Misi Kami</h2>
            <ul class="space-y-4">
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-terasa-button flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-700">Menyediakan produk ASI booster berkualitas tinggi yang aman dan efektif</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-terasa-button flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-700">Mendukung perjalanan menyusui setiap ibu dengan produk terbaik</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-terasa-button flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-700">Memberikan edukasi tentang pentingnya ASI dan nutrisi ibu menyusui</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-terasa-button flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-700">Menjadi partner terpercaya bagi keluarga Indonesia</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 px-4 bg-terasa-card">
    <div class="max-w-4xl mx-auto text-center text-white">
        <h2 class="font-display text-2xl md:text-3xl mb-6">
            Ingin Tahu Lebih Lanjut?
        </h2>
        <p class="text-white/80 mb-8">
            Hubungi kami untuk informasi lebih lanjut tentang produk dan layanan kami
        </p>
        <a href="{{ route('kontak') }}" class="btn-primary bg-white text-terasa-button hover:bg-gray-100">
            Hubungi Kami
        </a>
    </div>
</section>
@endsection
