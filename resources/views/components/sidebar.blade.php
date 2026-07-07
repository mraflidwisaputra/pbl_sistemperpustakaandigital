<!-- SIDEBAR -->
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

            <!-- BERANDA -->
            <li>
                <a href="{{ route('home') }}"
                   class="flex items-center p-3 text-white rounded-lg
                   {{ request()->routeIs('home') ? 'bg-blue-600' : 'hover:bg-blue-600' }}">

                    <svg class="w-5 h-5 mr-3 text-white"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor"
                         viewBox="0 0 20 20">
                        <path d="m19.707 9.293-9-9a1 1 0 0 0-1.414 0l-9 9A1 1 0 0 0 1.414 10.7L2 10.114V18a2 2 0 0 0 2 2h3v-5h6v5h3a2 2 0 0 0 2-2v-7.886l.586.586a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>

                    <span>Beranda</span>
                </a>
            </li>

            <!-- DAFTAR BUKU -->
            <li>
                <a href="{{ route('daftar.buku') }}"
                   class="flex items-center p-3 text-white rounded-lg
                   {{ request()->routeIs('daftar.buku') ? 'bg-blue-600' : 'hover:bg-blue-600' }}">

                    <svg class="w-5 h-5 mr-3 text-white"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor"
                         viewBox="0 0 18 20">
                        <path d="M16 0H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM7 4h7v2H7V4Zm0 4h7v2H7V8Zm0 4h7v2H7v-2Z"/>
                    </svg>

                    <span>Daftar Buku</span>
                </a>
            </li>

            <!-- RIWAYAT -->
            <li>
                <a href="{{ route('riwayat.peminjaman') }}"
                   class="flex items-center p-3 text-white rounded-lg
                   {{ request()->routeIs('riwayat.peminjaman') ? 'bg-blue-600' : 'hover:bg-blue-600' }}">

                    <svg class="w-5 h-5 mr-3 text-white"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 20 20">
                        <path stroke="currentColor"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M10 6v4l3 2m5-2a8 8 0 1 1-2.34-5.66"/>
                        <path stroke="currentColor"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M18 2v5h-5"/>
                    </svg>

                    <span>Riwayat Pinjam</span>
                </a>
            </li>

            <!-- TENTANG -->
            <li>
                <a href="{{ route('about') }}"
                   class="flex items-center p-3 text-white rounded-lg
                   {{ request()->routeIs('about') ? 'bg-blue-600' : 'hover:bg-blue-600' }}">

                    <svg class="w-5 h-5 mr-3 text-white"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor"
                         viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 0 19 9.5 9.5 0 0 0 0-19ZM9 8h2v7H9V8Zm0-3h2v2H9V5Z"/>
                    </svg>

                    <span>Tentang</span>
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