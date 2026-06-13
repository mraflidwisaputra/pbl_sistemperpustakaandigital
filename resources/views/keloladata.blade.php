<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota - Perpustakaan</title>

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

        <!-- Logo -->
        <div class="flex items-center justify-center px-6 py-5 border-b border-slate-700">
            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center shadow-lg">
                <img src="/images/exploretech.jpg" alt="Logo ExploreTech" class="w-12 h-12 rounded-full object-contain">
            </div>
        </div>

        <!-- Menu -->
        <nav class="flex flex-col px-3 py-4 space-y-1">
            <a href="/dashboard"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 0 0-1.414 0l-7 7a1 1 0 0 0 1.414 1.414L4 10.414V17a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-6.586l.293.293a1 1 0 0 0 1.414-1.414l-7-7Z"/>
                </svg>
                Dashboard
            </a>

            <a href="/data-buku"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM8 5a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Z"/>
                </svg>
                Data Buku
            </a>

            <a href="/keloladata"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-blue-600 text-white font-medium">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 5.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5ZM10 8.75a3.75 3.75 0 0 0-3.75 3.75v.75c0 .62.5 1.12 1.12 1.12h5.26c.62 0 1.12-.5 1.12-1.12v-.75A3.75 3.75 0 0 0 10 8.75Z"/>
                </svg>
                Data Anggota
            </a>

            <a href="/peminjaman"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm3.5 7a1 1 0 0 0 0 2h4a1 1 0 0 0 0-2h-4Zm-1.5 5a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1Z"/>
                </svg>
                Peminjaman
            </a>

            <a href="/laporan"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.5 3a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 .5.5H10a.5.5 0 0 0 0-1H4V4h11v3.5a.5.5 0 0 0 1 0v-4a.5.5 0 0 0-.5-.5h-12ZM15 11l2 2-2 2" clip-rule="evenodd"/>
                    <path d="M13.5 7h-1v6a.5.5 0 0 0 1 0V7Z"/>
                </svg>
                Laporan
                <span class="ml-auto inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-blue-600 bg-white rounded-full">1</span>
            </a>
        </nav>

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
            <button data-drawer-target="sidebar" data-drawer-toggle="sidebar"
                    class="md:hidden inline-flex items-center p-2 text-sm rounded-lg hover:bg-slate-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
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

            <!-- Container Card -->
            <div class="bg-white rounded-xl shadow-md p-6">

                <!-- HEADER: Judul + Tombol Tambah -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Data Anggota</h1>
                    <!-- Tombol untuk membuka modal -->
                    <button data-modal-target="modal-tambah-anggota" data-modal-toggle="modal-tambah-anggota"
                            class="mt-3 sm:mt-0 inline-flex items-center gap-2 px-4 py-2.5 text-white bg-blue-500 rounded-lg font-medium hover:bg-blue-600 transition shadow cursor-pointer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Tambah Anggota
                    </button>
                </div>

                <!-- SEARCH -->
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="simple-search"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                           placeholder="Cari anggota..." />
                </div>

                <!-- TABEL DATA ANGGOTA -->
                <div class="relative overflow-x-auto shadow-sm sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3 w-16 text-center">No</th>
                                <th scope="col" class="px-6 py-3">Nama Anggota</th>
                                <th scope="col" class="px-6 py-3">Tanggal Daftar</th>
                                <th scope="col" class="px-6 py-3 text-center">Status</th>
                                <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">

                            <!-- Baris 1 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-6 py-4 text-center font-medium text-gray-900">1</td>
                                <td class="px-6 py-4 font-medium text-gray-900">
                                    M Rafli Dwi Saputra
                                    <span class="block text-sm text-gray-400 font-normal">rafli@gmail.com</span>
                                </td>
                                <td class="px-6 py-4 text-gray-900">01-01-2026</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded border border-green-400 inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 1.414-1.414L8 12.586l7.293-7.293a1 1 0 0 1 1.414 0Z" clip-rule="evenodd"/>
                                        </svg>
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600 transition">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                            Edit
                                        </a>
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-red-400 rounded hover:bg-red-500 transition">Hapus</a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Baris 2 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-6 py-4 text-center font-medium text-gray-900">2</td>
                                <td class="px-6 py-4 font-medium text-gray-900">
                                    Andi Pratama
                                    <span class="block text-sm text-gray-400 font-normal">andi.pratama@yahoo.com</span>
                                </td>
                                <td class="px-6 py-4 text-gray-900">03-01-2026</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded border border-green-400 inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 1.414-1.414L8 12.586l7.293-7.293a1 1 0 0 1 1.414 0Z" clip-rule="evenodd"/>
                                        </svg>
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600 transition">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                            Edit
                                        </a>
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-red-400 rounded hover:bg-red-500 transition">Hapus</a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Baris 3 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-6 py-4 text-center font-medium text-gray-900">3</td>
                                <td class="px-6 py-4 font-medium text-gray-900">
                                    Siti Aisyah
                                    <span class="block text-sm text-gray-400 font-normal">sitiaisyah@yahoo.com</span>
                                </td>
                                <td class="px-6 py-4 text-gray-900">05-01-2026</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded border border-green-400 inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 1.414-1.414L8 12.586l7.293-7.293a1 1 0 0 1 1.414 0Z" clip-rule="evenodd"/>
                                        </svg>
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600 transition">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                            Edit
                                        </a>
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-red-400 rounded hover:bg-red-500 transition">Hapus</a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Baris 4 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-6 py-4 text-center font-medium text-gray-900">4</td>
                                <td class="px-6 py-4 font-medium text-gray-900">
                                    Budi Santoso
                                    <span class="block text-sm text-gray-400 font-normal">budi.santoso@gmail.com</span>
                                </td>
                                <td class="px-6 py-4 text-gray-900">07-01-2026</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded border border-green-400 inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 1.414-1.414L8 12.586l7.293-7.293a1 1 0 0 1 1.414 0Z" clip-rule="evenodd"/>
                                        </svg>
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600 transition">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                            Edit
                                        </a>
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-red-400 rounded hover:bg-red-500 transition">Hapus</a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Baris 5 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-6 py-4 text-center font-medium text-gray-900">5</td>
                                <td class="px-6 py-4 font-medium text-gray-900">
                                    Dewi Lestari
                                    <span class="block text-sm text-gray-400 font-normal">dewile@gmail.com</span>
                                </td>
                                <td class="px-6 py-4 text-gray-900">10-01-2026</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded border border-green-400 inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 1.414-1.414L8 12.586l7.293-7.293a1 1 0 0 1 1.414 0Z" clip-rule="evenodd"/>
                                        </svg>
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600 transition">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                            Edit
                                        </a>
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-red-400 rounded hover:bg-red-500 transition">Hapus</a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Baris 6 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-6 py-4 text-center font-medium text-gray-900">6</td>
                                <td class="px-6 py-4 font-medium text-gray-900">
                                    Dewi Lestari
                                    <span class="block text-sm text-gray-400 font-normal">&nbsp;</span>
                                </td>
                                <td class="px-6 py-4 text-gray-900">10-01-2026</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded border border-green-400 inline-flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 1.414-1.414L8 12.586l7.293-7.293a1 1 0 0 1 1.414 0Z" clip-rule="evenodd"/>
                                        </svg>
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600 transition">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                            Edit
                                        </a>
                                        <a href="#" class="inline-flex items-center gap-1 px-3 py-2 text-xs font-medium text-white bg-red-400 rounded hover:bg-red-500 transition">Hapus</a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <!-- PAGINATION -->
                <div class="flex flex-wrap items-center justify-center sm:justify-between mt-6 gap-2">
                    <nav aria-label="Page navigation" class="flex items-center -space-x-px h-8 text-sm">
                        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Previous</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                        </a>
                        <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50">1</a>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">...</a>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">10</a>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                        </a>
                    </nav>
                </div>

            </div>
        </main>
    </div>

    <!-- ================================================================ -->
    <!-- =================== MODAL TAMBAH ANGGOTA ======================= -->
    <!-- ================================================================ -->
    <div id="modal-tambah-anggota" tabindex="-1" aria-hidden="true"
         class="fixed inset-0 z-50 hidden overflow-y-auto overflow-x-hidden flex items-center justify-center">

        <!-- Backdrop / Overlay Gelap -->
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm"></div>

        <!-- Modal Content -->
        <div class="relative z-10 w-full max-w-lg mx-4">
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">

                <!-- Modal Header -->
                <div class="flex items-center justify-between px-6 py-4 bg-blue-500 text-white">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 5.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5ZM10 8.75a3.75 3.75 0 0 0-3.75 3.75v.75c0 .62.5 1.12 1.12 1.12h5.26c.62 0 1.12-.5 1.12-1.12v-.75A3.75 3.75 0 0 0 10 8.75Z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold">Tambah Anggota Baru</h3>
                    </div>
                    <button type="button" data-modal-hide="modal-tambah-anggota"
                            class="text-white/80 hover:text-white hover:bg-white/20 rounded-lg p-1.5 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <!-- Modal Body / Form -->
                <div class="px-6 py-5 space-y-4">

                    <!-- Nama Lengkap -->
                    <div>
                        <label for="input-nama" class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="input-nama"
                               placeholder="Masukkan nama lengkap"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="input-email" class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="input-email"
                               placeholder="contoh@email.com"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <!-- No. Telepon -->
                    <div>
                        <label for="input-telepon" class="block mb-1.5 text-sm font-semibold text-gray-700">
                            No. Telepon <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" id="input-telepon"
                               placeholder="08xxxxxxxxxx"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label for="input-alamat" class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Alamat
                        </label>
                        <textarea id="input-alamat" rows="3"
                                  placeholder="Masukkan alamat lengkap"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 resize-none"></textarea>
                    </div>

                    <!-- Tanggal Daftar & Status (2 kolom) -->
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Tanggal Daftar -->
                        <div>
                            <label for="input-tanggal" class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Tanggal Daftar <span class="text-red-500">*</span>
                            </label>
                            <input type="date" id="input-tanggal"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <!-- Status -->
                        <div>
                            <label for="input-status" class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Status <span class="text-red-500">*</span>
                            </label>
                            <select id="input-status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="Aktif" selected>Aktif</option>
                                <option value="Nonaktif">Nonaktif</option>
                            </select>
                        </div>
                    </div>

                </div>

                <!-- Modal Footer -->
                <div class="flex items-center justify-end gap-3 px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <!-- Tombol Batal -->
                    <button type="button" data-modal-hide="modal-tambah-anggota"
                            class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        Batal
                    </button>
                    <!-- Tombol Simpan -->
                    <button type="button"
                            class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600 transition shadow">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Simpan
                    </button>
                </div>

            </div>
        </div>
    </div>
    <!-- =================== END MODAL TAMBAH ANGGOTA ================= -->

    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>
</html>