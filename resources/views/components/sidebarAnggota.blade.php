<aside class="fixed top-0 left-0 z-40 w-[260px] h-screen bg-slate-800 shadow-xl">
    <div class="relative h-full px-5 py-6 overflow-y-auto">

        <div class="flex justify-center mb-10">
            <div class="w-32 h-24 bg-white rounded-2xl flex items-center justify-center shadow-lg">
                <img src="{{ asset('images/logo.png') }}"
                     onerror="this.src='https://via.placeholder.com/120x70?text=LOGO'"
                     class="w-24 object-contain"
                     alt="Logo">
            </div>
        </div>

        <ul class="space-y-4 text-base font-semibold">

            <li>
                <a href="{{ url('/dashboard') }}"
                   class="flex items-center px-4 py-4 text-white rounded-xl transition duration-200
                   {{ request()->is('dashboard') ? 'bg-blue-600 shadow-md' : 'hover:bg-blue-600' }}">
                    <svg class="w-7 h-7 mr-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 10.5L12 3l9 7.5M5.25 9.75V21h13.5V9.75"/>
                    </svg>
                    <span>Beranda</span>
                </a>
            </li>

            <li>
                <a href="{{ route('daftar.buku') }}"
                   class="flex items-center px-4 py-4 text-white rounded-xl transition duration-200
                   {{ request()->routeIs('daftar.buku') ? 'bg-blue-600 shadow-md' : 'hover:bg-blue-600' }}">
                    <svg class="w-7 h-7 mr-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 6.253v13M12 6.253C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253M12 6.253C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253"/>
                    </svg>
                    <span>Daftar Buku</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/riwayat-peminjaman') }}"
                   class="flex items-center px-4 py-4 text-white rounded-xl transition duration-200
                   {{ request()->is('riwayat-peminjaman') ? 'bg-blue-600 shadow-md' : 'hover:bg-blue-600' }}">
                    <svg class="w-7 h-7 mr-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 12a9 9 0 11-9-9 9 9 0 019 9z"/>
                    </svg>
                    <span>Riwayat Peminjaman</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/about') }}"
                   class="flex items-center px-4 py-4 text-white rounded-xl transition duration-200
                   {{ request()->is('about') ? 'bg-blue-600 shadow-md' : 'hover:bg-blue-600' }}">
                    <svg class="w-7 h-7 mr-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 8.25h.008v.008H12V8.25z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Tentang</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/contact') }}"
                   class="flex items-center px-4 py-4 text-white rounded-xl transition duration-200
                   {{ request()->is('contact') ? 'bg-blue-600 shadow-md' : 'hover:bg-blue-600' }}">
                    <svg class="w-7 h-7 mr-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.75 7.5v9A2.25 2.25 0 0119.5 18.75h-15A2.25 2.25 0 012.25 16.5v-9"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 6.75l9 6 9-6"/>
                    </svg>
                    <span>Kontak</span>
                </a>
            </li>

        </ul>

        <div class="absolute bottom-6 left-5 right-5">
            <a href="{{ url('/logout') }}"
               class="flex items-center px-4 py-4 text-white rounded-xl bg-red-600 hover:bg-red-700 transition duration-200 shadow-md">
                <svg class="w-7 h-7 mr-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15"/>
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M18 12H9m6-3l3 3-3 3"/>
                </svg>
                <span>Logout</span>
            </a>
        </div>

    </div>
</aside>