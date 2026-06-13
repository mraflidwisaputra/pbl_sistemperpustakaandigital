<aside id="sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen bg-slate-800 text-white">

    <div class="flex items-center justify-center px-6 py-6">
        <div class="w-28 h-20 bg-white rounded-[50px] flex items-center justify-center shadow-lg">
            <img src="/images/exploretech.jpg" alt="Logo" class="w-20 object-contain"
                 onerror="this.src='https://via.placeholder.com/90x50?text=LOGO'">
        </div>
    </div>

    <nav class="flex flex-col px-4 py-2 space-y-3 text-[17px]">

        <a href="/dashboard"
           class="flex items-center gap-4 px-4 py-4 rounded-lg transition
           {{ request()->is('dashboard') ? 'bg-blue-600 text-white font-semibold shadow-md' : 'text-white hover:bg-blue-600' }}">
            <i class="fa-solid fa-chart-line w-5"></i>
            Dashboard
        </a>

        <a href="/data-buku"
           class="flex items-center gap-4 px-4 py-4 rounded-lg transition
           {{ request()->is('data-buku*') ? 'bg-blue-600 text-white font-semibold shadow-md' : 'text-white hover:bg-blue-600' }}">
            <i class="fa-solid fa-book w-5"></i>
            Data Buku
        </a>

        <a href="/kategori"
           class="flex items-center gap-4 px-4 py-4 rounded-lg transition
           {{ request()->is('kategori*') ? 'bg-blue-600 text-white font-semibold shadow-md' : 'text-white hover:bg-blue-600' }}">
            <i class="fa-solid fa-layer-group w-5"></i>
            Kelola Kategori
        </a>

        <a href="/keloladata"
           class="flex items-center gap-4 px-4 py-4 rounded-lg transition
           {{ request()->is('keloladata*') ? 'bg-blue-600 text-white font-semibold shadow-md' : 'text-white hover:bg-blue-600' }}">
            <i class="fa-solid fa-users w-5"></i>
            Data Anggota
        </a>

        <a href="/peminjaman"
           class="flex items-center gap-4 px-4 py-4 rounded-lg transition
           {{ request()->is('peminjaman*') ? 'bg-blue-600 text-white font-semibold shadow-md' : 'text-white hover:bg-blue-600' }}">
            <i class="fa-solid fa-book-open-reader w-5"></i>
            Peminjaman
        </a>

        <a href="/laporan"
           class="flex items-center gap-4 px-4 py-4 rounded-lg transition
           {{ request()->is('laporan*') ? 'bg-blue-600 text-white font-semibold shadow-md' : 'text-white hover:bg-blue-600' }}">
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