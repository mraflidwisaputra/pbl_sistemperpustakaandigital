<!-- SIDEBAR ADMIN -->
@php
    $menuClass = 'flex items-center p-3 text-white rounded-lg transition-colors';
    $activeClass = 'bg-blue-600';
    $inactiveClass = 'hover:bg-blue-600';
@endphp

<aside class="fixed top-0 left-0 z-40 w-[210px] h-screen bg-slate-800">
    <div class="h-full px-4 py-5 relative">

        <!-- LOGO -->
        <div class="flex justify-center mb-9">
            <div class="w-24 h-16 bg-white rounded-full flex items-center justify-center shadow">
                <img src="{{ asset('images/exploretech.jpg') }}"
                     onerror="this.src='https://via.placeholder.com/90x50?text=LOGO'"
                     class="w-16 object-contain"
                     alt="Logo">
            </div>
        </div>

        <!-- MENU -->
        <ul class="space-y-3 text-sm font-medium">

            <li>
                <a href="{{ route('admin.dashboard') }}"
                   class="{{ $menuClass }} {{ request()->routeIs('admin.dashboard', 'dashboard') || request()->is('admin/dashboard', 'dashboard') ? $activeClass : $inactiveClass }}">
                    <i class="fa-solid fa-chart-line w-5 mr-3 text-center text-white"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('data-buku.index') }}"
                   class="{{ $menuClass }} {{ request()->routeIs('data-buku.*') || request()->is('data-buku*') ? $activeClass : $inactiveClass }}">
                    <i class="fa-solid fa-book w-5 mr-3 text-center"></i>
                    <span>Data Buku</span>
                </a>
            </li>

            <li>
                <a href="{{ route('kategori.index') }}"
                   class="{{ $menuClass }} {{ request()->routeIs('kategori.*') || request()->is('kategori*') ? $activeClass : $inactiveClass }}">
                    <i class="fa-solid fa-layer-group w-5 mr-3 text-center"></i>
                    <span>Kelola Kategori</span>
                </a>
            </li>

            <li>
                <a href="{{ route('keloladata.index') }}"
                   class="{{ $menuClass }} {{ request()->routeIs('keloladata.*') || request()->is('keloladata*') ? $activeClass : $inactiveClass }}">
                    <i class="fa-solid fa-users w-5 mr-3 text-center"></i>
                    <span>Data Anggota</span>
                </a>
            </li>

            <li>
                <a href="{{ route('peminjaman.index') }}"
                   class="{{ $menuClass }} {{ request()->routeIs('peminjaman.*') || request()->is('peminjaman*') ? $activeClass : $inactiveClass }}">
                    <i class="fa-solid fa-book-open-reader w-5 mr-3 text-center"></i>
                    <span>Peminjaman</span>
                </a>
            </li>

            <li>
                <a href="{{ route('laporan.index') }}"
                   class="{{ $menuClass }} {{ request()->routeIs('laporan.*') || request()->is('laporan*') ? $activeClass : $inactiveClass }}">
                    <i class="fa-solid fa-file-lines w-5 mr-3 text-center"></i>
                    <span>Laporan</span>
                </a>
            </li>

        </ul>

        <!-- LOGOUT -->
        <div class="absolute bottom-5 left-4 right-4">

            <a href="{{ route('login') }}"
               class="flex items-center p-3 text-white rounded-lg bg-red-600 hover:bg-red-700">

                <svg class="w-5 h-5 mr-3 text-white"
                     xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 18 16">
                    <path stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                </svg>

                <span>Logout</span>
            </a>

        </div>

    </div>
</aside>
