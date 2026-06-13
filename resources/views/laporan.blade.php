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
            aside,
            header,
            .no-print {
                display: none !important;
            }

            body {
                background: white !important;
            }

            .ml-64 {
                margin-left: 0 !important;
            }

            main {
                padding: 0 !important;
            }

            table {
                font-size: 12px !important;
            }
        }
    </style>
</head>

<body class="bg-[#f4f7fb] font-sans">

@include('components.sidebarAdmin')

<div class="ml-64 min-h-screen">

    @include('components.topbarAdmin', ['title' => 'Laporan'])

    <main class="px-8 pb-10">

        @if($isCetakMingguan)
            <div class="mb-6 bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h1 class="text-2xl font-extrabold text-slate-900 text-center">
                    LAPORAN PEMINJAMAN MINGGUAN
                </h1>
                <p class="text-center text-gray-600 mt-2">
                    Periode:
                    {{ \Carbon\Carbon::parse($tanggalAwalMinggu)->translatedFormat('d F Y') }}
                    -
                    {{ \Carbon\Carbon::parse($tanggalAkhirMinggu)->translatedFormat('d F Y') }}
                </p>
            </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Total Peminjaman</p>
                <h2 class="text-4xl font-extrabold text-slate-900">{{ $totalPeminjaman }}</h2>
                <p class="text-gray-500 mt-1">Transaksi</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Buku Dikembalikan</p>
                <h2 class="text-4xl font-extrabold text-green-600">{{ $bukuDikembalikan }}</h2>
                <p class="text-gray-500 mt-1">Selesai</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Terlambat</p>
                <h2 class="text-4xl font-extrabold text-yellow-600">{{ $terlambat }}</h2>
                <p class="text-gray-500 mt-1">Peminjaman</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Total Denda</p>
                <h2 class="text-3xl font-extrabold text-red-600">
                    Rp{{ number_format($totalDenda, 0, ',', '.') }}
                </h2>
                <p class="text-gray-500 mt-1">Denda</p>
            </div>

        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Riwayat Peminjaman</h2>
                    <p class="text-gray-500 mt-1">
                        Filter dan cetak laporan peminjaman buku mingguan.
                    </p>
                </div>

                <a href="/laporan?cetak=mingguan"
                   class="no-print inline-flex items-center justify-center gap-2 px-5 py-3 text-sm font-semibold text-white bg-blue-600 rounded-xl hover:bg-blue-700 shadow">
                    <i class="fa-solid fa-print"></i>
                    Cetak Laporan Mingguan
                </a>
            </div>

            <form action="/laporan" method="GET" class="no-print grid grid-cols-1 md:grid-cols-12 gap-4 mb-6">
                <div class="md:col-span-6">
                    <input type="text"
                           name="search"
                           value="{{ request('search') }}"
                           placeholder="Cari anggota atau buku..."
                           class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-xl focus:ring-blue-500 focus:border-blue-500 p-4">
                </div>

                <div class="md:col-span-3">
                    <select name="status"
                            class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-xl focus:ring-blue-500 focus:border-blue-500 p-4">
                        <option value="">Semua Status</option>
                        <option value="Dipinjam" {{ request('status') == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                        <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        <option value="Terlambat" {{ request('status') == 'Terlambat' ? 'selected' : '' }}>Terlambat</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl px-6 py-4">
                        Filter
                    </button>
                </div>

                <div class="md:col-span-1">
                    <a href="/laporan"
                       class="block w-full bg-gray-500 hover:bg-gray-600 text-white font-semibold rounded-xl px-6 py-4 text-center">
                        Reset
                    </a>
                </div>
            </form>

            <div class="relative overflow-x-auto rounded-xl border border-gray-200">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs uppercase bg-gray-50 text-gray-700">
                    <tr>
                        <th class="px-6 py-5 text-center">No</th>
                        <th class="px-6 py-5">Tanggal Pinjam</th>
                        <th class="px-6 py-5">Anggota</th>
                        <th class="px-6 py-5">Judul Buku</th>
                        <th class="px-6 py-5 text-center">Tanggal Kembali</th>
                        <th class="px-6 py-5 text-center">Status</th>
                        <th class="px-6 py-5 text-right">Denda</th>
                        <th class="px-6 py-5">Keterangan</th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                    @forelse($laporan as $item)
                        <tr class="bg-white hover:bg-gray-50 transition">
                            <td class="px-6 py-5 text-center font-semibold text-gray-900">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->tanggal_pinjam }}
                            </td>

                            <td class="px-6 py-5 font-bold text-gray-900">
                                {{ $item->nama_anggota }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->judul_buku }}
                            </td>

                            <td class="px-6 py-5 text-center">
                                {{ $item->tanggal_kembali ?? '-' }}
                            </td>

                            <td class="px-6 py-5 text-center">
                                @if($item->status == 'Selesai')
                                    <span class="bg-green-100 text-green-700 text-xs font-bold px-4 py-2 rounded-full">
                                        Selesai
                                    </span>
                                @elseif($item->status == 'Terlambat')
                                    <span class="bg-yellow-100 text-yellow-700 text-xs font-bold px-4 py-2 rounded-full">
                                        Terlambat
                                    </span>
                                @else
                                    <span class="bg-blue-100 text-blue-700 text-xs font-bold px-4 py-2 rounded-full">
                                        Dipinjam
                                    </span>
                                @endif
                            </td>

                            <td class="px-6 py-5 text-right {{ $item->denda > 0 ? 'text-red-600 font-bold' : '' }}">
                                Rp{{ number_format($item->denda, 0, ',', '.') }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->keterangan ?? '-' }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-10 text-center text-gray-500">
                                Data laporan masih kosong.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <div class="pt-5">
                <span class="text-sm text-gray-500">
                    Menampilkan {{ count($laporan) }} data laporan.
                </span>
            </div>

        </div>

    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

@if($isCetakMingguan)
    <script>
        window.onload = function () {
            window.print();
        }
    </script>
@endif

</body>
</html>