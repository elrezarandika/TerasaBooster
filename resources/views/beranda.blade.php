@extends('layouts.app')

@section('title', 'Terasa.Booster - ASI Booster & Immune Booster')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Pink Background with Scallop - Centered 80% width -->
    <div class="absolute left-1/2 -translate-x-1/2 w-[92%] md:w-[85%] lg:w-4/5 top-0 bg-gradient-to-br from-terasa-card via-terasa-card to-terasa-button rounded-b-[60px] md:rounded-b-[100px] min-h-[85vh] overflow-visible z-0">
        <!-- Decorative Hearts - z-20 to stay on top -->
        <div class="absolute top-20 left-8 text-white/40 animate-pulse z-20">
            <span class="text-4xl">♥</span>
            <span class="text-2xl ml-2">♡</span>
        </div>
        <div class="absolute top-16 left-20 z-20">
            <span class="text-3xl text-white/30">♥</span>
        </div>
        <div class="absolute top-20 right-8 text-white/40 animate-pulse z-20" style="animation-delay: 0.5s;">
            <span class="text-2xl">♡</span>
            <span class="text-4xl ml-2">♥</span>
        </div>
        <div class="absolute top-32 right-24 z-20">
            <span class="text-2xl text-white/30">♡</span>
        </div>
        <div class="absolute bottom-40 left-12 hidden md:block z-20">
            <span class="text-5xl text-white/20">♥</span>
        </div>
        <div class="absolute bottom-32 right-16 hidden md:block z-20">
            <span class="text-4xl text-white/20">♡</span>
        </div>
        
        <!-- Scalloped Bottom Edge -->
        <div class="absolute -bottom-[30px] left-0 w-full h-[60px] overflow-visible z-10">
            <svg viewBox="0 0 1200 60" preserveAspectRatio="none" class="w-full h-full">
                <path d="M0,0 Q30,60 60,0 Q90,60 120,0 Q150,60 180,0 Q210,60 240,0 Q270,60 300,0 Q330,60 360,0 Q390,60 420,0 Q450,60 480,0 Q510,60 540,0 Q570,60 600,0 Q630,60 660,0 Q690,60 720,0 Q750,60 780,0 Q810,60 840,0 Q870,60 900,0 Q930,60 960,0 Q990,60 1020,0 Q1050,60 1080,0 Q1110,60 1140,0 Q1170,60 1200,0 L1200,60 L0,60 Z" fill="#F8F8E1"/>
            </svg>
        </div>
    </div>
    
    <div class="relative z-10 text-center px-4 pt-16 pb-32">
        <!-- Brand Name -->
        <div class="relative inline-block mb-6 fade-in">
            <h1 class="font-display text-5xl md:text-7xl lg:text-8xl text-white relative z-10 drop-shadow-lg">
                {{ $konten['hero_title'] ?? 'Terasa.Booster' }}
            </h1>
        </div>
        
        <!-- Tagline -->
        <p class="text-white/90 text-lg md:text-xl mb-2 uppercase tracking-wider fade-in delay-200">
            {{ $konten['hero_tagline'] ?? 'ASI Booster & Immune Booster Ter-Ngefek' }}
        </p>
        <p class="text-white/90 text-lg md:text-xl mb-12 uppercase tracking-wider fade-in delay-300">
            {{ $konten['hero_subtitle'] ?? 'Sejak Botol Pertama' }}
        </p>
        
        
    </div>
    
    <!-- Scroll Hint (Desktop Only) -->
    <div id="scroll-hint" class="hidden md:block absolute bottom-8 left-1/2 transform -translate-x-1/2 cursor-pointer scroll-hint transition-opacity duration-300">
        <div class="flex flex-col items-center text-terasa-button">
            <span class="text-sm mb-2 font-medium">Scroll ke bawah</span>
            <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</section>

<!-- Manfaat Section -->
<section class="py-24 px-4">
    <div class="max-w-6xl mx-auto">
        <h2 class="font-display text-3xl md:text-4xl text-terasa-button text-center mb-4 fade-in">
            Mengapa Memilih Terasa.Booster?
        </h2>
        <p class="text-gray-600 text-center mb-16 max-w-2xl mx-auto fade-in delay-100">
            Produk terbaik untuk mendampingi perjalanan menyusui Anda
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Manfaat 1 -->
            <div class="card-pink p-8 text-center text-white card-hover fade-in-scale delay-200">
                <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-xl mb-4">{{ $konten['manfaat_1_title'] ?? 'Meningkatkan Produksi ASI' }}</h3>
                <p class="text-white/80 leading-relaxed">{{ $konten['manfaat_1_desc'] ?? 'Formulasi alami yang terbukti membantu meningkatkan produksi ASI secara signifikan.' }}</p>
            </div>
            
            <!-- Manfaat 2 -->
            <div class="card-pink p-8 text-center text-white card-hover fade-in-scale delay-300">
                <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-xl mb-4">{{ $konten['manfaat_2_title'] ?? 'Meningkatkan Imunitas' }}</h3>
                <p class="text-white/80 leading-relaxed">{{ $konten['manfaat_2_desc'] ?? 'Memperkuat sistem kekebalan tubuh ibu dan bayi dengan nutrisi terbaik.' }}</p>
            </div>
            
            <!-- Manfaat 3 -->
            <div class="card-pink p-8 text-center text-white card-hover fade-in-scale delay-400">
                <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-xl mb-4">{{ $konten['manfaat_3_title'] ?? '100% Bahan Alami' }}</h3>
                <p class="text-white/80 leading-relaxed">{{ $konten['manfaat_3_desc'] ?? 'Dibuat dari bahan-bahan alami berkualitas tinggi tanpa pengawet berbahaya.' }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Produk Unggulan -->
<section class="py-24 px-4 bg-white/50">
    <div class="max-w-6xl mx-auto">
        <h2 class="font-display text-3xl md:text-4xl text-terasa-button text-center mb-4 fade-in">
            Produk Unggulan
        </h2>
        <p class="text-gray-600 text-center mb-16 max-w-2xl mx-auto fade-in delay-100">
            Pilihan terbaik untuk mendukung perjalanan menyusui Anda
        </p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($produkUnggulan as $index => $produk)
            <div class="card group card-hover fade-in-scale" style="transition-delay: {{ 0.2 + ($index * 0.1) }}s;">
                <div class="aspect-square overflow-hidden relative">
                    @if($produk->gambar)
                    <img src="{{ Storage::url($produk->gambar) }}" 
                         alt="{{ $produk->nama }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    @else
                    <div class="w-full h-full bg-gradient-to-br from-terasa-card to-terasa-button flex items-center justify-center">
                        <span class="text-white text-lg font-medium">{{ $produk->nama }}</span>
                    </div>
                    @endif
                    <!-- Overlay on hover -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2 group-hover:text-terasa-button transition-colors">{{ $produk->nama }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2 leading-relaxed">{{ Str::limit($produk->deskripsi, 80) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-terasa-button font-bold text-xl">{{ $produk->harga_rupiah }}</span>
                        <a href="{{ route('produk.detail', $produk->slug) }}" 
                           class="text-terasa-button hover:text-terasa-pink-dark font-medium transition-colors inline-flex items-center gap-1 group/link">
                            Detail 
                            <span class="group-hover/link:translate-x-1 transition-transform">→</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-16 fade-in">
            <a href="{{ route('katalog') }}" class="btn-primary inline-flex items-center gap-2">
                Lihat Semua Produk
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Testimoni Section -->
<section class="py-24 px-4">
    <div class="max-w-6xl mx-auto">
        <h2 class="font-display text-3xl md:text-4xl text-terasa-button text-center mb-4 fade-in">
            Testimoni Pelanggan
        </h2>
        <p class="text-gray-600 text-center mb-16 max-w-2xl mx-auto fade-in delay-100">
            Apa kata mereka tentang produk kami
        </p>
        
        @if($testimoniTerbaru->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($testimoniTerbaru as $index => $testi)
            <div class="testimonial-card card-hover fade-in-scale" style="transition-delay: {{ 0.2 + ($index * 0.1) }}s;">
                <div class="flex items-center gap-4 mb-4">
                    @if($testi->pengguna->avatar)
                    <img src="{{ $testi->pengguna->avatar }}" 
                         alt="{{ $testi->pengguna->name }}"
                         class="w-14 h-14 rounded-full object-cover ring-4 ring-terasa-card/20">
                    @else
                    <div class="w-14 h-14 rounded-full bg-gradient-to-br from-terasa-card to-terasa-button flex items-center justify-center text-white font-semibold text-lg">
                        {{ substr($testi->pengguna->name, 0, 1) }}
                    </div>
                    @endif
                    <div>
                        <h4 class="font-semibold text-gray-800">{{ $testi->pengguna->name }}</h4>
                        <div class="flex text-yellow-400 gap-0.5">
                            @for($i = 1; $i <= 5; $i++)
                            <svg class="w-4 h-4 {{ $i <= $testi->rating ? 'fill-current' : 'text-gray-300' }}" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            @endfor
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"{{ $testi->pesan }}"</p>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-12">
            <p class="text-gray-500">Belum ada testimoni.</p>
        </div>
        @endif
        
        <!-- Form Testimoni -->
        <div class="mt-16 max-w-xl mx-auto fade-in delay-400">
            <div class="card-pink p-8 rounded-3xl shadow-xl">
                <h3 class="font-semibold text-xl text-white text-center mb-6">Bagikan Pengalaman Anda</h3>
                
                @auth
                <form action="{{ route('testimoni.simpan') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <div class="rating-input flex justify-center gap-3">
                            <input type="hidden" name="rating" value="5">
                            @for($i = 1; $i <= 5; $i++)
                            <button type="button" class="star text-4xl {{ $i <= 5 ? 'text-yellow-400' : 'text-gray-300' }} hover:scale-125 transition-all duration-200">
                                ★
                            </button>
                            @endfor
                        </div>
                    </div>
                    <div class="mb-6">
                        <textarea name="pesan" rows="4" 
                                  placeholder="Ceritakan pengalaman Anda dengan produk kami..."
                                  class="form-input @error('pesan') border-red-500 @enderror"
                                  required>{{ old('pesan') }}</textarea>
                        @error('pesan')
                        <p class="text-red-200 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="w-full bg-white text-terasa-button font-semibold py-4 rounded-full hover:bg-gray-100 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        Kirim Testimoni
                    </button>
                </form>
                @else
                <div class="text-center">
                    <p class="text-white/80 mb-6">Login dengan Google untuk memberikan testimoni</p>
                    <a href="{{ route('auth.google') }}" class="inline-flex items-center gap-3 bg-white text-gray-700 font-semibold px-8 py-4 rounded-full hover:bg-gray-100 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <svg class="w-6 h-6" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Login dengan Google
                    </a>
                </div>
                @endauth
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 px-4 bg-gradient-to-br from-terasa-card via-terasa-button to-terasa-card relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-10 left-10 w-32 h-32 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 bg-white rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-white rounded-full blur-2xl"></div>
    </div>
    
    <div class="max-w-4xl mx-auto text-center text-white relative z-10">
        <h2 class="font-display text-3xl md:text-5xl mb-6 fade-in">
            Siap Memulai Perjalanan Menyusui yang Lebih Baik?
        </h2>
        <p class="text-white/90 text-lg md:text-xl mb-10 max-w-2xl mx-auto fade-in delay-100">
            Hubungi kami sekarang dan dapatkan produk ASI booster terbaik untuk Anda
        </p>
        <a href="{{ route('kontak') }}" class="btn-whatsapp text-lg glow-pink fade-in delay-200 transform hover:scale-105 transition-all duration-300">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            Hubungi via WhatsApp
        </a>
    </div>
</section>
@endsection
