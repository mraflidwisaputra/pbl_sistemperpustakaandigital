<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan - Perpustakaan Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        @media print {
            aside, .no-print { display: none !important; }
            body { background: white !important; }
            .content-wrapper { margin-left: 0 !important; }
            main { padding: 0 !important; }
        }
    </style>
</head>
<body class="bg-slate-100 overflow-x-hidden font-sans">
@include('components.sidebarAdmin')

<div class="content-wrapper min-h-screen pl-[230px]">
    <main class="w-full px-6 py-6 pb-8">
    @include('components.profiladmin')

        @if($isCetakBulanan)
            <div class="mb-5 bg-white rounded-xl shadow-sm border border-gray-100 p-4">
                <h1 class="text-xl font-extrabold text-slate-900 text-center">LAPORAN PEMINJAMAN BULANAN</h1>
                <p class="text-center text-gray-600 mt-2 text-sm">
                    Periode: {{ \Carbon\Carbon::parse($tanggalAwal)->translatedFormat('d F Y') }} - {{ \Carbon\Carbon::parse($tanggalAkhir)->translatedFormat('d F Y') }}
                </p>
            </div>
        @endif

        <div class="mb-5 -mt-6">
            <h1 class="text-2xl font-extrabold text-slate-900">Laporan</h1>
            <p class="text-sm text-gray-500 mt-1">Data laporan peminjaman dan pengembalian buku.</p>
        </div>

        <!-- KOTAK STATISTIK MENJADI 5 (DITAMBAH BUKU HILANG) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 mb-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                <p class="text-gray-500 text-sm mb-2">Total Peminjaman</p>
                <h2 class="text-2xl font-extrabold text-slate-900">{{ $totalPeminjaman }}</h2>
                <p class="text-gray-500 text-sm mt-1">Transaksi</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                <p class="text-gray-500 text-sm mb-2">Selesai</p>
                <h2 class="text-2xl font-extrabold text-green-600">{{ $bukuDikembalikan }}</h2>
                <p class="text-gray-500 text-sm mt-1">Dikembalikan</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                <p class="text-gray-500 text-sm mb-2">Terlambat</p>
                <h2 class="text-2xl font-extrabold text-yellow-600">{{ $terlambat }}</h2>
                <p class="text-gray-500 text-sm mt-1">Peminjaman</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                <p class="text-gray-500 text-sm mb-2">Buku Hilang</p>
                <h2 class="text-2xl font-extrabold text-red-600">{{ $bukuHilang }}</h2>
                <p class="text-gray-500 text-sm mt-1">Laporan</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                <p class="text-gray-500 text-sm mb-2">Total Denda</p>
                <h2 class="text-2xl font-extrabold text-red-600">Rp{{ number_format($totalDenda, 0, ',', '.') }}</h2>
                <p class="text-gray-500 text-sm mt-1">Denda</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 mb-4">
                <div>
                    <h2 class="text-xl font-bold text-slate-900">Riwayat Peminjaman</h2>
                    <p class="text-gray-500 text-sm mt-1">Cari dan cetak laporan peminjaman buku bulanan.</p>
                </div>
                <a href="/laporan?cetak=bulanan" class="no-print inline-flex items-center justify-center gap-2 px-3 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 shadow-sm transition">
                    <i class="fa-solid fa-print"></i> Cetak Bulanan
                </a>
            </div>

            <form action="/laporan" method="GET" class="no-print grid grid-cols-1 md:grid-cols-11 gap-3 mb-4">
                <div class="md:col-span-6">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari anggota atau buku..." class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 px-3 py-2.5">
                </div>
                <div class="md:col-span-3">
                    <select name="status" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 px-3 py-2.5">
                        <option value="">Semua Status</option>
                        <option value="Dipinjam" {{ request('status') == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                        <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        <option value="Terlambat" {{ request('status') == 'Terlambat' ? 'selected' : '' }}>Terlambat</option>
                        <option value="Buku Hilang" {{ request('status') == 'Buku Hilang' ? 'selected' : '' }}>Buku Hilang</option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-lg px-4 py-2.5 flex items-center justify-center gap-2 shadow-sm transition"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
                </div>
            </form>

            <div class="w-full max-h-[450px] overflow-auto rounded-lg border border-gray-200">
                <table class="w-full table-fixed text-xs text-left text-gray-600">
                    <thead class="uppercase bg-gray-50 text-gray-700 sticky top-0 z-10">
                    <tr>
                        <th class="w-10 px-3 py-3 text-center">No</th>
                        <th class="w-28 px-3 py-3">Tanggal</th>
                        <th class="w-32 px-3 py-3">Anggota</th>
                        <th class="w-44 px-3 py-3">Judul Buku</th>
                        <th class="w-28 px-3 py-3 text-center">Kembali</th>
                        <th class="w-28 px-3 py-3 text-center">Status</th>
                        <th class="w-24 px-3 py-3 text-right">Denda</th>
                        <th class="px-3 py-3">Keterangan</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @forelse($laporan as $item)
                        @php $statusItem = strtolower(trim($item->status ?? '')); @endphp
                        <tr class="bg-white hover:bg-gray-50 transition">
                            <td class="px-3 py-3 text-center font-semibold text-gray-900">{{ $loop->iteration }}</td>
                            <td class="px-3 py-3 truncate">{{ $item->tanggal_pinjam }}</td>
                            <td class="px-3 py-3 font-bold text-gray-900 truncate">{{ $item->nama_anggota }}</td>
                            <td class="px-3 py-3 truncate">{{ $item->judul_buku }}</td>
                            <td class="px-3 py-3 text-center">{{ $item->tanggal_kembali ?? '-' }}</td>
                            <td class="px-3 py-3 text-center">
                                @if($statusItem == 'selesai') <span class="bg-green-100 text-green-700 text-[11px] font-bold px-2.5 py-1 rounded-full">Selesai</span>
                                @elseif($statusItem == 'buku hilang') <span class="bg-red-100 text-red-700 text-[11px] font-bold px-2.5 py-1 rounded-full">Hilang</span>
                                @elseif($statusItem == 'terlambat') <span class="bg-yellow-100 text-yellow-700 text-[11px] font-bold px-2.5 py-1 rounded-full">Terlambat</span>
                                @else <span class="bg-blue-100 text-blue-700 text-[11px] font-bold px-2.5 py-1 rounded-full">Dipinjam</span> @endif
                            </td>
                            <td class="px-3 py-3 text-right {{ $item->denda > 0 ? 'text-red-600 font-bold' : '' }}">Rp{{ number_format($item->denda, 0, ',', '.') }}</td>
                            <td class="px-3 py-3 truncate">{{ $item->keterangan ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="8" class="px-3 py-8 text-center text-gray-500">Data laporan masih kosong.</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="pt-4"><span class="text-xs text-gray-500">Menampilkan {{ count($laporan) }} data.</span></div>
        </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
@if($isCetakBulanan)
    <script>window.onload = function () { window.print(); }</script>
@endif
</body>
</html>