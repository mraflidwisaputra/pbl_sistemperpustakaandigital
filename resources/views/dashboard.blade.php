<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan</title>

<<<<<<< HEAD
    <!-- Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

    <!-- ======================== SIDEBAR ======================== -->
    <aside id="sidebar"
           class="fixed top-0 left-0 z-40 w-64 h-screen bg-slate-800 text-white
                  transition-transform -translate-x-full md:translate-x-0">

        <!-- Logo (lingkaran, tanpa teks) -->
        <div class="flex items-center justify-center px-6 py-5 border-b border-slate-700">
            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center shadow-lg">
                <img src="/images/exploretech.jpg" alt="Logo ExploreTech" class="w-12 h-12 rounded-full object-contain">
            </div>
        </div>

        <!-- Menu -->
        <nav class="flex flex-col px-3 py-4 space-y-1">
            <!-- Dashboard -->
            <a href="#"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-blue-600 text-white font-medium">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 0 0-1.414 0l-7 7a1 1 0 0 0 1.414 1.414L4 10.414V17a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-6.586l.293.293a1 1 0 0 0 1.414-1.414l-7-7Z"/>
                </svg>
                Dashboard
            </a>

            <!-- Data Buku -->
            <a href="/data-buku"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM8 5a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Z"/>
                </svg>
                Data Buku
            </a>

            <!-- Data Anggota -->
            <a href="/keloladata"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 5.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5ZM10 8.75a3.75 3.75 0 0 0-3.75 3.75v.75c0 .62.5 1.12 1.12 1.12h5.26c.62 0 1.12-.5 1.12-1.12v-.75A3.75 3.75 0 0 0 10 8.75Z"/>
                </svg>
                Data Anggota
            </a>

            <!-- Peminjaman -->
            <a href="/peminjaman"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm3.5 7a1 1 0 0 0 0 2h4a1 1 0 0 0 0-2h-4Zm-1.5 5a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1Z"/>
                </svg>
                Peminjaman
            </a>

            <!-- Laporan (dengan badge) -->
            <a href="/laporan"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.5 3a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 .5.5H10a.5.5 0 0 0 0-1H4V4h11v3.5a.5.5 0 0 0 1 0v-4a.5.5 0 0 0-.5-.5h-12ZM15 11l2 2-2 2" clip-rule="evenodd"/>
                    <path d="M13.5 7h-1v6a.5.5 0 0 0 1 0V7Z"/>
                </svg>
                Laporan
                <span class="ml-auto inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-blue-600 bg-white rounded-full">
                    1
                </span>
            </a>
        </nav>

        <!-- Logout -->
        <div class="absolute bottom-0 left-0 w-full px-3 pb-4">
            <a href="#"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-blue-600 text-white font-medium hover:bg-blue-700 transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l2.792-2.793a.75.75 0 0 0-1.06-1.06l-4.25 4.25a.75.75 0 0 0 0 1.06l4.25 4.25a.75.75 0 0 0 1.06-1.06l-2.792-2.793h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"/>
                </svg>
                Logout
            </a>
        </div>
    </aside>

    <!-- ======================== MAIN CONTENT ======================== -->
    <div class="md:ml-64">

        <!-- Top Navbar -->
        <nav class="sticky top-0 z-30 flex items-center justify-between bg-slate-800 text-white px-6 py-3 shadow-md">
            <!-- Hamburger Mobile -->
            <button data-drawer-target="sidebar" data-drawer-toggle="sidebar"
                    class="md:hidden inline-flex items-center p-2 text-sm rounded-lg hover:bg-slate-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Kanan: Icon & Admin -->
            <div class="flex items-center gap-4 ml-auto">
                <button class="p-2 rounded-lg hover:bg-slate-700 transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M1.5 8a6.5 6.5 0 0 1 12.123-3.078A7.5 7.5 0 0 1 19.5 10.5c0 2.92-1.683 5.448-4.15 6.713A1 1 0 0 1 14 16.5H6a1 1 0 0 1-1.35-.713A7.5 7.5 0 0 1 1.5 8Z"/>
                    </svg>
                </button>
                <button class="p-2 rounded-lg hover:bg-slate-700 transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a5 5 0 0 0-5 5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7a8 8 0 1 1 16 0v1a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V7a5 5 0 0 0-5-5ZM8 13a2 2 0 1 1 4 0 2 2 0 0 1-4 0Z"/>
                    </svg>
                </button>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-7 9a7 7 0 1 1 14 0H3Z"/>
                        </svg>
                    </div>
                    <span class="font-semibold">Administrator</span>
                </div>
            </div>
        </nav>

        <!-- Content Area -->
        <main class="p-6">

            <!-- Judul Halaman -->
            <div class="mb-4">
                <h1 class="text-2xl font-bold text-gray-800">
                    Dashboard
                    <span class="ml-2 text-sm font-normal text-gray-400">
                        Senin, 20 Mei 2026
                    </span>
                </h1>
            </div>

            <!-- Welcome Banner -->
            <div class="bg-gray-200 text-gray-500 rounded-lg px-5 py-3 mb-6 text-sm">
                Selamat Datang Administrator di Administrator perpus
            </div>

            <!-- ============ STATISTIK CARDS ============ -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">

                <!-- Card: Anggota -->
                <div class="bg-slate-800 text-white rounded-xl p-5 shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold">225</p>
                            <p class="text-sm text-slate-400 mt-1">Anggota</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-slate-700 flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 4.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5ZM10 10.5A3.5 3.5 0 0 0 6.5 14v.75a.75.75 0 0 0 .75.75h5.5a.75.75 0 0 0 .75-.75V14A3.5 3.5 0 0 0 10 10.5ZM12 2.75a.75.75 0 0 1 .75.75v.25H15a1 1 0 0 1 0 2h-1.25V7a.75.75 0 0 1-1.5 0V5.75H11a1 1 0 0 1 0-2h1.25V3.5A.75.75 0 0 1 12 2.75Z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card: Total Peminjaman -->
                <div class="bg-slate-800 text-white rounded-xl p-5 shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold">67</p>
                            <p class="text-sm text-slate-400 mt-1">Total Peminjaman Buku</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-slate-700 flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm3.5 7a1 1 0 0 0 0 2h4a1 1 0 0 0 0-2h-4Zm-1.5 5a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1Z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card: Peminjaman (aktif) -->
                <div class="bg-slate-800 text-white rounded-xl p-5 shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold">15</p>
                            <p class="text-sm text-slate-400 mt-1">Peminjaman</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-slate-700 flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l2.792-2.793a.75.75 0 0 0-1.06-1.06l-4.25 4.25a.75.75 0 0 0 0 1.06l4.25 4.25a.75.75 0 0 0 1.06-1.06l-2.792-2.793h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card: Pengembalian -->
                <div class="bg-slate-800 text-white rounded-xl p-5 shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold">2</p>
                            <p class="text-sm text-slate-400 mt-1">Pengembalian</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-slate-700 flex items-center justify-center">
                            <svg class="w-6 h-6 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5c0 .414-.336.75-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75V4.25Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M1 10a.75.75 0 0 1 .75-.75h9.546l-2.792-2.793a.75.75 0 0 1 1.06-1.06l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06l2.792-2.793H1.75A.75.75 0 0 1 1 10Z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============ TABEL AKTIVITAS ============ -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-600">
                        <thead class="text-xs uppercase bg-gray-200 text-gray-700">
                            <tr>
                                <th class="px-6 py-4 font-bold">No</th>
                                <th class="px-6 py-4 font-bold">Tanggal</th>
                                <th class="px-6 py-4 font-bold">Nama Anggota</th>
                                <th class="px-6 py-4 font-bold">Aktivitas</th>
                                <th class="px-6 py-4 font-bold">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">

                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-medium text-gray-800">1</td>
                                <td class="px-6 py-4">20 Mei 2020</td>
                                <td class="px-6 py-4 font-semibold text-gray-800">Rezi</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium text-white bg-green-500 rounded">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l2.792-2.793a.75.75 0 0 0-1.06-1.06l-4.25 4.25a.75.75 0 0 0 0 1.06l4.25 4.25a.75.75 0 0 0 1.06-1.06l-2.792-2.793h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"/>
                                        </svg>
                                        Peminjaman Buku
                                    </span>
                                </td>
                                <td class="px-6 py-4">Meminjam Buku " Laskar Pelangi "</td>
                            </tr>

                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-medium text-gray-800">2</td>
                                <td class="px-6 py-4">20 Mei 2020</td>
                                <td class="px-6 py-4 font-semibold text-gray-800">Thimoty</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium text-white bg-green-500 rounded">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l2.792-2.793a.75.75 0 0 0-1.06-1.06l-4.25 4.25a.75.75 0 0 0 0 1.06l4.25 4.25a.75.75 0 0 0 1.06-1.06l-2.792-2.793h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"/>
                                        </svg>
                                        Peminjaman Buku
                                    </span>
                                </td>
                                <td class="px-6 py-4">Meminjam Buku " Atomic Habits "</td>
                            </tr>

                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-medium text-gray-800">3</td>
                                <td class="px-6 py-4">19 Mei 2026</td>
                                <td class="px-6 py-4 font-semibold text-gray-800">Niko</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium text-white bg-green-500 rounded">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l2.792-2.793a.75.75 0 0 0-1.06-1.06l-4.25 4.25a.75.75 0 0 0 0 1.06l4.25 4.25a.75.75 0 0 0 1.06-1.06l-2.792-2.793h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"/>
                                        </svg>
                                        Peminjaman Buku
                                    </span>
                                </td>
                                <td class="px-6 py-4">Meminjam Buku " Tentang Kamu "</td>
                            </tr>

                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-medium text-gray-800">4</td>
                                <td class="px-6 py-4">19 Mei 2026</td>
                                <td class="px-6 py-4 font-semibold text-gray-800">Dio</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium text-white bg-red-600 rounded">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5c0 .414-.336.75-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75V4.25Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M1 10a.75.75 0 0 1 .75-.75h9.546l-2.792-2.793a.75.75 0 0 1 1.06-1.06l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06l2.792-2.793H1.75A.75.75 0 0 1 1 10Z" clip-rule="evenodd"/>
                                        </svg>
                                        Pengembalian Buku
                                    </span>
                                </td>
                                <td class="px-6 py-4">Mengembalikan Buku " Selena "</td>
                            </tr>

                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-medium text-gray-800">5</td>
                                <td class="px-6 py-4">17 Mei 2026</td>
                                <td class="px-6 py-4 font-semibold text-gray-800">Rapli</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium text-white bg-green-500 rounded">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l2.792-2.793a.75.75 0 0 0-1.06-1.06l-4.25 4.25a.75.75 0 0 0 0 1.06l4.25 4.25a.75.75 0 0 0 1.06-1.06l-2.792-2.793h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"/>
                                        </svg>
                                        Peminjaman Buku
                                    </span>
                                </td>
                                <td class="px-6 py-4">Meminjam Buku " Atomic Habits "</td>
                            </tr>

                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-medium text-gray-800">6</td>
                                <td class="px-6 py-4">15 Mei 2026</td>
                                <td class="px-6 py-4 font-semibold text-gray-800">Iwan</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium text-white bg-green-600 rounded">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5c0 .414-.336.75-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75V4.25Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M1 10a.75.75 0 0 1 .75-.75h9.546l-2.792-2.793a.75.75 0 0 1 1.06-1.06l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06l2.792-2.793H1.75A.75.75 0 0 1 1 10Z" clip-rule="evenodd"/>
                                        </svg>
                                        Pengembalian Buku
                                    </span>
                                </td>
                                <td class="px-6 py-4">Mengembalikan Buku "Laskar Pelangi"</td>
                            </tr>

                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-medium text-gray-800">7</td>
                                <td class="px-6 py-4">15 Mei 2026</td>
                                <td class="px-6 py-4 font-semibold text-gray-800">Jhosua</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 text-xs font-medium text-white bg-green-500 rounded">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l2.792-2.793a.75.75 0 0 0-1.06-1.06l-4.25 4.25a.75.75 0 0 0 0 1.06l4.25 4.25a.75.75 0 0 0 1.06-1.06l-2.792-2.793h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"/>
                                        </svg>
                                        Peminjaman Buku
                                    </span>
                                </td>
                                <td class="px-6 py-4">Meminjam Buku " Atomic Habits "</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>

    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

=======
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
>>>>>>> 2dd4a82683bcb78480bad5d83caf5cdd3378ca47
</body>
</html>