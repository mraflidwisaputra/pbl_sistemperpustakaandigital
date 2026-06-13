<!DOCTYPE html>
<<<<<<< HEAD
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 overflow-x-hidden">
    
@include('components.sidebar')

<main class="ml-[210px] min-h-screen">

    <section class="px-8 pt-7 pb-5">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900">Daftar Buku</h1>
                <p class="text-sm text-gray-500 mt-1">Cari, pilih, dan pinjam buku favoritmu.</p>
            </div>

            <div class="absolute top-4 right-4 z-30">
                <div class="flex items-center gap-2 px-3 py-2 bg-white border border-gray-200 rounded-xl shadow-sm w-[205px]">

                    <button id="dropdownNotificationButton"
                            data-dropdown-toggle="dropdownNotification"
                            class="relative inline-flex items-center justify-center w-9 h-9 text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-600"
                            type="button">

                        <svg class="w-5 h-5"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="currentColor"
                             viewBox="0 0 14 20">
                            <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 8.979 3.9.946.946 0 0 0 9 3.735V2.767a2 2 0 0 0-4 0v.968c0 .056.009.11.021.164a5.406 5.406 0 0 0-3.154 4.933v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4.538 16 1.6 16h10.8c1.062 0 1.6-.6 1.6-1.193 0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z"/>
                        </svg>

                        @if(isset($jumlahNotifikasi) && $jumlahNotifikasi > 0)
                            <span class="absolute -top-2 -right-2 inline-flex items-center justify-center w-5 h-5 text-[10px] font-bold text-white bg-red-500 border-2 border-white rounded-full">
                                {{ $jumlahNotifikasi }}
                            </span>
                        @endif
                    </button>

                    <div id="dropdownNotification"
                         class="z-50 hidden w-80 max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-gray-100">

                        <div class="block px-4 py-3 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 text-sm">
                            Notifikasi
                        </div>

                        <div class="divide-y divide-gray-100">
                            @forelse($notifikasis ?? [] as $notif)
                                <div class="flex px-4 py-3 hover:bg-gray-100">
                                    <div class="w-full">
                                        <div class="text-sm font-semibold text-gray-900">
                                            {{ $notif->judul }}
                                        </div>

                                        <div class="text-xs text-gray-600 mt-1">
                                            {{ $notif->pesan }}
                                        </div>

                                        <div class="text-[11px] mt-1 {{ $notif->status == 'belum_dibaca' ? 'text-red-500' : 'text-gray-400' }}">
                                            {{ $notif->status == 'belum_dibaca' ? 'Belum dibaca' : 'Dibaca' }}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="px-4 py-4 text-sm text-gray-500 text-center">
                                    Tidak ada notifikasi.
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <img src="{{ asset('images/Rafli.jpg') }}"
                         onerror="this.src='https://via.placeholder.com/45?text=User'"
                         class="w-9 h-9 rounded-full object-cover border"
                         alt="Profile">

                    <div class="leading-tight">
                        <h5 class="text-xs font-bold text-gray-900">Halo, Sigma</h5>
                        <p class="text-[10px] text-gray-500">Selamat Datang</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-8 pb-10">

        @if(session('success'))
            <div class="p-4 mb-5 text-sm text-green-800 rounded-lg bg-green-100 border border-green-300">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="p-4 mb-5 text-sm text-red-800 rounded-lg bg-red-100 border border-red-300">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-md px-6 pt-6 pb-4">

            <form method="GET"
                  action="{{ route('daftar.buku') }}"
                  class="flex items-center gap-2 mb-6">

               <input type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari judul buku atau penulis..."
                class="w-[520px] p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">

                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-7 py-3 rounded-lg">
                    Cari
                </button>
            </form>

            <div class="relative mb-7 px-12">
                <button type="button"
                        onclick="document.getElementById('genreScroll').scrollBy({left: -180, behavior: 'smooth'})"
                        class="absolute left-0 top-0 z-10 w-10 h-10 bg-white border border-gray-300 rounded-full shadow-md flex items-center justify-center hover:bg-gray-100">
                    <svg class="w-5 h-5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <div id="genreScroll" class="flex items-center gap-4 overflow-x-auto pb-3 scroll-smooth">

                    <a href="{{ route('daftar.buku') }}"
                       class="shrink-0 h-10 min-w-[120px] px-5 flex items-center justify-center rounded-lg text-sm font-semibold border transition
                       {{ !request()->has('kategori')
                            ? 'bg-blue-600 text-white border-blue-600'
                            : 'bg-white text-gray-900 border-gray-300 hover:bg-blue-600 hover:text-white hover:border-blue-600' }}">
                        Semua
                    </a>

                    @foreach($kategori as $item)
                        <a href="{{ route('daftar.buku', ['kategori' => $item->id]) }}"
                           class="shrink-0 h-10 min-w-[120px] px-5 flex items-center justify-center rounded-lg text-sm font-semibold border transition
                           {{ request('kategori') == $item->id
                                ? 'bg-blue-600 text-white border-blue-600'
                                : 'bg-white text-gray-900 border-gray-300 hover:bg-blue-600 hover:text-white hover:border-blue-600' }}">
                            {{ $item->nama_kategori }}
                        </a>
                    @endforeach
                </div>

                <button type="button"
                        onclick="document.getElementById('genreScroll').scrollBy({left: 180, behavior: 'smooth'})"
                        class="absolute right-0 top-0 z-10 w-10 h-10 bg-white border border-gray-300 rounded-full shadow-md flex items-center justify-center hover:bg-gray-100">
                    <svg class="w-5 h-5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-5 gap-5">

                @forelse($buku as $item)

                    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 p-4">

                        <div class="flex justify-center pt-4">
                            <img src="{{ $item->cover ? asset('uploads/buku/' . $item->cover) : 'https://via.placeholder.com/180x260?text=No+Cover' }}"
                                 alt="{{ $item->judul }}"
                                 class="w-[140px] h-[210px] object-cover rounded-lg shadow">
                        </div>

                        <div class="pt-4">

                            <h3 class="font-bold text-gray-900 text-sm leading-5 line-clamp-2 min-h-[40px]">
                                {{ $item->judul }}
                            </h3>

                            <p class="text-xs text-gray-500 mt-1 line-clamp-1">
                                {{ $item->penulis }}
                            </p>

                            <div class="flex justify-between items-center mt-3">
                                <span class="text-xs px-2 py-1 rounded-full
                                    {{ $item->stok > 0 ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                    {{ $item->stok > 0 ? 'Tersedia' : 'Habis' }}
                                </span>

                                <span class="text-xs text-gray-500">
                                    Stok: {{ $item->stok }}
                                </span>
                            </div>

                            <div class="flex items-center mt-2 text-xs">
                                <svg class="w-3 h-3 text-yellow-400 me-1"
                                     xmlns="http://www.w3.org/2000/svg"
                                     fill="currentColor"
                                     viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.377a1.534 1.534 0 0 0 2.226-1.616l-.863-5.031L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>

                                <span class="text-yellow-500">
                                    {{ $item->rating }}
                                </span>

                                <span class="text-gray-400 ml-1">
                                    ({{ $item->jumlah_ulasan }})
                                </span>
                            </div>

                            @if($item->stok > 0)
                                <button type="button"
                                        onclick="openModal('modal-buku-{{ $item->id }}')"
                                        class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 rounded-lg">
                                    Pinjam Buku
                                </button>
                            @else
                                <button disabled
                                        class="mt-3 w-full bg-gray-400 text-white text-sm font-semibold py-2 rounded-lg cursor-not-allowed">
                                    Tidak Tersedia
                                </button>
                            @endif

                        </div>
                    </div>

                    <div id="modal-buku-{{ $item->id }}"
                         class="hidden fixed inset-0 z-[9999] bg-black/50 items-center justify-center">

                        <div class="bg-white w-full max-w-xl rounded-2xl shadow-lg border border-sky-300 mx-4">

                            <div class="flex items-center justify-between p-5 border-b">
                                <h3 class="text-2xl font-bold text-blue-900">
                                    Detail Buku
                                </h3>

                                <button type="button"
                                        onclick="closeModal('modal-buku-{{ $item->id }}')"
                                        class="w-8 h-8 rounded-full border border-sky-400 text-sky-600 hover:bg-sky-100">
                                    <svg class="w-3 h-3 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l12 12M13 1 1 13"/>
                                    </svg>
                                </button>
                            </div>

                            <form action="{{ route('daftar.buku.pinjam') }}" method="POST">
                                @csrf

                                <input type="hidden" name="buku_id" value="{{ $item->id }}">

                                <div class="p-6">

                                    <div class="flex gap-5">
                                        <div class="w-36 h-52 bg-gray-50 border rounded-lg flex items-center justify-center p-3">
                                            <img src="{{ $item->cover ? asset('uploads/buku/' . $item->cover) : 'https://via.placeholder.com/160x220?text=No+Cover' }}"
                                                 class="w-full h-full object-contain"
                                                 alt="{{ $item->judul }}">
                                        </div>

                                        <div class="flex-1">
                                            <h4 class="text-2xl font-bold text-gray-900">
                                                {{ $item->judul }}
                                            </h4>

                                            <p class="text-blue-600 font-semibold uppercase mt-1">
                                                {{ $item->penulis }}
                                            </p>

                                            <p class="text-gray-600 mt-5">
                                                Kategori:
                                                <span class="font-semibold">
                                                    {{ $item->kategori->nama_kategori ?? '-' }}
                                                </span>
                                            </p>

                                            <p class="text-gray-600 mt-1">
                                                Stok:
                                                <span class="font-bold">
                                                    {{ $item->stok }}
                                                </span>
                                            </p>

                                            <p class="flex items-center gap-1 text-yellow-500 mt-1">
                                                <svg class="w-4 h-4 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.377a1.534 1.534 0 0 0 2.226-1.616l-.863-5.031L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                </svg>
                                                <span>{{ $item->rating }}</span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-7">
                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-900">
                                                Tanggal Peminjaman
                                            </label>

                                            <input type="date"
                                                   name="tanggal_peminjaman"
                                                   value="{{ date('Y-m-d') }}"
                                                   readonly
                                                   class="w-full p-2.5 text-sm border border-sky-400 rounded-lg bg-gray-100 text-gray-700 cursor-not-allowed focus:ring-blue-500 focus:border-blue-500">
                                        </div>

                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-900">
                                                Tanggal Pengembalian
                                            </label>

                                            <input type="date"
                                                   name="tanggal_pengembalian"
                                                   value="{{ date('Y-m-d', strtotime('+7 days')) }}"
                                                   readonly
                                                   class="w-full p-2.5 text-sm border border-sky-400 rounded-lg bg-gray-100 text-gray-700 cursor-not-allowed focus:ring-blue-500 focus:border-blue-500">
                                        </div>
                                    </div>

                                    <p class="text-red-500 italic text-xs mt-3">
                                        *Keterlambatan pengembalian akan dihitung sebagai denda.
                                    </p>

                                    <div class="flex justify-center mt-6">
                                        <button type="submit"
                                                class="text-white bg-blue-600 hover:bg-blue-700 rounded-lg text-sm px-8 py-2.5 font-bold">
                                            Konfirmasi Peminjaman
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                @empty
                    <div class="col-span-full p-10 text-center bg-white rounded-xl border border-dashed border-gray-300">
                        <p class="text-gray-500">Data buku belum tersedia.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

    @include('components.footer')

</main>

<script>
    function openModal(id) {
        const modal = document.getElementById(id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
    }

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            document.querySelectorAll('[id^="modal-buku-"]').forEach(function (modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            });

            document.body.classList.remove('overflow-hidden');
        }
    });
</script>
=======
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Di Perpustakaan Digital</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white flex justify-between">
        <h1 class="text-lg font-bold">EXPLOTERECH</h1>
        <div>
            <a href="#" class="mr-4">Dashboard</a>
            <a href="#">Logout</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">Daftar Buku</h2>

        <!-- Search -->
        <input type="text" placeholder="Cari buku..."
            class="w-full p-2 mb-4 border rounded">

        <!-- Book List -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <!-- Card Buku -->
            <div class="bg-white p-4 rounded shadow">
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9786020633176_.Atomic_Habit.jpg" class="mb-3 rounded">
                <h3 class="font-bold">Atomic Habits</h3>
                <p class="text-sm text-gray-500">Penulis: James Clear</p>
                <p class="text-green-600 mt-2">Tersedia</p>

                <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded w-full hover:bg-blue-600">
                    Pinjam
                </button>
            </div>

             <!-- Card Buku -->
            <div class="bg-white p-4 rounded shadow">
                <img src="https://cdn.gramedia.com/uploads/products/95ob5m98ur.jpg" class="mb-3 rounded">
                <h3 class="font-bold">seporsi mie ayam sebelum mati</h3>
                <p class="text-sm text-gray-500">Penulis: Brian Khrisna</p>
                <p class="text-green-600 mt-2">Tersedia</p>

                <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded w-full hover:bg-blue-600">
                    Pinjam
                </button>
            </div>

            <!-- Card Buku -->
            <div class="bg-white p-4 rounded shadow">
                <img src="https://cdn.gramedia.com/uploads/items/9786020332956_Bumi-New-Cover.jpg" class="mb-3 rounded">
                <h3 class="font-bold">Bumi</h3>
                <p class="text-sm text-gray-500">Penulis: Tere Liye</p>
                <p class="text-red-600 mt-2">Dipinjam</p>

                <button disabled class="mt-3 bg-gray-400 text-white px-4 py-2 rounded w-full">
                    Tidak Tersedia
                </button>
            </div>

        </div>
    </div>
>>>>>>> 2dd4a82683bcb78480bad5d83caf5cdd3378ca47

</body>
</html>