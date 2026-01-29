@extends('layouts.app')

@section('title', 'Kontak - Terasa.Booster')

@section('content')
<!-- Header -->
<section class="bg-terasa-card py-16 px-4">
    <div class="max-w-6xl mx-auto text-center text-white">
        <h1 class="font-display text-4xl md:text-5xl mb-4">Hubungi Kami</h1>
        <p class="text-white/80 text-lg">Kami siap membantu Anda</p>
    </div>
</section>

<!-- Contact Content -->
<section class="py-16 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Locations -->
            <div>
                <h2 class="font-display text-2xl text-terasa-button mb-6">Lokasi Admin</h2>
                <p class="text-gray-600 mb-8">
                    Pilih lokasi terdekat dengan Anda untuk pemesanan dan konsultasi
                </p>
                
                <div class="space-y-4">
                    @forelse($lokasi as $loc)
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800 mb-1">{{ $loc->nama }}</h3>
                                <p class="text-terasa-button font-medium mb-2">{{ $loc->kota }}</p>
                                @if($loc->alamat)
                                <p class="text-gray-500 text-sm mb-3">{{ $loc->alamat }}</p>
                                @endif
                                @if($loc->nama_admin)
                                <p class="text-gray-500 text-sm">Admin: {{ $loc->nama_admin }}</p>
                                @endif
                            </div>
                            <a href="{{ $loc->link_whatsapp }}" 
                               target="_blank"
                               class="btn-whatsapp text-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                                </svg>
                                Hubungi
                            </a>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-12 bg-white rounded-xl shadow-lg">
                        <svg class="w-12 h-12 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                        <p class="text-gray-500">Belum ada lokasi terdaftar</p>
                    </div>
                    @endforelse
                </div>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h2 class="font-display text-2xl text-terasa-button mb-6">Informasi Kontak</h2>
                
                <div class="bg-terasa-card rounded-2xl p-8 text-white mb-8">
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Email</h3>
                                <p class="text-white/80">info@terasabooster.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Jam Operasional</h3>
                                <p class="text-white/80">Senin - Sabtu: 08:00 - 17:00 WIB</p>
                                <p class="text-white/80">Minggu: 09:00 - 15:00 WIB</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Area Layanan</h3>
                                <p class="text-white/80">Palembang, Jakarta, dan sekitarnya</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <h3 class="font-semibold text-gray-800 mb-4">Ikuti Kami</h3>
                <div class="flex gap-4">
                    @php
                        $instagram = \App\Models\KontenHome::ambil('instagram_url', '#');
                        $tiktok = \App\Models\KontenHome::ambil('tiktok_url', '#');
                    @endphp
                    <a href="{{ $instagram }}" target="_blank" 
                       class="w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-500 rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                        </svg>
                    </a>
                    <a href="{{ $tiktok }}" target="_blank" 
                       class="w-12 h-12 bg-black rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 px-4 bg-white/50">
    <div class="max-w-4xl mx-auto">
        <h2 class="font-display text-2xl md:text-3xl text-terasa-button text-center mb-8">
            Pertanyaan Umum
        </h2>
        
        <div class="space-y-4" x-data="{ open: null }">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <button @click="open = open === 1 ? null : 1" class="w-full px-6 py-4 text-left flex items-center justify-between">
                    <span class="font-medium text-gray-800">Bagaimana cara memesan produk?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': open === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open === 1" x-collapse class="px-6 pb-4 text-gray-600">
                    Anda dapat memesan produk dengan menghubungi admin kami melalui WhatsApp. Pilih lokasi admin terdekat dengan Anda, lalu klik tombol "Hubungi" untuk langsung terhubung.
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <button @click="open = open === 2 ? null : 2" class="w-full px-6 py-4 text-left flex items-center justify-between">
                    <span class="font-medium text-gray-800">Apakah produk aman untuk ibu menyusui?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': open === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open === 2" x-collapse class="px-6 pb-4 text-gray-600">
                    Ya, semua produk kami dibuat dari 100% bahan alami yang aman untuk ibu menyusui dan bayi. Produk kami telah melalui uji kualitas yang ketat.
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <button @click="open = open === 3 ? null : 3" class="w-full px-6 py-4 text-left flex items-center justify-between">
                    <span class="font-medium text-gray-800">Berapa lama pengiriman?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': open === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open === 3" x-collapse class="px-6 pb-4 text-gray-600">
                    Waktu pengiriman tergantung lokasi Anda. Untuk area Palembang dan Jakarta biasanya 1-2 hari kerja. Untuk area lainnya, silakan konsultasikan dengan admin kami.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
