<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - Perpustakaan</title>

<<<<<<< HEAD
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
</head>

<body class="bg-gray-100 font-sans">

    <!-- ======================== SIDEBAR ======================== -->
    <aside id="sidebar"
           class="fixed top-0 left-0 z-40 w-64 h-screen bg-slate-800 text-white
                  transition-transform -translate-x-full md:translate-x-0">

        <!-- Logo -->
        <div class="flex items-center justify-center px-6 py-5 border-b border-slate-700">
            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center shadow-lg">
                <img src="/images/exploretech.jpg" alt="Logo" class="w-12 h-12 rounded-full object-contain" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 24 24%22%3E%3Cpath fill=%22%233b82f6%22 d=%22M4 2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H4Zm2 4h12v2H6V6Zm0 4h12v2H6v-2Zm0 4h8v2H6v-2Z%22/%3E%3C/svg%3E'">
            </div>
        </div>

        <!-- Menu -->
        <nav class="flex flex-col px-3 py-4 space-y-1">
            <a href="/dashboard" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 0 0-1.414 0l-7 7a1 1 0 0 0 1.414 1.414L4 10.414V17a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-6.586l.293.293a1 1 0 0 0 1.414-1.414l-7-7Z"/></svg>
                Dashboard
            </a>
            <a href="/data-buku" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-blue-600 text-white font-medium">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM8 5a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Z"/></svg>
                Data Buku
            </a>
            <a href="/keloladata" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 5.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5ZM10 8.75a3.75 3.75 0 0 0-3.75 3.75v.75c0 .62.5 1.12 1.12 1.12h5.26c.62 0 1.12-.5 1.12-1.12v-.75A3.75 3.75 0 0 0 10 8.75Z"/></svg>
                Data Anggota
            </a>
            <a href="/peminjaman" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M3 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm3.5 7a1 1 0 0 0 0 2h4a1 1 0 0 0 0-2h-4Zm-1.5 5a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1Z"/></svg>
                Peminjaman
            </a>
            <a href="/laporan" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.5 3a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 .5.5H10a.5.5 0 0 0 0-1H4V4h11v3.5a.5.5 0 0 0 1 0v-4a.5.5 0 0 0-.5-.5h-12ZM15 11l2 2-2 2" clip-rule="evenodd"/><path d="M13.5 7h-1v6a.5.5 0 0 0 1 0V7Z"/></svg>
                Laporan
                <span class="ml-auto inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-blue-600 bg-white rounded-full">1</span>
            </a>
        </nav>

        <div class="absolute bottom-0 left-0 w-full px-3 pb-4">
            <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-blue-600 text-white font-medium hover:bg-blue-700 transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l2.792-2.793a.75.75 0 0 0-1.06-1.06l-4.25 4.25a.75.75 0 0 0 0 1.06l4.25 4.25a.75.75 0 0 0 1.06-1.06l-2.792-2.793h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"/></svg>
                Logout
            </a>
        </div>
    </aside>

    <!-- ======================== MAIN CONTENT ======================== -->
    <div class="md:ml-64">

        <!-- Top Navbar -->
        <nav class="sticky top-0 z-30 flex items-center justify-between bg-slate-800 text-white px-6 py-3 shadow-md">
            <button data-drawer-target="sidebar" data-drawer-toggle="sidebar" class="md:hidden inline-flex items-center p-2 text-sm rounded-lg hover:bg-slate-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
            <div class="flex items-center gap-4 ml-auto">
                <button class="p-2 rounded-lg hover:bg-slate-700 transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M1.5 8a6.5 6.5 0 0 1 12.123-3.078A7.5 7.5 0 0 1 19.5 10.5c0 2.92-1.683 5.448-4.15 6.713A1 1 0 0 1 14 16.5H6a1 1 0 0 1-1.35-.713A7.5 7.5 0 0 1 1.5 8Z"/></svg>
                </button>
                <button class="p-2 rounded-lg hover:bg-slate-700 transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a5 5 0 0 0-5 5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7a8 8 0 1 1 16 0v1a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V7a5 5 0 0 0-5-5ZM8 13a2 2 0 1 1 4 0 2 2 0 0 1-4 0Z"/></svg>
                </button>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-7 9a7 7 0 1 1 14 0H3Z"/></svg>
                    </div>
                    <span class="font-semibold">Administrator</span>
                </div>
            </div>
        </nav>

        <!-- Content Area -->
        <main class="p-6">

            <!-- HEADER -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Data Buku</h1>
                <!-- Tombol Tambah dengan Flowbite Modal Trigger -->
                <button data-modal-target="bookModal" data-modal-toggle="bookModal" class="mt-3 sm:mt-0 inline-flex items-center gap-2 px-4 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm transition cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
=======
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-[#f4f7fb] font-sans">

@include('components.sidebarAdmin')

<div class="ml-64 min-h-screen">

    @include('components.topbarAdmin', ['title' => 'Data Buku'])

    <main class="px-8 pb-10">

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Kelola Data Buku</h2>
                    <p class="text-gray-500 mt-1">Tambah, edit, hapus, dan cari data buku perpustakaan.</p>
                </div>

                <button data-modal-target="modal-tambah-buku" data-modal-toggle="modal-tambah-buku"
                        class="mt-4 sm:mt-0 px-5 py-3 text-white bg-blue-600 rounded-xl font-semibold hover:bg-blue-700 transition shadow">
                    <i class="fa-solid fa-plus mr-2"></i>
>>>>>>> 2dd4a82683bcb78480bad5d83caf5cdd3378ca47
                    Tambah Buku
                </button>
            </div>

<<<<<<< HEAD
            <hr class="border-gray-300 mb-6">

            <!-- PENCARIAN & FILTER -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-3">Cari Buku</h2>
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="text" id="searchInput" oninput="renderBooks()" placeholder="Cari berdasarkan judul atau penulis..."
                           class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    <div class="relative">
                        <button id="dropdownButton" data-dropdown-toggle="dropdownKategori" class="w-full sm:w-40 inline-flex items-center justify-between gap-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 px-4 py-2.5 hover:bg-gray-100 transition" type="button">
                            <span id="filterCategoryLabel">Kategori</span>
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div id="dropdownKategori" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700">
                                <li><a href="#" onclick="filterCategory('')" class="block px-4 py-2 hover:bg-gray-100">Semua</a></li>
                                <li><a href="#" onclick="filterCategory('Fiksi')" class="block px-4 py-2 hover:bg-gray-100">Fiksi</a></li>
                                <li><a href="#" onclick="filterCategory('Non-Fiksi')" class="block px-4 py-2 hover:bg-gray-100">Non-Fiksi</a></li>
                                <li><a href="#" onclick="filterCategory('Pengembangan Diri')" class="block px-4 py-2 hover:bg-gray-100">Pengembangan Diri</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TABEL DATA BUKU -->
            <div class="bg-white rounded-lg border border-gray-200 shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-center">Cover</th>
                                <th class="px-6 py-3">Judul</th>
                                <th class="px-6 py-3">Penulis</th>
                                <th class="px-6 py-3 text-center">Stok</th>
                                <th class="px-6 py-3">Kategori</th>
                                <th class="px-6 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="bookTableBody" class="divide-y divide-gray-200"></tbody>
                    </table>
                </div>
                <!-- Empty State -->
                <div id="emptyState" class="hidden p-8 text-center text-gray-500">
                    <svg class="w-12 h-12 mx-auto mb-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                    <p class="font-medium">Tidak ada data buku</p>
                    <p class="text-sm">Tambahkan buku baru untuk memulai</p>
                </div>
            </div>

        </main>
    </div>

    <!-- ==================== FLOWBITE MODAL: TAMBAH/EDIT BUKU ==================== -->
    <div id="bookModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 id="bookModalTitle" class="text-lg font-semibold text-gray-900 dark:text-white">Tambah Buku Baru</h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="bookModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form id="bookForm" onsubmit="saveBook(event)" class="p-4 md:p-5 space-y-4">
                    <input type="hidden" id="f_bookId">
                    
                    <div>
                        <label for="f_bookTitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Buku <span class="text-red-500">*</span></label>
                        <input type="text" id="f_bookTitle" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan judul buku">
                    </div>
                    
                    <div>
                        <label for="f_bookAuthor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis <span class="text-red-500">*</span></label>
                        <input type="text" id="f_bookAuthor" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama penulis">
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="f_bookCategory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori <span class="text-red-500">*</span></label>
                            <select id="f_bookCategory" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Pilih...</option>
                                <option value="Fiksi">Fiksi</option>
                                <option value="Non-Fiksi">Non-Fiksi</option>
                                <option value="Pengembangan Diri">Pengembangan Diri</option>
                                <option value="Teknologi">Teknologi</option>
                            </select>
                        </div>
                        <div>
                            <label for="f_bookStock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok <span class="text-red-500">*</span></label>
                            <input type="number" id="f_bookStock" required min="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Jumlah">
                        </div>
                    </div>
                    
                    <div>
                        <label for="f_bookCover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL Cover Buku</label>
                        <input type="url" id="f_bookCover" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="https://contoh.com/cover.jpg">
                    </div>
                </form>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" data-modal-toggle="bookModal">Batal</button>
                    <button type="submit" form="bookForm" id="bookSubmitBtn" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== FLOWBITE MODAL: CONFIRM DELETE ==================== -->
    <div id="confirmDialog" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 id="confirmTitle" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Konfirmasi Hapus</h3>
                    <p id="confirmText" class="text-sm text-gray-500 dark:text-gray-400 mb-4">Apakah Anda yakin ingin menghapus data ini?</p>
                    <button type="button" id="confirmBtn" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Ya, Hapus
                    </button>
                    <button type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" data-modal-toggle="confirmDialog">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== FLOWBITE TOAST CONTAINER ==================== -->
    <div id="toast-container" class="fixed top-4 right-4 z-50 space-y-2"></div>

    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <!-- JavaScript Logic -->
    <script>
        // Data buku (simulasi)
        let books = [
            { id: 1, title: "Atomic Habits", author: "James Clear", category: "Pengembangan Diri", stock: 21, cover: "https://cdn.gramedia.com/uploads/items/9786020633176_.Atomic_Habit.jpg" },
            { id: 2, title: "MADILOG", author: "Tan Malaka", category: "Non-Fiksi", stock: 15, cover: "https://cdn.gramedia.com/uploads/product-metas/ri7e71kaam.jpeg" },
            { id: 3, title: "Laskar Pelangi", author: "Andrea Hirata", category: "Fiksi", stock: 12, cover: "https://cdn.gramedia.com/uploads/items/9789793062792_New-Edition-Laskar-Pelangi.jpg" }
        ];

        let currentFilter = '';

        // Render tabel buku
        function renderBooks() {
            const tbody = document.getElementById('bookTableBody');
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();

            const filtered = books.filter(book => {
                const matchSearch = book.title.toLowerCase().includes(searchTerm) || book.author.toLowerCase().includes(searchTerm);
                const matchCategory = !currentFilter || book.category === currentFilter;
                return matchSearch && matchCategory;
            });

            if (filtered.length === 0) {
                document.getElementById('emptyState').classList.remove('hidden');
                tbody.innerHTML = '';
                return;
            }

            document.getElementById('emptyState').classList.add('hidden');
            tbody.innerHTML = filtered.map(book => `
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4 text-center">
                        <div class="w-16 h-24 bg-gray-100 rounded-lg mx-auto overflow-hidden border border-gray-200">
                            <img src="${book.cover}" alt="${book.title}" class="w-full h-full object-cover"
                                 onerror="this.parentElement.innerHTML='<div class=\'flex items-center justify-center w-full h-full text-gray-400\'><svg class=\'w-6 h-6\' fill=\'currentColor\' viewBox=\'0 0 20 20\'><path d=\'M4 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4Zm2 0v12h8V4H6Z\'/></svg></div>'">
                        </div>
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">${book.title}</td>
                    <td class="px-6 py-4">${book.author}</td>
                    <td class="px-6 py-4 text-center">${book.stock}</td>
                    <td class="px-6 py-4">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">${book.category}</span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex items-center justify-center gap-2">
                            <button onclick="editBook(${book.id})" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
                            <button onclick="deleteBook(${book.id})" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                        </div>
                    </td>
                </tr>
            `).join('');
        }

        // Filter kategori
        function filterCategory(category) {
            currentFilter = category;
            document.getElementById('filterCategoryLabel').textContent = category || 'Kategori';
            renderBooks();
        }

        // Edit buku - buka modal dengan data
        function editBook(id) {
            const book = books.find(b => b.id === id);
            if (!book) return;

            document.getElementById('bookModalTitle').textContent = 'Edit Buku';
            document.getElementById('bookSubmitBtn').innerHTML = '<svg class="w-4 h-4 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Update';
            document.getElementById('f_bookId').value = book.id;
            document.getElementById('f_bookTitle').value = book.title;
            document.getElementById('f_bookAuthor').value = book.author;
            document.getElementById('f_bookCategory').value = book.category;
            document.getElementById('f_bookStock').value = book.stock;
            document.getElementById('f_bookCover').value = book.cover || '';
            
            // Buka modal menggunakan Flowbite
            const modal = document.getElementById('bookModal');
            modal.classList.remove('hidden');
        }

        // Simpan buku (tambah/edit)
        function saveBook(event) {
            event.preventDefault();
            const id = document.getElementById('f_bookId').value;
            const title = document.getElementById('f_bookTitle').value.trim();
            const author = document.getElementById('f_bookAuthor').value.trim();
            const category = document.getElementById('f_bookCategory').value;
            const stock = parseInt(document.getElementById('f_bookStock').value);
            const cover = document.getElementById('f_bookCover').value.trim();

            if (!title || !author || !category || !stock) {
                showToast('Harap isi semua field yang wajib!', 'error');
                return;
            }

            if (id) {
                const index = books.findIndex(b => b.id == id);
                if (index !== -1) {
                    books[index] = { id: parseInt(id), title, author, category, stock, cover };
                    showToast('Buku berhasil diperbarui!', 'success');
                }
            } else {
                const newBook = {
                    id: Date.now(),
                    title, author, category, stock,
                    cover: cover || 'https://via.placeholder.com/150x200/e5e7eb/9ca3af?text=No+Cover'
                };
                books.push(newBook);
                showToast('Buku berhasil ditambahkan!', 'success');
            }

            // Tutup modal menggunakan Flowbite
            const modal = document.getElementById('bookModal');
            modal.classList.add('hidden');
            
            document.getElementById('bookForm').reset();
            renderBooks();
        }

        // Hapus buku
        function deleteBook(id) {
            const book = books.find(b => b.id === id);
            if (!book) return;

            document.getElementById('confirmTitle').textContent = 'Hapus Buku';
            document.getElementById('confirmText').textContent = `Apakah Anda yakin ingin menghapus buku "${book.title}"?`;
            document.getElementById('confirmBtn').onclick = () => {
                books = books.filter(b => b.id !== id);
                const modal = document.getElementById('confirmDialog');
                modal.classList.add('hidden');
                renderBooks();
                showToast('Buku berhasil dihapus!', 'success');
            };
            
            // Buka modal konfirmasi
            const modal = document.getElementById('confirmDialog');
            modal.classList.remove('hidden');
        }

        // Toast notification menggunakan Flowbite style
        function showToast(message, type = 'success') {
            const container = document.getElementById('toast-container');
            const isErr = type === 'error';
            
            const toast = document.createElement('div');
            toast.className = `flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 border-l-4 ${isErr ? 'border-red-500' : 'border-green-500'}`;
            toast.innerHTML = `
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 ${isErr ? 'text-red-500 bg-red-100 dark:bg-red-800 dark:text-red-200' : 'text-green-500 bg-green-100 dark:bg-green-800 dark:text-green-200'} rounded-lg">
                    ${isErr 
                        ? '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"/></svg>'
                        : '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>'
                    }
                </div>
                <div class="ms-3 text-sm font-normal">${message}</div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" onclick="this.parentElement.remove()">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            `;
            
            container.appendChild(toast);
            
            // Auto remove setelah 4 detik
            setTimeout(() => {
                if (toast.parentElement) {
                    toast.style.opacity = '0';
                    toast.style.transition = 'opacity 0.3s';
                    setTimeout(() => toast.remove(), 300);
                }
            }, 4000);
        }

        // Close modals on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                document.getElementById('bookModal')?.classList.add('hidden');
                document.getElementById('confirmDialog')?.classList.add('hidden');
            }
        });

        // Init
        document.addEventListener('DOMContentLoaded', renderBooks);
    </script>

=======
            @if(session('success'))
                <div class="mb-4 p-4 text-sm text-green-800 rounded-lg bg-green-100">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-4 p-4 text-sm text-red-800 rounded-lg bg-red-100">
                    <ul class="list-disc ml-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/data-buku" method="GET" class="mb-6">
                <div class="flex flex-col md:flex-row gap-3">
                    <input type="text"
                           name="search"
                           value="{{ request('search') }}"
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 text-sm"
                           placeholder="Cari judul, penulis, penerbit, ISBN, atau tahun rilis...">

                    <button type="submit"
                            class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition shadow">
                        <i class="fa-solid fa-magnifying-glass mr-2"></i>
                        Cari
                    </button>

                    <a href="/data-buku"
                       class="px-6 py-3 bg-gray-500 text-white font-semibold rounded-xl hover:bg-gray-600 transition shadow text-center">
                        Reset
                    </a>
                </div>
            </form>

            <div class="relative overflow-x-auto rounded-xl border border-gray-200">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs uppercase bg-gray-50 text-gray-700">
                    <tr>
                        <th class="px-6 py-5 text-center">No</th>
                        <th class="px-6 py-5 text-center">Cover</th>
                        <th class="px-6 py-5">Judul Buku</th>
                        <th class="px-6 py-5">Penulis</th>
                        <th class="px-6 py-5">Tahun</th>
                        <th class="px-6 py-5">Penerbit</th>
                        <th class="px-6 py-5">ISBN</th>
                        <th class="px-6 py-5">Kategori</th>
                        <th class="px-6 py-5 text-center">Stok</th>
                        <th class="px-6 py-5 text-center">Aksi</th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                    @forelse($buku as $item)
                        <tr class="bg-white hover:bg-gray-50 transition">
                            <td class="px-6 py-5 text-center font-semibold text-gray-900">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-5 text-center">
                                <div class="w-16 h-24 bg-gray-100 rounded-lg mx-auto overflow-hidden border border-gray-200">
                                    @if($item->cover)
                                        <img src="{{ asset('storage/'.$item->cover) }}"
                                             alt="{{ $item->judul_buku }}"
                                             class="w-full h-full object-cover">
                                    @else
                                        <div class="flex items-center justify-center w-full h-full text-gray-400 text-xs">
                                            No Cover
                                        </div>
                                    @endif
                                </div>
                            </td>

                            <td class="px-6 py-5 font-bold text-gray-900">
                                {{ $item->judul_buku }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->penulis }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->tahun_rilis }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->penerbit }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->isbn }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->nama_kategori ?? 'Tidak Ada Kategori' }}
                            </td>

                            <td class="px-6 py-5 text-center">
                                <span class="bg-blue-100 text-blue-700 text-xs font-bold px-4 py-2 rounded-full">
                                    {{ $item->stok }}
                                </span>
                            </td>

                            <td class="px-6 py-5 text-center">
                                <div class="flex items-center justify-center gap-2">

                                    <button data-modal-target="modal-edit-buku{{ $item->id_buku }}"
                                            data-modal-toggle="modal-edit-buku{{ $item->id_buku }}"
                                            class="px-3 py-2 text-xs font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                        Edit
                                    </button>

                                    <form action="/data-buku/delete/{{ $item->id_buku }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="px-3 py-2 text-xs font-semibold text-white bg-red-500 rounded-lg hover:bg-red-600">
                                            Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                        <div id="modal-edit-buku{{ $item->id_buku }}" tabindex="-1" aria-hidden="true"
                             class="hidden fixed inset-0 z-50 overflow-y-auto overflow-x-hidden justify-center items-center">

                            <div class="relative p-4 w-full max-w-2xl">
                                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">

                                    <div class="flex items-center justify-between px-6 py-4 bg-blue-600 text-white">
                                        <h3 class="text-lg font-bold">Edit Buku</h3>

                                        <button type="button"
                                                data-modal-hide="modal-edit-buku{{ $item->id_buku }}"
                                                class="text-white hover:bg-white/20 rounded-lg p-1.5">
                                            ✕
                                        </button>
                                    </div>

                                    <form action="/data-buku/update/{{ $item->id_buku }}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="px-6 py-5 space-y-4">

                                            <div>
                                                <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                    Judul Buku <span class="text-red-500">*</span>
                                                </label>
                                                <input type="text" name="judul_buku" value="{{ $item->judul_buku }}" required
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                            </div>

                                            <div>
                                                <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                    Penulis <span class="text-red-500">*</span>
                                                </label>
                                                <input type="text" name="penulis" value="{{ $item->penulis }}" required
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                            </div>

                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        Tahun Rilis <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="number" name="tahun_rilis" value="{{ $item->tahun_rilis }}" required min="1900" max="{{ date('Y') }}"
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                </div>

                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        Penerbit <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="text" name="penerbit" value="{{ $item->penerbit }}" required
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                </div>

                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        ISBN <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="text" name="isbn" value="{{ $item->isbn }}" required
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        Kategori <span class="text-red-500">*</span>
                                                    </label>
                                                    <select name="id_kategori" required
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                        <option value="">Pilih Kategori</option>
                                                        @foreach($kategori as $kat)
                                                            <option value="{{ $kat->id_kategori }}"
                                                                {{ $item->id_kategori == $kat->id_kategori ? 'selected' : '' }}>
                                                                {{ $kat->nama_kategori }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        Stok <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="number" name="stok" value="{{ $item->stok }}" required min="0"
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                </div>
                                            </div>

                                            <div>
                                                <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                    Cover Buku
                                                </label>
                                                <input type="file" name="cover" accept=".jpg"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                            </div>

                                            <p class="text-xs text-gray-500">
                                                <span class="text-red-500">*</span> Semua form wajib diisi. Cover boleh dikosongkan jika tidak ingin mengganti gambar.
                                            </p>

                                        </div>

                                        <div class="flex items-center justify-end gap-3 px-6 py-4 bg-gray-50 border-t border-gray-200">
                                            <button type="button" data-modal-hide="modal-edit-buku{{ $item->id_buku }}"
                                                    class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                                                Batal
                                            </button>

                                            <button type="submit"
                                                    class="px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                                Update
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    @empty
                        <tr>
                            <td colspan="10" class="px-6 py-10 text-center text-gray-500">
                                Data buku masih kosong.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </main>
</div>

<div id="modal-tambah-buku" tabindex="-1" aria-hidden="true"
     class="hidden fixed inset-0 z-50 overflow-y-auto overflow-x-hidden justify-center items-center">

    <div class="relative p-4 w-full max-w-2xl">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">

            <div class="flex items-center justify-between px-6 py-4 bg-blue-600 text-white">
                <h3 class="text-lg font-bold">Tambah Buku Baru</h3>

                <button type="button"
                        data-modal-hide="modal-tambah-buku"
                        class="text-white hover:bg-white/20 rounded-lg p-1.5">
                    ✕
                </button>
            </div>

            <form action="/data-buku/store" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="px-6 py-5 space-y-4">

                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Judul Buku <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="judul_buku" value="{{ old('judul_buku') }}" required
                               placeholder="Masukkan judul buku"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>

                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Penulis <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="penulis" value="{{ old('penulis') }}" required
                               placeholder="Nama penulis"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Tahun Rilis <span class="text-red-500">*</span>
                            </label>
                            <input type="number" name="tahun_rilis" value="{{ old('tahun_rilis') }}" required min="1900" max="{{ date('Y') }}"
                                   placeholder="Contoh: 2024"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>

                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Penerbit <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="penerbit" value="{{ old('penerbit') }}" required
                                   placeholder="Nama penerbit"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>

                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                ISBN <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="isbn" value="{{ old('isbn') }}" required
                                   placeholder="Nomor ISBN"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Kategori <span class="text-red-500">*</span>
                            </label>
                            <select name="id_kategori" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                <option value="">Pilih Kategori</option>
                                @foreach($kategori as $kat)
                                    <option value="{{ $kat->id_kategori }}">
                                        {{ $kat->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Stok <span class="text-red-500">*</span>
                            </label>
                            <input type="number" name="stok" value="{{ old('stok') }}" required min="0"
                                   placeholder="Jumlah"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                    </div>

                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Cover Buku <span class="text-red-500">*</span>
                        </label>
                        <input type="file" name="cover" accept=".jpg"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>

                    <p class="text-xs text-gray-500">
                        <span class="text-red-500">*</span> Cover hanya boleh format JPG dengan ukuran maksimal 5 MB.
                    </p>

                </div>

                <div class="flex items-center justify-end gap-3 px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <button type="button"
                            data-modal-hide="modal-tambah-buku"
                            class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                        Batal
                    </button>

                    <button type="submit"
                            class="px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
>>>>>>> 2dd4a82683bcb78480bad5d83caf5cdd3378ca47
</body>
</html>