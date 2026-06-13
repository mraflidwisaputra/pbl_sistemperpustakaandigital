<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan - Perpustakaan Digital</title>

<<<<<<< HEAD
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
</head>

<body class="bg-gray-50 font-sans">

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
            <a href="/dashboard" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 0 0-1.414 0l-7 7a1 1 0 0 0 1.414 1.414L4 10.414V17a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-6.586l.293.293a1 1 0 0 0 1.414-1.414l-7-7Z"/>
                </svg>
                Dashboard
            </a>
            <a href="/data-buku" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM8 5a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Z"/>
                </svg>
                Data Buku
            </a>
            <a href="/keloladata" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 5.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5ZM10 8.75a3.75 3.75 0 0 0-3.75 3.75v.75c0 .62.5 1.12 1.12 1.12h5.26c.62 0 1.12-.5 1.12-1.12v-.75A3.75 3.75 0 0 0 10 8.75Z"/>
                </svg>
                Data Anggota
            </a>
            <a href="/peminjaman" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm3.5 7a1 1 0 0 0 0 2h4a1 1 0 0 0 0-2h-4Zm-1.5 5a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1Z"/>
                </svg>
                Peminjaman
            </a>
            <a href="/laporan" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-blue-600 text-white font-medium">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.5 3a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 .5.5H10a.5.5 0 0 0 0-1H4V4h11v3.5a.5.5 0 0 0 1 0v-4a.5.5 0 0 0-.5-.5h-12ZM15 11l2 2-2 2" clip-rule="evenodd"/>
                    <path d="M13.5 7h-1v6a.5.5 0 0 0 1 0V7Z"/>
                </svg>
                Laporan
                <span class="ml-auto inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-blue-600 bg-white rounded-full">1</span>
            </a>
        </nav>

        <div class="absolute bottom-0 left-0 w-full px-3 pb-4">
            <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-blue-600 text-white font-medium hover:bg-blue-700 transition">
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

            <!-- ========== HEADER ========== -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-3">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Laporan Peminjaman</h1>
                    <p class="text-sm text-gray-500 mt-1">Periode: Mei 2024</p>
                </div>
                <div class="flex gap-2">
                    <button class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:ring-4 focus:ring-gray-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                        Export
                    </button>
                    <button class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Cetak Laporan
                    </button>
                </div>
            </div>

            <!-- ========== STATISTIK UTAMA ========== -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Total Peminjaman</p>
                            <p class="text-2xl font-bold text-gray-900">120</p>
                            <p class="text-xs text-green-600 mt-1">↑ 12% dari bulan lalu</p>
                        </div>
                        <div class="p-3 bg-blue-50 rounded-lg">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm3.5 7a1 1 0 0 0 0 2h4a1 1 0 0 0 0-2h-4Zm-1.5 5a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1Z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Buku Dikembalikan</p>
                            <p class="text-2xl font-bold text-gray-900">85</p>
                            <p class="text-xs text-gray-500 mt-1">70.8% dari total</p>
                        </div>
                        <div class="p-3 bg-green-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Terlambat</p>
                            <p class="text-2xl font-bold text-gray-900">20</p>
                            <p class="text-xs text-yellow-600 mt-1">16.7% dari total</p>
                        </div>
                        <div class="p-3 bg-yellow-50 rounded-lg">
                            <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Total Denda</p>
                            <p class="text-2xl font-bold text-gray-900">Rp350.000</p>
                            <p class="text-xs text-red-600 mt-1">↑ 8% dari bulan lalu</p>
                        </div>
                        <div class="p-3 bg-red-50 rounded-lg">
                            <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 000-2H7z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== TABEL LAPORAN ========== -->
            <div class="bg-white rounded-lg border border-gray-200 shadow-sm">
                <div class="p-4 border-b border-gray-200 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <h2 class="font-semibold text-gray-900">Riwayat Peminjaman</h2>
                    <div class="flex gap-2">
                        <input type="text" placeholder="Cari anggota atau buku..." 
                               class="text-sm border border-gray-300 rounded-lg px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
                        <select class="text-sm border border-gray-300 rounded-lg px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
                            <option>Semua Status</option>
                            <option>Dipinjam</option>
                            <option>Selesai</option>
                            <option>Terlambat</option>
                        </select>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th class="px-4 py-3">Tanggal</th>
                                <th class="px-4 py-3">Anggota</th>
                                <th class="px-4 py-3">Judul Buku</th>
                                <th class="px-4 py-3 text-center">Tanggal Kembali</th>
                                <th class="px-4 py-3 text-center">Status</th>
                                <th class="px-4 py-3 text-right">Denda</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3">01 Mei 2024</td>
                                <td class="px-4 py-3 font-medium text-gray-900">Ahmad Rizki</td>
                                <td class="px-4 py-3">Pemrograman Berbasis Objek</td>
                                <td class="px-4 py-3 text-center">08 Mei 2024</td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Selesai</span>
                                </td>
                                <td class="px-4 py-3 text-right">Rp0</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3">03 Mei 2024</td>
                                <td class="px-4 py-3 font-medium text-gray-900">Siti Aisyah</td>
                                <td class="px-4 py-3">Basis Data Lanjut</td>
                                <td class="px-4 py-3 text-center">10 Mei 2024</td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">Terlambat</span>
                                </td>
                                <td class="px-4 py-3 text-right text-red-600 font-medium">Rp10.000</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3">05 Mei 2024</td>
                                <td class="px-4 py-3 font-medium text-gray-900">Budi Santoso</td>
                                <td class="px-4 py-3">Algoritma dan Struktur Data</td>
                                <td class="px-4 py-3 text-center">12 Mei 2024</td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Selesai</span>
                                </td>
                                <td class="px-4 py-3 text-right">Rp0</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3">07 Mei 2024</td>
                                <td class="px-4 py-3 font-medium text-gray-900">Dewi Lestari</td>
                                <td class="px-4 py-3">Jaringan Komputer</td>
                                <td class="px-4 py-3 text-center">-</td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">Dipinjam</span>
                                </td>
                                <td class="px-4 py-3 text-right">Rp0</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3">10 Mei 2024</td>
                                <td class="px-4 py-3 font-medium text-gray-900">Rudi Kurniawan</td>
                                <td class="px-4 py-3">Sistem Operasi</td>
                                <td class="px-4 py-3 text-center">17 Mei 2024</td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Selesai</span>
                                </td>
                                <td class="px-4 py-3 text-right">Rp0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="px-4 py-3 border-t border-gray-200 flex items-center justify-between">
                    <span class="text-sm text-gray-500">Menampilkan 1-5 dari 120 data</span>
                    <nav class="flex items-center gap-1">
                        <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50" disabled>Previous</button>
                        <button class="px-3 py-1 text-sm bg-blue-600 text-white rounded-lg">1</button>
                        <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">2</button>
                        <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">3</button>
                        <span class="px-2 text-gray-400">...</span>
                        <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">24</button>
                        <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">Next</button>
                    </nav>
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
>>>>>>> 2dd4a82683bcb78480bad5d83caf5cdd3378ca47

</body>
</html>