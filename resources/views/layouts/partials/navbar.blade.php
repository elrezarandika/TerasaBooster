<!-- Navbar -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 ease-in-out navbar-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="{{ route('beranda') }}" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Terasa.Booster" style="height: 25%; width: 25%;">
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-10">
                <a href="{{ route('beranda') }}" class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ route('katalog') }}" class="nav-link {{ request()->routeIs('katalog') ? 'active' : '' }}">
                    Catalog
                </a>
                <a href="{{ route('blog') }}" class="nav-link {{ request()->routeIs('blog*') ? 'active' : '' }}">
                    Blog
                </a>
                <a href="{{ route('tentang-kami') }}" class="nav-link px-6 {{ request()->routeIs('tentang-kami') ? 'active' : '' }}">
                    About Us
                </a>
                <a href="{{ route('kontak') }}" class="btn-primary">
                    Contact
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2" x-data @click="$dispatch('toggle-mobile-menu')">
                <svg class="w-6 h-6 text-terasa-button" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div x-data="{ open: false }" @toggle-mobile-menu.window="open = !open"
         x-show="open" x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="md:hidden bg-white shadow-lg">
        <div class="px-4 py-4 space-y-3">
            <a href="{{ route('beranda') }}" class="block py-2 text-terasa-button font-medium">Home</a>
            <a href="{{ route('katalog') }}" class="block py-2 text-terasa-button font-medium">Catalog</a>
            <a href="{{ route('blog') }}" class="block py-2 text-terasa-button font-medium">Blog</a>
            <a href="{{ route('tentang-kami') }}" class="block py-2 text-terasa-button font-medium">About Us</a>
            <a href="{{ route('kontak') }}" class="btn-primary block text-center">Contact</a>
        </div>
    </div>
</nav>

<!-- Spacer for fixed navbar -->
<div class="h-20"></div>
