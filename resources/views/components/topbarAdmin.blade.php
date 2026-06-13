<header class="flex items-center justify-between px-8 py-6">
    <div>
        <h1 class="text-4xl font-extrabold text-slate-900">{{ $title ?? 'Dashboard' }}</h1>
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