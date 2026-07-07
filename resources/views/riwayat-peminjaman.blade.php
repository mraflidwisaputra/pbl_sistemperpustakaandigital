<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Peminjaman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-gray-50 overflow-x-hidden font-sans text-gray-800">
@include('components.sidebar')

<main class="ml-[210px] min-h-screen flex flex-col">
    @include('components.profilanggota')
    
     <section class="px-8 pt-0 pb-6">
        <div class="border-b border-gray-200 pb-4">
            <h1 class="text-2xl font-bold text-gray-900">Riwayat Peminjaman</h1>
            <p class="text-sm text-gray-500 mt-1">Laporan aktivitas peminjaman dan pengembalian buku perpustakaan.</p>
        </div>
    </section>

    <section class="px-8 pb-10 flex-1">
        @include('components.notification')

        <!-- KOTAK STATISTIK -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 mb-6">
            <div class="bg-white rounded-xl border border-gray-200 p-4 shadow-sm">
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Total Peminjaman</p>
                <h2 class="text-2xl font-bold text-gray-900 mt-2">{{ $totalPeminjaman }}</h2>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 p-4 shadow-sm">
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Sedang Dipinjam</p>
                <h2 class="text-2xl font-bold text-gray-900 mt-2">{{ $sedangDipinjam }}</h2>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 p-4 shadow-sm">
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Terlambat</p>
                <h2 class="text-2xl font-bold text-yellow-600 mt-2">{{ $terlambat }}</h2>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 p-4 shadow-sm">
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Buku Hilang</p>
                <h2 class="text-2xl font-bold text-red-600 mt-2">{{ $bukuHilang }}</h2>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 p-4 shadow-sm">
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Total Tagihan Denda</p>
                <h2 class="text-xl font-bold text-red-600 mt-2">Rp{{ number_format($totalDenda, 0, ',', '.') }}</h2>
            </div>
        </div>

        <!-- AREA FILTER & TABEL -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-4 border-b border-gray-200 bg-white">
                <form method="GET" action="{{ route('riwayat.peminjaman') }}" class="flex flex-col lg:flex-row gap-3 items-center w-full">
                    
                    <!-- INPUT PENCARIAN -->
                    <div class="relative flex-1 w-full lg:min-w-[250px]">
                        <i class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari judul buku atau kode booking..." class="w-full pl-9 pr-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- STATUS & TOMBOL CARI -->
                    <div class="flex flex-wrap lg:flex-nowrap gap-2 w-full lg:w-auto items-center">
                        <select name="status" class="flex-1 lg:flex-none px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 bg-white">
                            <option value="">Semua Status</option>
                            <option value="dipinjam" {{ request('status') == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                            <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                            <option value="terlambat" {{ request('status') == 'terlambat' ? 'selected' : '' }}>Terlambat</option>
                            <option value="buku hilang" {{ request('status') == 'buku hilang' ? 'selected' : '' }}>Buku Hilang</option>
                        </select>

                        <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition whitespace-nowrap">
                            Cari
                        </button>

                        @if(request('search') || request('status'))
                            <a href="{{ route('riwayat.peminjaman') }}" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium rounded-lg transition whitespace-nowrap">
                                Reset
                            </a>
                        @endif
                    </div>
                </form>
            </div>

            <!-- TABEL DENGAN LENGKUNGAN (rounded-xl) -->
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="text-[11px] text-gray-500 uppercase tracking-wider bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-4 py-4 text-center font-semibold">No</th>
                            <th class="px-4 py-4 font-semibold">Informasi Buku</th>
                            <th class="px-4 py-4 text-center font-semibold">Kategori</th>
                            <th class="px-4 py-4 text-center font-semibold">Kode Booking</th>
                            <th class="px-4 py-4 text-center font-semibold">Tanggal Pinjam</th>
                            <th class="px-4 py-4 text-center font-semibold">Tanggal Kembali</th>
                            <th class="px-4 py-4 text-right font-semibold">Denda</th>
                            <th class="px-4 py-4 text-center font-semibold">Status</th>
                            <th class="px-4 py-4 text-center font-semibold">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($riwayat as $item)
                        @php $status = strtolower(trim($item->status ?? '')); @endphp
                        <tr class="{{ $loop->even ? 'bg-gray-50/60' : 'bg-white' }} hover:bg-blue-50/50 transition-colors">
                            <td class="px-4 py-4 text-center text-gray-500">{{ $loop->iteration }}</td>
                            <td class="px-4 py-4">
                                <div class="flex items-start gap-3">
                                    @if($item->buku && $item->buku->cover)
                                        <img src="{{ asset('storage/' . $item->buku->cover) }}" class="w-10 h-14 object-cover rounded-md ring-1 ring-gray-200 shadow-sm shrink-0" alt="Cover">
                                    @else
                                        <div class="w-10 h-14 rounded-md ring-1 ring-gray-200 bg-gray-100 flex items-center justify-center text-gray-400 shrink-0">
                                            <i class="fa-solid fa-book"></i>
                                        </div>
                                    @endif
                                    <div class="min-w-0">
                                        <p class="font-bold text-gray-900 leading-tight text-[13px]">{{ $item->buku->judul ?? '-' }}</p>
                                        <p class="text-xs text-gray-500 mt-1">{{ $item->buku->penulis ?? '-' }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <span class="inline-block text-[11px] font-medium text-gray-600 bg-gray-100 px-2 py-1 rounded-full border border-gray-200">{{ $item->buku->kategori->nama_kategori ?? '-' }}</span>
                            </td>
                            <td class="px-4 py-4 text-center"><span class="font-mono text-xs font-semibold text-gray-700 bg-gray-100 px-2 py-1 rounded-md border border-gray-200">{{ $item->kode_booking ?? '-' }}</span></td>
                            <td class="px-4 py-4 text-center text-xs text-gray-700">{{ $item->tanggal_peminjaman ? \Carbon\Carbon::parse($item->tanggal_peminjaman)->format('d/m/Y') : '-' }}</td>
                            <td class="px-4 py-4 text-center text-xs {{ $status == 'terlambat' ? 'text-red-600 font-bold' : 'text-gray-700' }}">{{ $item->tanggal_pengembalian ? \Carbon\Carbon::parse($item->tanggal_pengembalian)->format('d/m/Y') : '-' }}</td>
                            <td class="px-4 py-4 text-right">
                                @if($item->denda > 0)
                                    @if($status == 'selesai')
                                        <span class="inline-flex items-center gap-1 text-green-700 bg-green-50 border border-green-200 px-2 py-0.5 rounded-full text-xs font-medium"><i class="fa-solid fa-check"></i> Lunas</span>
                                    @else
                                        <span class="text-red-600 font-semibold text-xs">Rp{{ number_format($item->denda, 0, ',', '.') }}</span>
                                    @endif
                                @else <span class="text-gray-400 text-xs">-</span> @endif
                            </td>
                            <td class="px-4 py-4 text-center">
                                @php
                                    $color = match($status) {
                                        'dipinjam' => 'bg-blue-50 text-blue-700 border-blue-200',
                                        'selesai' => 'bg-green-50 text-green-700 border-green-200',
                                        'terlambat' => 'bg-yellow-50 text-yellow-700 border-yellow-200',
                                        'buku hilang', 'dibatalkan' => 'bg-red-50 text-red-700 border-red-200',
                                        default => 'bg-purple-50 text-purple-700 border-purple-200'
                                    };
                                @endphp
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] border {{ $color }} font-semibold uppercase">
                                    {{ match($status) { 'menunggu konfirmasi', 'menunggu' => 'Menunggu', 'buku hilang' => 'Hilang', default => $status } }}
                                </span>
                            </td>
                            <td class="px-4 py-4 text-center">
                                @if($status == 'dipinjam' || $status == 'terlambat')
                                    <form action="{{ route('riwayat.hilang', $item->id) }}" method="POST" onsubmit="return confirm('Laporkan buku hilang?')">
                                        @csrf @method('PUT')
                                        <button type="submit" class="px-3 py-1.5 text-xs text-red-600 border border-red-200 hover:bg-red-50 rounded-lg font-medium transition">Laporkan Hilang</button>
                                    </form>
                                @else <span class="text-gray-300">-</span> @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center py-14 text-gray-400">
                                <i class="fa-solid fa-inbox text-3xl mb-2 block"></i>
                                Data riwayat tidak ditemukan.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="p-4 border-t border-gray-200 bg-gray-50 text-xs text-gray-500">
                Menampilkan total {{ $riwayat->count() }} data.
            </div>
        </div>
    </section>
    
    <div class="mt-auto">@include('components.footer')</div>
</main>
</body>
</html>
