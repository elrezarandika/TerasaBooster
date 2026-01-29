@extends('layouts.admin')

@section('title', 'Analytics')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-gray-800">Analytics & Monitoring</h1>
    <p class="text-gray-500">Pantau pengunjung dan performa website Anda</p>
</div>

<!-- Google Analytics Info -->
<div class="bg-white rounded-xl shadow-md p-6 mb-8">
    <div class="flex items-start gap-4">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
            </svg>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Google Analytics</h2>
            @if(config('services.google.analytics_id'))
            <p class="text-green-600 mb-4">
                <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Google Analytics aktif ({{ config('services.google.analytics_id') }})
            </p>
            @else
            <p class="text-orange-600 mb-4">
                <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
                Google Analytics belum dikonfigurasi
            </p>
            @endif
            <p class="text-gray-600 text-sm mb-4">
                Untuk melihat data lengkap pengunjung, buka Google Analytics Dashboard atau embed report di bawah.
            </p>
            <a href="https://analytics.google.com" target="_blank" 
               class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-medium">
                Buka Google Analytics
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
        </div>
    </div>
</div>

<!-- Setup Instructions -->
<div class="bg-white rounded-xl shadow-md p-6 mb-8">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Cara Setup Google Analytics</h2>
    
    <div class="space-y-6">
        <div class="flex gap-4">
            <div class="w-8 h-8 bg-terasa-card rounded-full flex items-center justify-center text-white font-semibold flex-shrink-0">
                1
            </div>
            <div>
                <h3 class="font-medium text-gray-800 mb-1">Buat Property di Google Analytics</h3>
                <p class="text-gray-600 text-sm">
                    Buka <a href="https://analytics.google.com" target="_blank" class="text-blue-600 hover:underline">Google Analytics</a>, 
                    buat property baru untuk website Anda dan dapatkan Measurement ID (format: G-XXXXXXXXXX).
                </p>
            </div>
        </div>
        
        <div class="flex gap-4">
            <div class="w-8 h-8 bg-terasa-card rounded-full flex items-center justify-center text-white font-semibold flex-shrink-0">
                2
            </div>
            <div>
                <h3 class="font-medium text-gray-800 mb-1">Tambahkan ke File .env</h3>
                <p class="text-gray-600 text-sm mb-2">
                    Buka file <code class="bg-gray-100 px-2 py-0.5 rounded">.env</code> dan tambahkan:
                </p>
                <pre class="bg-gray-800 text-green-400 p-4 rounded-lg text-sm overflow-x-auto">GOOGLE_ANALYTICS_ID=G-XXXXXXXXXX</pre>
            </div>
        </div>
        
        <div class="flex gap-4">
            <div class="w-8 h-8 bg-terasa-card rounded-full flex items-center justify-center text-white font-semibold flex-shrink-0">
                3
            </div>
            <div>
                <h3 class="font-medium text-gray-800 mb-1">Clear Cache</h3>
                <p class="text-gray-600 text-sm mb-2">
                    Jalankan command berikut untuk menerapkan perubahan:
                </p>
                <pre class="bg-gray-800 text-green-400 p-4 rounded-lg text-sm overflow-x-auto">php artisan config:clear</pre>
            </div>
        </div>
    </div>
</div>

<!-- Embedded Analytics (Looker Studio) -->
<div class="bg-white rounded-xl shadow-md p-6">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Real-time Analytics Dashboard</h2>
    
    <p class="text-gray-600 text-sm mb-4">
        Untuk menampilkan dashboard analytics langsung di sini, Anda dapat menggunakan Google Looker Studio (Data Studio) 
        dan embed report di bawah ini.
    </p>
    
    <div class="bg-gray-100 rounded-lg p-8 text-center">
        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
        </svg>
        <p class="text-gray-500 mb-4">Embed Google Looker Studio report di sini</p>
        <a href="https://lookerstudio.google.com" target="_blank" 
           class="inline-flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Buat Report di Looker Studio
        </a>
    </div>
    
    <div class="mt-6 p-4 bg-blue-50 rounded-lg">
        <h3 class="font-medium text-blue-800 mb-2">💡 Tips</h3>
        <ul class="text-blue-700 text-sm space-y-1">
            <li>• Buat report di Looker Studio dan hubungkan dengan Google Analytics Anda</li>
            <li>• Pilih "Embed report" untuk mendapatkan kode iframe</li>
            <li>• Tempelkan iframe di bagian ini untuk melihat data langsung</li>
        </ul>
    </div>
</div>
@endsection
