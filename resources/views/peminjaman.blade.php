<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman - Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="bg-[#f4f7fb] font-sans text-slate-900">
@include('components.sidebarAdmin')

<div class="ml-[210px] min-h-screen px-4 py-3">
    <main>@include('components.profiladmin')</main>
    
    @include('components.notification')

    <!-- KOTAK STATISTIK -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-5">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
            <p class="text-sm text-gray-500">Total Peminjaman</p>
            <h2 class="text-3xl font-bold text-slate-900 mt-2">{{ $peminjaman->count() }}</h2>
            <p class="text-xs text-gray-500">Buku</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
            <p class="text-sm text-gray-500">Menunggu</p>
            <h2 class="text-3xl font-bold text-yellow-600 mt-2">{{ $peminjaman->filter(fn($item) => in_array(strtolower(trim($item->status ?? '')), ['menunggu', 'menunggu konfirmasi']))->count() }}</h2>
            <p class="text-xs text-gray-500">Booking Buku</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
            <p class="text-sm text-gray-500">Sedang Dipinjam</p>
            <h2 class="text-3xl font-bold text-blue-600 mt-2">{{ $peminjaman->filter(fn($item) => strtolower(trim($item->status ?? '')) == 'dipinjam')->count() }}</h2>
            <p class="text-xs text-gray-500">Buku</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
            <p class="text-sm text-gray-500">Buku Hilang</p>
            <h2 class="text-3xl font-bold text-red-600 mt-2">{{ $peminjaman->filter(fn($item) => strtolower(trim($item->status ?? '')) == 'buku hilang')->count() }}</h2>
            <p class="text-xs text-gray-500">Dilaporkan</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
            <p class="text-sm text-gray-500">Selesai</p>
            <h2 class="text-3xl font-bold text-green-600 mt-2">{{ $peminjaman->filter(fn($item) => strtolower(trim($item->status ?? '')) == 'selesai')->count() }}</h2>
            <p class="text-xs text-gray-500">Dikembalikan</p>
        </div>
    </div>

    <!-- KONTEN -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
        <form action="{{ route('peminjaman.index') }}" method="GET" class="mb-4 flex items-center gap-2">
            <input type="text" name="search" value="{{ request('search') }}" class="flex-1 h-9 px-3 text-sm bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500" placeholder="Cari kode booking, nama, judul buku...">
            <select name="status" class="h-9 px-3 text-sm bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500">
                <option value="">Semua Status</option>
                <option value="menunggu konfirmasi" {{ request('status') == 'menunggu konfirmasi' ? 'selected' : '' }}>Menunggu</option>
                <option value="dipinjam" {{ request('status') == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                <option value="buku hilang" {{ request('status') == 'buku hilang' ? 'selected' : '' }}>Buku Hilang</option>
                <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                <option value="terlambat" {{ request('status') == 'terlambat' ? 'selected' : '' }}>Terlambat</option>
            </select>
            <button type="submit" class="h-9 px-4 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700 transition">Cari</button>
            <a href="{{ route('peminjaman.index') }}" class="h-9 px-4 flex items-center bg-gray-500 text-white text-sm font-semibold rounded-lg hover:bg-gray-600 transition">Reset</a>
        </form>

        <!-- TABEL FIT LAYAR (TANPA SCROLL HORIZONTAL) -->
        <div class="rounded-lg border border-gray-200 overflow-hidden">
            <table class="w-full text-[10px] text-left text-gray-600">
                <thead class="bg-gray-50 text-gray-700 uppercase">
                    <tr>
                        <th class="px-2 py-2 text-center">No</th>
                        <th class="px-2 py-2">Booking</th>
                        <th class="px-2 py-2">Peminjam</th>
                        <th class="px-2 py-2">Judul</th>
                        <th class="px-2 py-2">Kategori</th>
                        <th class="px-2 py-2 text-center">Thn</th>
                        <th class="px-2 py-2">Penerbit</th>
                        <th class="px-2 py-2 text-center">Denda</th>
                        <th class="px-2 py-2 text-center">Pinjam</th>
                        <th class="px-2 py-2 text-center">Kembali</th>
                        <th class="px-2 py-2 text-center">Batas</th>
                        <th class="px-2 py-2 text-center">Status</th>
                        <th class="px-2 py-2 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($peminjaman as $item)
                        @php $status = strtolower(trim($item->status ?? '')); @endphp
                        <tr class="bg-white hover:bg-gray-50 transition">
                            <td class="px-2 py-2 text-center font-semibold text-gray-900">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-2 py-2 whitespace-nowrap">
                                <span class="inline-flex px-1.5 py-1 rounded bg-slate-100 text-slate-700 font-bold">{{ $item->kode_booking ?? '-' }}</span>
                            </td>
                            <td class="px-2 py-2 whitespace-nowrap">
                                <div class="font-semibold text-gray-900">{{ $item->nama_anggota ?? '-' }}</div>
                                <div class="text-[9px] text-gray-500">{{ $item->nim ?? '-' }}</div>
                            </td>
                            <td class="px-2 py-2 font-semibold text-gray-900 leading-tight min-w-[100px]">
                                {{ $item->judul ?? '-' }}
                            </td>
                            <td class="px-2 py-2 whitespace-nowrap">
                                {{ $item->nama_kategori ?? '-' }}
                            </td>
                            <td class="px-2 py-2 text-center">
                                {{ $item->tahun_terbit ?? '-' }}
                            </td>
                            <td class="px-2 py-2 leading-tight min-w-[70px]">
                                {{ $item->penerbit ?? '-' }}
                            </td>
                            <td class="px-2 py-2 text-center whitespace-nowrap font-semibold {{ $item->denda > 0 ? 'text-red-600' : 'text-gray-500' }}">
                                Rp{{ number_format($item->denda ?? 0, 0, ',', '.') }}
                            </td>
                            <td class="px-2 py-2 text-center whitespace-nowrap text-[9px]">
                                {{ $item->tanggal_peminjaman ? \Carbon\Carbon::parse($item->tanggal_peminjaman)->format('d/m/y') : '-' }}
                            </td>
                            <td class="px-2 py-2 text-center whitespace-nowrap text-[9px]">
                                {{ $item->tanggal_pengembalian ? \Carbon\Carbon::parse($item->tanggal_pengembalian)->format('d/m/y') : '-' }}
                            </td>
                            <td class="px-2 py-2 text-center whitespace-nowrap text-[9px]">
                                {{ $item->batas_pengambilan ? \Carbon\Carbon::parse($item->batas_pengambilan)->format('d/m/y H:i') : '-' }}
                            </td>
                            <td class="px-2 py-2 text-center whitespace-nowrap">
                                @if($status == 'menunggu konfirmasi' || $status == 'menunggu')
                                    <span class="bg-yellow-100 text-yellow-700 px-1.5 py-1 rounded-full font-bold">Menunggu</span>
                                @elseif($status == 'dipinjam')
                                    <span class="bg-blue-100 text-blue-700 px-1.5 py-1 rounded-full font-bold">Dipinjam</span>
                                @elseif($status == 'buku hilang')
                                    <span class="bg-red-100 text-red-700 px-1.5 py-1 rounded-full font-bold">Hilang</span>
                                @elseif($status == 'selesai')
                                    <span class="bg-green-100 text-green-700 px-1.5 py-1 rounded-full font-bold">Selesai</span>
                                @elseif($status == 'terlambat')
                                    <span class="bg-orange-100 text-orange-700 px-1.5 py-1 rounded-full font-bold">Terlambat</span>
                                @else
                                    <span class="bg-gray-100 text-gray-700 px-1.5 py-1 rounded-full font-bold">{{ $item->status ?? '-' }}</span>
                                @endif
                            </td>
                            <td class="px-2 py-2 text-center whitespace-nowrap">
                                @if(($status == 'menunggu konfirmasi' || $status == 'menunggu') && (!$item->batas_pengambilan || now()->lt(\Carbon\Carbon::parse($item->batas_pengambilan))))
                                    <form action="{{ route('peminjaman.konfirmasi', $item->id) }}" method="POST" onsubmit="return confirm('Terima peminjaman ini?')">
                                        @csrf @method('PUT')
                                        <button type="submit" class="px-2 py-1 text-[9px] font-bold text-white bg-green-600 rounded hover:bg-green-700 transition">Terima</button>
                                    </form>
                                @elseif($status == 'dipinjam' || $status == 'terlambat' || $status == 'buku hilang')
                                    <form action="{{ route('peminjaman.kembali', $item->id) }}" method="POST" onsubmit="return confirm('Buku dikembalikan? {{ $item->denda > 0 ? "Pastikan denda Rp".number_format($item->denda, 0, ',', '.')." telah dibayar." : "" }}')">
                                        @csrf @method('PUT')
                                        <button type="submit" class="px-2 py-1 text-[9px] font-bold text-white bg-blue-600 rounded hover:bg-blue-700 transition">Selesai</button>
                                    </form>
                                @else
                                    <span class="text-[10px] text-gray-400">-</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="13" class="px-4 py-8 text-center text-gray-500">Tidak ada data peminjaman buku.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>
