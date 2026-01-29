<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard Admin') - Terasa.Booster</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex" x-data="{ sidebarOpen: true }">
        <!-- Sidebar -->
        <aside :class="sidebarOpen ? 'w-64' : 'w-20'" 
               class="bg-terasa-card min-h-screen fixed left-0 top-0 transition-all duration-300 z-40">
            <div class="p-4">
                <!-- Logo -->
                <div class="flex items-center gap-3 mb-8">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12 rounded-full">
                    <span x-show="sidebarOpen" class="font-display text-white text-lg">Terasa.Booster</span>
                </div>
                
                <!-- Navigation -->
                <nav class="space-y-2">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="admin-nav-item flex items-center gap-3 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span x-show="sidebarOpen">Dashboard</span>
                    </a>
                    
                    <a href="{{ route('admin.analytics') }}" 
                       class="admin-nav-item flex items-center gap-3 {{ request()->routeIs('admin.analytics') ? 'active' : '' }}">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span x-show="sidebarOpen">Analytics</span>
                    </a>
                    
                    <a href="{{ route('admin.produk.index') }}" 
                       class="admin-nav-item flex items-center gap-3 {{ request()->routeIs('admin.produk.*') ? 'active' : '' }}">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                        <span x-show="sidebarOpen">Produk</span>
                    </a>
                    
                    <a href="{{ route('admin.artikel.index') }}" 
                       class="admin-nav-item flex items-center gap-3 {{ request()->routeIs('admin.artikel.*') ? 'active' : '' }}">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        <span x-show="sidebarOpen">Artikel</span>
                    </a>
                    
                    <a href="{{ route('admin.lokasi.index') }}" 
                       class="admin-nav-item flex items-center gap-3 {{ request()->routeIs('admin.lokasi.*') ? 'active' : '' }}">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span x-show="sidebarOpen">Lokasi</span>
                    </a>
                    
                    <a href="{{ route('admin.testimoni.index') }}" 
                       class="admin-nav-item flex items-center gap-3 {{ request()->routeIs('admin.testimoni.*') ? 'active' : '' }}">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <span x-show="sidebarOpen">Testimoni</span>
                    </a>
                    
                    <a href="{{ route('admin.konten-home.index') }}" 
                       class="admin-nav-item flex items-center gap-3 {{ request()->routeIs('admin.konten-home.*') ? 'active' : '' }}">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span x-show="sidebarOpen">Konten Home</span>
                    </a>
                    
                    <div class="border-t border-white/20 my-4"></div>
                    
                    <a href="{{ route('beranda') }}" 
                       class="admin-nav-item flex items-center gap-3">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                        <span x-show="sidebarOpen">Lihat Website</span>
                    </a>
                    
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="admin-nav-item flex items-center gap-3 w-full">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            <span x-show="sidebarOpen">Logout</span>
                        </button>
                    </form>
                </nav>
            </div>
        </aside>
        
        <!-- Main Content -->
        <main :class="sidebarOpen ? 'ml-64' : 'ml-20'" class="flex-1 transition-all duration-300">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm px-6 py-4 flex items-center justify-between">
                <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                
                <div class="flex items-center gap-4">
                    <span class="text-gray-600">{{ auth()->user()->name }}</span>
                    @if(auth()->user()->avatar)
                    <img src="{{ auth()->user()->avatar }}" alt="" class="w-8 h-8 rounded-full">
                    @else
                    <div class="w-8 h-8 rounded-full bg-terasa-card flex items-center justify-center text-white text-sm">
                        {{ substr(auth()->user()->name, 0, 1) }}
                    </div>
                    @endif
                </div>
            </header>
            
            <!-- Page Content -->
            <div class="p-6">
                @if(session('sukses'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center justify-between">
                    {{ session('sukses') }}
                    <button onclick="this.parentElement.remove()" class="text-green-700">&times;</button>
                </div>
                @endif
                
                @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6 flex items-center justify-between">
                    {{ session('error') }}
                    <button onclick="this.parentElement.remove()" class="text-red-700">&times;</button>
                </div>
                @endif
                
                @yield('content')
            </div>
        </main>
    </div>
    
    @stack('scripts')
</body>
</html>
