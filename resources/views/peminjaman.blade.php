<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman - Perpustakaan</title>

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
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 5.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5ZM10 8.75a3.75 3.75 0 0 0-3.75 3.75v.75c0 .62.5 1.12 1.12 1.12h5.26c.62 0 1.12-.5 1.12-1.12v-.75A3.75 3.75 0 0 0 10 8.75Z"/>
                </svg>
                Data Anggota
            </a>

            <a href="/peminjaman"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-blue-600 text-white font-medium">
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

                <!-- HEADER: Judul Saja -->
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Data Peminjaman</h1>
                </div>

                <!-- SEARCH & FILTER -->
                <div class="flex flex-col sm:flex-row gap-4 mb-6">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" 
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" 
                               placeholder="Cari peminjaman..." />
                    </div>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                        <option value="">Semua Status</option>
                        <option value="dipinjam">Sedang Dipinjam</option>
                        <option value="selesai">Selesai</option>
                        <option value="terlambat">Terlambat</option>
                    </select>
                </div>

                <!-- TABEL PEMINJAMAN -->
                <div class="relative overflow-x-auto shadow-sm sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-center w-12">No</th>
                                <th scope="col" class="px-4 py-3">Peminjam</th>
                                <th scope="col" class="px-4 py-3">Judul Buku</th>
                                <th scope="col" class="px-4 py-3">Kategori</th>
                                <th scope="col" class="px-4 py-3 text-center">Tgl Pinjam</th>
                                <th scope="col" class="px-4 py-3 text-center">Tgl Kembali</th>
                                <th scope="col" class="px-4 py-3 text-center">Status</th>
                                <th scope="col" class="px-4 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">

                            <!-- Row 1 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-4 py-4 text-center font-medium text-gray-900">1</td>
                                <td class="px-4 py-4">
                                    <div class="font-medium text-gray-900">M Rafli Dwi Saputra</div>
                                    <div class="text-xs text-gray-500">rafli@gmail.com</div>
                                </td>
                                <td class="px-4 py-4 font-medium text-gray-900">Pemrograman Berbasis Objek</td>
                                <td class="px-4 py-4">Teknologi</td>
                                <td class="px-4 py-4 text-center">01-04-2026</td>
                                <td class="px-4 py-4 text-center">08-04-2026</td>
                                <td class="px-4 py-4 text-center">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">
                                        Selesai
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-800 font-medium text-xs">Detail</button>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-4 py-4 text-center font-medium text-gray-900">2</td>
                                <td class="px-4 py-4">
                                    <div class="font-medium text-gray-900">Andi Pratama</div>
                                    <div class="text-xs text-gray-500">andi.pratama@yahoo.com</div>
                                </td>
                                <td class="px-4 py-4 font-medium text-gray-900">Basis Data Lanjut</td>
                                <td class="px-4 py-4">Teknologi</td>
                                <td class="px-4 py-4 text-center">03-04-2026</td>
                                <td class="px-4 py-4 text-center">10-04-2026</td>
                                <td class="px-4 py-4 text-center">
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center justify-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        Terlambat
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-800 font-medium text-xs">Detail</button>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-4 py-4 text-center font-medium text-gray-900">3</td>
                                <td class="px-4 py-4">
                                    <div class="font-medium text-gray-900">Siti Aisyah</div>
                                    <div class="text-xs text-gray-500">sitiaisyah@yahoo.com</div>
                                </td>
                                <td class="px-4 py-4 font-medium text-gray-900">Algoritma dan Struktur Data</td>
                                <td class="px-4 py-4">Teknologi</td>
                                <td class="px-4 py-4 text-center">05-04-2026</td>
                                <td class="px-4 py-4 text-center">12-04-2026</td>
                                <td class="px-4 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center justify-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        Selesai
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-800 font-medium text-xs">Detail</button>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-4 py-4 text-center font-medium text-gray-900">4</td>
                                <td class="px-4 py-4">
                                    <div class="font-medium text-gray-900">Budi Santoso</div>
                                    <div class="text-xs text-gray-500">budi.santoso@gmail.com</div>
                                </td>
                                <td class="px-4 py-4 font-medium text-gray-900">Jaringan Komputer</td>
                                <td class="px-4 py-4">Teknologi</td>
                                <td class="px-4 py-4 text-center">07-04-2026</td>
                                <td class="px-4 py-4 text-center text-gray-400">-</td>
                                <td class="px-4 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center justify-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        Selesai
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-800 font-medium text-xs">Detail</button>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-4 py-4 text-center font-medium text-gray-900">5</td>
                                <td class="px-4 py-4">
                                    <div class="font-medium text-gray-900">Dewi Lestari</div>
                                    <div class="text-xs text-gray-500">dewile@gmail.com</div>
                                </td>
                                <td class="px-4 py-4 font-medium text-gray-900">Sistem Operasi</td>
                                <td class="px-4 py-4">Teknologi</td>
                                <td class="px-4 py-4 text-center">10-04-2026</td>
                                <td class="px-4 py-4 text-center">17-04-2026</td>
                                <td class="px-4 py-4 text-center">
                                    <span class="bg-blue-500 text-white text-xs font-medium px-2.5 py-0.5 rounded flex items-center justify-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                        </svg>
                                        Dipinjam
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-800 font-medium text-xs">Detail</button>
                                </td>
                            </tr>
                            <!-- Row 6 -->
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-4 py-4 text-center font-medium text-gray-900">6</td>
                                <td class="px-4 py-4">
                                    <div class="font-medium text-gray-900">Dewi Lestari</div>
                                    <div class="text-xs text-gray-500">dewile@gmail.com</div>
                                </td>
                                <td class="px-4 py-4 font-medium text-gray-900">Sistem Operasi</td>
                                <td class="px-4 py-4">Teknologi</td>
                                <td class="px-4 py-4 text-center">10-01-2026</td>
                                <td class="px-4 py-4 text-center">17-04-2026</td>
                                <td class="px-4 py-4 text-center">
                                    <span class="bg-blue-500 text-white text-xs font-medium px-2.5 py-0.5 rounded flex items-center justify-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                        </svg>
                                        Dipinjam
                                    </span>
                                </td>
                                 <td class="px-4 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-800 font-medium text-xs">Detail</button>
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
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 6 10">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                        </a>
                        <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50">1</a>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">...</a>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">10</a>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 6 10">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                        </a>
                    </nav>
                </div>

            </div>
        </main>
    </div>

    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>
</html>