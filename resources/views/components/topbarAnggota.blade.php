<section class="px-8 pt-7 pb-5">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-extrabold text-slate-900">
                {{ $title ?? 'Daftar Buku' }}
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                {{ $subtitle ?? 'Cari, pilih, dan ajukan peminjaman buku favoritmu.' }}
            </p>
        </div>

        <div class="flex items-center gap-2 px-3 py-2 bg-white rounded-xl shadow-sm w-[210px]">
            <button type="button"
        aria-label="Notifikasi"
        class="flex items-center justify-center w-9 h-9 rounded-lg bg-gray-100 hover:bg-blue-100 transition">

    <svg xmlns="http://www.w3.org/2000/svg"
         fill="none"
         viewBox="0 0 24 24"
         stroke-width="1.8"
         stroke="currentColor"
         class="w-5 h-5 text-gray-600">
        <path stroke-linecap="round"
              stroke-linejoin="round"
              d="M14.857 17.082a23.848 23.848 0 0 1-5.714 0M18 8a6 6 0 1 0-12 0c0 7-3 9-3 9h18s-3-2-3-9Z"/>
    </svg>

</button>

            <img src="{{ asset('images/profile.png') }}"
                 onerror="this.src='https://via.placeholder.com/45?text=User'"
                 class="w-9 h-9 rounded-full object-cover border"
                 alt="Profile">

            <div>
                <h5 class="text-xs font-bold text-gray-900">Halo, Anggota</h5>
                <p class="text-[10px] text-gray-500">Selamat Datang</p>
            </div>
        </div>
    </div>
</section>