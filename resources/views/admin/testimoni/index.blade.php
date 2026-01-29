@extends('layouts.admin')

@section('title', 'Kelola Testimoni')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-gray-800">Kelola Testimoni</h1>
    <p class="text-gray-500">Moderasi testimoni dari pelanggan</p>
</div>

<!-- Tabs -->
<div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
    <div class="flex border-b">
        <a href="{{ route('admin.testimoni.index', ['status' => 'semua']) }}" 
           class="px-6 py-4 font-medium text-sm {{ !request('status') || request('status') == 'semua' ? 'text-terasa-button border-b-2 border-terasa-button' : 'text-gray-500 hover:text-gray-700' }}">
            Semua ({{ $jumlah['semua'] }})
        </a>
        <a href="{{ route('admin.testimoni.index', ['status' => 'menunggu']) }}" 
           class="px-6 py-4 font-medium text-sm {{ request('status') == 'menunggu' ? 'text-terasa-button border-b-2 border-terasa-button' : 'text-gray-500 hover:text-gray-700' }}">
            Menunggu ({{ $jumlah['menunggu'] }})
        </a>
        <a href="{{ route('admin.testimoni.index', ['status' => 'disetujui']) }}" 
           class="px-6 py-4 font-medium text-sm {{ request('status') == 'disetujui' ? 'text-terasa-button border-b-2 border-terasa-button' : 'text-gray-500 hover:text-gray-700' }}">
            Disetujui ({{ $jumlah['disetujui'] }})
        </a>
    </div>
</div>

<!-- Testimonials Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @forelse($testimonis as $testi)
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex items-start gap-4 mb-4">
            @if($testi->pengguna->avatar)
            <img src="{{ $testi->pengguna->avatar }}" alt="" class="w-12 h-12 rounded-full">
            @else
            <div class="w-12 h-12 rounded-full bg-terasa-card flex items-center justify-center text-white text-lg">
                {{ substr($testi->pengguna->name, 0, 1) }}
            </div>
            @endif
            <div class="flex-1">
                <h3 class="font-medium text-gray-800">{{ $testi->pengguna->name }}</h3>
                <p class="text-sm text-gray-500">{{ $testi->pengguna->email }}</p>
                <p class="text-xs text-gray-400">{{ $testi->created_at->diffForHumans() }}</p>
            </div>
            @if($testi->disetujui === null)
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                Menunggu
            </span>
            @elseif($testi->disetujui)
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                Disetujui
            </span>
            @else
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                Ditolak
            </span>
            @endif
        </div>
        
        <!-- Rating -->
        <div class="flex items-center gap-1 mb-3">
            @for($i = 1; $i <= 5; $i++)
            <svg class="w-5 h-5 {{ $i <= $testi->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            @endfor
        </div>
        
        <!-- Message -->
        <p class="text-gray-600 mb-4">{{ $testi->pesan }}</p>
        
        <!-- Actions -->
        <div class="flex items-center gap-2 pt-4 border-t">
            @if($testi->disetujui === null)
            <form action="{{ route('admin.testimoni.setujui', $testi->id) }}" method="POST" class="flex-1">
                @csrf
                <button type="submit" class="w-full py-2 bg-green-500 text-white rounded-lg text-sm hover:bg-green-600 transition-colors">
                    Setujui
                </button>
            </form>
            <form action="{{ route('admin.testimoni.tolak', $testi->id) }}" method="POST" class="flex-1">
                @csrf
                <button type="submit" class="w-full py-2 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition-colors">
                    Tolak
                </button>
            </form>
            @elseif($testi->disetujui)
            <form action="{{ route('admin.testimoni.batalkan', $testi->id) }}" method="POST" class="flex-1">
                @csrf
                <button type="submit" class="w-full py-2 bg-gray-500 text-white rounded-lg text-sm hover:bg-gray-600 transition-colors">
                    Batalkan Persetujuan
                </button>
            </form>
            @else
            <form action="{{ route('admin.testimoni.setujui', $testi->id) }}" method="POST" class="flex-1">
                @csrf
                <button type="submit" class="w-full py-2 bg-green-500 text-white rounded-lg text-sm hover:bg-green-600 transition-colors">
                    Setujui
                </button>
            </form>
            @endif
        </div>
    </div>
    @empty
    <div class="col-span-full bg-white rounded-xl shadow-md p-12 text-center text-gray-500">
        <svg class="w-12 h-12 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
        </svg>
        <p>Tidak ada testimoni {{ request('status') ? 'dengan status "' . request('status') . '"' : '' }}</p>
    </div>
    @endforelse
</div>

<!-- Pagination -->
@if($testimonis->hasPages())
<div class="mt-6">
    {{ $testimonis->appends(['status' => request('status')])->links() }}
</div>
@endif
@endsection
