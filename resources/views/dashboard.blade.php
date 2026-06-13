<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-[#f4f7fb] font-sans">

<aside id="sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen bg-slate-800 text-white">

    <div class="flex items-center justify-center px-6 py-6">
        <div class="w-28 h-20 bg-white rounded-[50px] flex items-center justify-center shadow-lg">
            <img src="/images/exploretech.jpg" alt="Logo" class="w-20 object-contain"
                 onerror="this.src='https://via.placeholder.com/90x50?text=LOGO'">
        </div>
    </div>

    <nav class="flex flex-col px-4 py-2 space-y-3 text-[17px]">
        <a href="/dashboard" class="flex items-center gap-4 px-4 py-4 rounded-lg bg-blue-600 text-white font-semibold shadow-md">
            <i class="fa-solid fa-chart-line w-5"></i>
            Dashboard
        </a>

        <a href="/data-buku" class="flex items-center gap-4 px-4 py-4 rounded-lg text-white hover:bg-blue-600 transition">
            <i class="fa-solid fa-book w-5"></i>
            Data Buku
        </a>

        <a href="/kategori" class="flex items-center gap-4 px-4 py-4 rounded-lg text-white hover:bg-blue-600 transition">
            <i class="fa-solid fa-layer-group w-5"></i>
            Kelola Kategori
        </a>

        <a href="/keloladata" class="flex items-center gap-4 px-4 py-4 rounded-lg text-white hover:bg-blue-600 transition">
            <i class="fa-solid fa-users w-5"></i>
            Data Anggota
        </a>

        <a href="/peminjaman" class="flex items-center gap-4 px-4 py-4 rounded-lg text-white hover:bg-blue-600 transition">
            <i class="fa-solid fa-book-open-reader w-5"></i>
            Peminjaman
        </a>

        <a href="/laporan" class="flex items-center gap-4 px-4 py-4 rounded-lg text-white hover:bg-blue-600 transition">
            <i class="fa-solid fa-file-lines w-5"></i>
            Laporan
        </a>
    </nav>

    <div class="absolute bottom-6 left-4 right-4">
        <a href="#" class="flex items-center gap-4 px-5 py-4 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold transition">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>
    </div>
</aside>

<div class="ml-64 min-h-screen">

    <header class="flex items-center justify-between px-8 py-6">
        <div>
            <h1 class="text-4xl font-extrabold text-slate-900">Dashboard</h1>
            <p class="text-gray-500 mt-2 text-lg">
                {{ now()->translatedFormat('l, d F Y') }}
            </p>
        </div>

        <div class="flex items-center gap-4 bg-white px-5 py-3 rounded-2xl shadow-sm border border-gray-100">
            <button class="w-12 h-12 rounded-xl bg-gray-50 hover:bg-gray-100 flex items-center justify-center">
                <i class="fa-solid fa-bell text-gray-600 text-xl"></i>
            </button>

            <div class="w-12 h-12 rounded-full overflow-hidden bg-gray-100">
                <img src="https://cdn.pixabay.com/photo/2023/02/18/11/00/icon-7797704_1280.png"
                     alt="User" class="w-full h-full object-cover">
            </div>

            <div>
                <p class="font-bold text-slate-900">Administrator</p>
                <p class="text-sm text-gray-500">Admin Perpustakaan</p>
            </div>
        </div>
    </header>

    <main class="px-8 pb-10">

        <div class="mb-8 bg-blue-50 border border-blue-200 rounded-2xl px-6 py-5">
            <p class="text-blue-700 font-medium">
                Selamat Datang Administrator di Administrator Perpus
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Total Anggota</p>
                <h2 class="text-4xl font-extrabold text-slate-900">{{ $totalAnggota }}</h2>
                <p class="text-gray-500 mt-1">Anggota</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Total Buku</p>
                <h2 class="text-4xl font-extrabold text-slate-900">{{ $totalBuku }}</h2>
                <p class="text-gray-500 mt-1">Buku</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Total Peminjaman</p>
                <h2 class="text-4xl font-extrabold text-slate-900">{{ $totalPeminjaman }}</h2>
                <p class="text-gray-500 mt-1">Peminjaman Buku</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Peminjaman Aktif</p>
                <h2 class="text-4xl font-extrabold text-green-600">{{ $peminjamanAktif }}</h2>
                <p class="text-gray-500 mt-1">Sedang Dipinjam</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-slate-900">Aktivitas Terbaru</h2>
                <p class="text-gray-500 mt-1">Daftar aktivitas peminjaman dan pengembalian buku terbaru.</p>
            </div>

            <div class="relative overflow-x-auto rounded-xl border border-gray-200">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs uppercase bg-gray-50 text-gray-700">
                    <tr>
                        <th class="px-6 py-5 text-center">No</th>
                        <th class="px-6 py-5">Tanggal</th>
                        <th class="px-6 py-5">Nama Anggota</th>
                        <th class="px-6 py-5">Aktivitas</th>
                        <th class="px-6 py-5">Keterangan</th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                    @forelse($aktivitas as $item)
                        <tr class="bg-white hover:bg-gray-50 transition">
                            <td class="px-6 py-5 text-center font-semibold text-gray-900">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-5">
                                {{ \Carbon\Carbon::parse($item->tanggal_aktivitas)->translatedFormat('d F Y') }}
                            </td>

                            <td class="px-6 py-5 font-bold text-gray-900">
                                {{ $item->nama_anggota ?? '-' }}
                            </td>

                            <td class="px-6 py-5">
                                @if($item->jenis_aktivitas == 'Peminjaman Buku')
                                    <span class="bg-green-100 text-green-700 text-xs font-bold px-4 py-2 rounded-full">
                                        Peminjaman Buku
                                    </span>
                                @else
                                    <span class="bg-red-100 text-red-700 text-xs font-bold px-4 py-2 rounded-full">
                                        Pengembalian Buku
                                    </span>
                                @endif
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->keterangan }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-gray-500">
                                Belum ada aktivitas terbaru.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>