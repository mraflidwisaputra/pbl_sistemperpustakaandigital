<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <title>Beranda Perpustakaan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
=======
    <title>Beranda - Perpustakaan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
>>>>>>> 2dd4a82683bcb78480bad5d83caf5cdd3378ca47
</head>

<body class="bg-slate-100 overflow-x-hidden">

<<<<<<< HEAD
@include('components.sidebar')

<main class="ml-[210px] min-h-screen flex flex-col">

    <!-- HERO -->
    <section class="relative h-[260px] bg-cover bg-center"
             style="background-image: url('{{ asset('images/library.jpg') }}')">

        <div class="absolute inset-0 bg-black/50"></div>

        <!-- PROFILE + NOTIFIKASI -->
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

                <!-- DROPDOWN NOTIFIKASI -->
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
                    <h5 class="text-xs font-bold text-gray-900">
                        Halo, Sigma
                    </h5>
                    <p class="text-[10px] text-gray-500">
                        Selamat Datang
                    </p>
                </div>
            </div>
        </div>

        <!-- HERO TEXT -->
        <div class="relative z-10 h-full flex flex-col items-center justify-center text-center text-white px-6">
            <h1 class="text-2xl font-extrabold drop-shadow-lg">
                SELAMAT DATANG DI PERPUSTAKAAN DIGITAL
            </h1>

            <p class="mt-2 text-base max-w-2xl">
                Temukan, baca, dan pinjam ribuan buku dengan mudah kapan saja dan di mana saja
            </p>

            <a href="#kategori"
               class="inline-flex items-center mt-5 text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2">
                Jelajahi Buku
            </a>
        </div>
    </section>

    <!-- CONTENT -->
    <section id="kategori" class="p-7 flex-1">

        <!-- KATEGORI POPULER -->
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-bold text-gray-900">
                Kategori Populer
            </h2>

            <a href="{{ route('daftar.buku') }}"
               class="inline-flex items-center text-sm font-semibold text-blue-600 hover:underline">
                Lihat Semua
            </a>
        </div>

        <!-- GENRE DI BAWAH JUDUL KATEGORI POPULER -->
        <div class="relative mb-5">

            <!-- TOMBOL KIRI GENRE -->
            <button type="button"
                    onclick="geserGenre(-1)"
                    class="hidden lg:flex absolute -left-4 top-1/2 -translate-y-1/2 z-20">
                <div class="w-10 h-10 rounded-full bg-white border border-gray-300 shadow flex items-center justify-center hover:scale-105 transition">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-4 h-4 text-black"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="4">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M15 19l-7-7 7-7"/>
                    </svg>
                </div>
            </button>

            <div id="sliderGenre"
                 class="flex gap-3 overflow-x-auto scroll-smooth pb-3 no-scrollbar">

                @forelse($kategori ?? [] as $item)
                    <a href="{{ route('daftar.buku', ['kategori' => $item->id]) }}"
                       class="flex-shrink-0 min-w-[170px] h-[45px] flex items-center justify-center text-gray-900 bg-white border border-gray-300 hover:bg-blue-600 hover:text-white font-medium rounded-lg text-xs px-4 text-center transition">
                        {{ $item->nama_kategori }}
                    </a>
                @empty
                    <p class="text-sm text-gray-500">
                        Kategori belum tersedia.
                    </p>
                @endforelse

            </div>

            <!-- TOMBOL KANAN GENRE -->
            <button type="button"
                    onclick="geserGenre(1)"
                    class="hidden lg:flex absolute -right-4 top-1/2 -translate-y-1/2 z-20">
                <div class="w-10 h-10 rounded-full bg-white border border-gray-300 shadow flex items-center justify-center hover:scale-105 transition">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-4 h-4 text-black"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="4">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </button>

        </div>

        <!-- CARD BUKU KATEGORI POPULER -->
        <div class="relative mb-10">

            <!-- TOMBOL KIRI CARD -->
            <button type="button"
                    onclick="geserKategoriPopuler(-1)"
                    class="hidden lg:flex absolute -left-4 top-1/2 -translate-y-1/2 z-20">
                <div class="w-10 h-10 rounded-full bg-white border border-gray-300 shadow flex items-center justify-center hover:scale-105 transition">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-5 h-5 text-black"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="4">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M15 19l-7-7 7-7"/>
                    </svg>
                </div>
            </button>

            <div id="sliderKategoriPopuler"
                 class="flex gap-5 overflow-x-auto scroll-smooth pb-4 no-scrollbar">

                @forelse($kategoriPopuler ?? [] as $buku)
                    <div class="min-w-[220px] max-w-[220px] bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">

                        <div class="flex justify-center items-center bg-slate-50 p-3">
                            <img class="h-[220px] w-auto max-w-full object-contain rounded-xl"
                                 src="{{ asset('uploads/buku/' . $buku->cover) }}"
                                 onerror="this.src='https://via.placeholder.com/180x260?text=No+Cover'"
                                 alt="{{ $buku->judul }}">
                        </div>

                        <div class="px-4 py-4">
                            <h5 class="text-sm font-bold text-gray-900 line-clamp-2">
                                {{ $buku->judul }}
                            </h5>

                            <p class="text-xs text-gray-600 mt-1 line-clamp-1">
                                {{ $buku->penulis }}
                            </p>

                            <p class="text-[11px] text-blue-600 font-semibold mt-1">
                                {{ $buku->kategori->nama_kategori ?? 'Tanpa Genre' }}
                            </p>

                            <div class="flex items-center gap-1 mt-2 text-xs">
                                <span class="text-yellow-500 font-semibold">
                                    ★ {{ $buku->rating ?? '0.0' }}
                                </span>

                                <span class="text-gray-500">
                                    ({{ $buku->jumlah_ulasan ?? 0 }})
                                </span>
                            </div>

                            <span class="inline-block mt-3 bg-green-100 text-green-800 text-[11px] font-medium px-2 py-1 rounded">
                                {{ $buku->status ?? 'Tersedia' }}
                            </span>
                        </div>
                    </div>
                @empty
                    <p class="text-sm text-gray-500">
                        Data buku belum tersedia.
                    </p>
                @endforelse

            </div>

            <!-- TOMBOL KANAN CARD -->
            <button type="button"
                    onclick="geserKategoriPopuler(1)"
                    class="hidden lg:flex absolute -right-4 top-1/2 -translate-y-1/2 z-20">
                <div class="w-10 h-10 rounded-full bg-white border border-gray-300 shadow flex items-center justify-center hover:scale-105 transition">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-5 h-5 text-black"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="4">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </button>

        </div>

        <!-- REKOMENDASI -->
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-bold text-gray-900">
                Rekomendasi Untuk Anda
            </h2>

            <a href="{{ route('daftar.buku') }}"
               class="inline-flex items-center text-sm font-semibold text-blue-600 hover:underline">
                Lihat Semua
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            @forelse($rekomendasi ?? [] as $buku)

                <div class="bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">

                    <div class="flex justify-center items-center bg-slate-50 p-3">
                        <img class="h-[240px] w-auto max-w-full object-contain rounded-xl"
                             src="{{ asset('uploads/buku/' . $buku->cover) }}"
                             onerror="this.src='https://via.placeholder.com/180x260?text=No+Cover'"
                             alt="{{ $buku->judul }}">
                    </div>

                    <div class="px-4 py-4">
                        <h5 class="text-sm font-bold text-gray-900 line-clamp-2">
                            {{ $buku->judul }}
                        </h5>

                        <p class="text-xs text-gray-600 mt-1">
                            {{ $buku->penulis }}
                        </p>

                        <p class="text-[11px] text-blue-600 font-semibold mt-1">
                            {{ $buku->kategori->nama_kategori ?? 'Tanpa Genre' }}
                        </p>

                        <div class="flex items-center gap-1 mt-2 text-xs">
                            <span class="text-yellow-500 font-semibold">
                                ★ {{ $buku->rating ?? '0.0' }}
                            </span>

                            <span class="text-gray-500">
                                ({{ $buku->jumlah_ulasan ?? 0 }})
                            </span>
                        </div>

                        <span class="inline-block mt-3 bg-green-100 text-green-800 text-[11px] font-medium px-2 py-1 rounded">
                            {{ $buku->status ?? 'Tersedia' }}
                        </span>
                    </div>
                </div>

            @empty
                <p class="text-sm text-gray-500">
                    Rekomendasi belum tersedia.
                </p>
            @endforelse
        </div>

        <!-- BUKU TERBARU -->
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-bold text-gray-900">
                Buku Terbaru
            </h2>

            <a href="{{ route('daftar.buku') }}"
               class="inline-flex items-center text-sm font-semibold text-blue-600 hover:underline">
                Lihat Semua
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @forelse($bukuTerbaru ?? [] as $buku)

                <div class="flex items-center gap-4 p-4 bg-white border border-gray-200 rounded-xl shadow-sm hover:bg-gray-50 transition">

                    <div class="flex-shrink-0 bg-slate-50 rounded-lg p-2">
                        <img class="w-20 h-28 rounded-xl object-contain"
                             src="{{ asset('uploads/buku/' . $buku->cover) }}"
                             onerror="this.src='https://via.placeholder.com/80x110?text=No+Cover'"
                             alt="{{ $buku->judul }}">
                    </div>

                    <div>
                        <h5 class="text-sm font-bold text-gray-900 line-clamp-2">
                            {{ $buku->judul }}
                        </h5>

                        <p class="text-xs text-gray-600 mt-1">
                            {{ $buku->penulis }}
                        </p>

                        <p class="text-[11px] text-blue-600 font-semibold mt-1">
                            {{ $buku->kategori->nama_kategori ?? 'Tanpa Genre' }}
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            Tahun: {{ $buku->tahun_terbit ?? '-' }}
                        </p>
                    </div>
                </div>

            @empty
                <p class="text-sm text-gray-500">
                    Buku terbaru belum tersedia.
                </p>
            @endforelse
        </div>

    </section>

    @include('components.footer')

</main>

<script>
    function geserGenre(arah) {
        const slider = document.getElementById('sliderGenre');

        if (slider) {
            slider.scrollBy({
                left: arah * 300,
                behavior: 'smooth'
            });
        }
    }

    function geserKategoriPopuler(arah) {
        const slider = document.getElementById('sliderKategoriPopuler');

        if (slider) {
            slider.scrollBy({
                left: arah * 260,
                behavior: 'smooth'
            });
        }
    }
</script>

=======
@include('components.sidebarAnggota')

<main class="ml-[260px] min-h-screen">

    @include('components.topbarAnggota', [
        'title' => 'Beranda',
        'subtitle' => 'Selamat datang di sistem perpustakaan digital.'
    ])

    <section class="px-8 pb-10">

        <div class="relative h-80 rounded-2xl overflow-hidden bg-cover bg-center shadow-md"
             style="background-image: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');">
            <div class="absolute inset-0 bg-black/50"></div>

            <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-4">
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    SELAMAT DATANG DI PERPUSTAKAAN DIGITAL
                </h1>

                <p class="text-xl text-gray-200 max-w-2xl">
                    Temukan, baca, dan pinjam ribuan buku dengan mudah kapan saja.
                </p>
            </div>
        </div>

        <div class="mt-10 space-y-12">

            <section>
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">
                        Kategori Populer
                    </h2>

                    <a href="{{ route('daftar.buku') }}"
                       class="text-blue-600 hover:text-blue-700 font-medium">
                        Lihat Semua
                    </a>
                </div>

                <div class="flex gap-3 mb-8 overflow-x-auto pb-2">
                    <span class="px-6 py-2 border border-gray-300 rounded-lg bg-white">Fiksi</span>
                    <span class="px-6 py-2 border border-gray-300 rounded-lg bg-white">Non-Fiksi</span>
                    <span class="px-6 py-2 border border-gray-300 rounded-lg bg-white">Sains</span>
                    <span class="px-6 py-2 border border-gray-300 rounded-lg bg-white">Teknologi</span>
                    <span class="px-6 py-2 border border-gray-300 rounded-lg bg-white">Sejarah</span>
                    <span class="px-6 py-2 border border-gray-300 rounded-lg bg-white">Pendidikan</span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="https://cdn.gramedia.com/uploads/items/9786020639536_nebula_cov.jpg"
                             class="w-full h-64 object-cover"
                             alt="Nebula">

                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">Nebula</h3>
                            <p class="text-gray-600 text-sm">Tere Liye</p>

                            <span class="inline-block mt-3 bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                Tersedia
                            </span>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="https://www.gramedia.com/blog/content/images/2020/08/laut-bercerita-leila-s-chudori_gramedia.jpg"
                             class="w-full h-64 object-cover"
                             alt="Laut Bercerita">

                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">Laut Bercerita</h3>
                            <p class="text-gray-600 text-sm">Leila S. Chudori</p>

                            <span class="inline-block mt-3 bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                Tersedia
                            </span>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="https://www.gramedia.com/blog/content/images/2024/12/Brianna-dan-Bottomwise.png"
                             class="w-full h-64 object-cover"
                             alt="Brianna dan Bottomwise">

                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">
                                Brianna dan Bottomwise
                            </h3>

                            <p class="text-gray-600 text-sm">Andrea Hirata</p>

                            <span class="inline-block mt-3 bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                Tersedia
                            </span>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/ccmq4kges6gstnsrrtxabw.jpg"
                             class="w-full h-64 object-cover"
                             alt="Bintang">

                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">Bintang</h3>
                            <p class="text-gray-600 text-sm">Tere Liye</p>

                            <span class="inline-block mt-3 bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                Tersedia
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">
                        Buku Terbaru
                    </h2>

                    <a href="{{ route('daftar.buku') }}"
                       class="text-blue-600 hover:text-blue-700 font-medium">
                        Lihat Semua
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="flex gap-4 bg-white p-4 rounded-xl shadow-md">
                        <img src="https://cdn.gramedia.com/uploads/items/9786020648293_Keajaiban_Toko_Kelontong_Namiya_cov.jpg"
                             class="w-20 h-28 object-cover rounded"
                             alt="Keajaiban Toko Kelontong Namiya">

                        <div>
                            <h3 class="font-bold text-gray-800">
                                Keajaiban Toko Kelontong Namiya
                            </h3>

                            <p class="text-gray-600 text-sm">Keigo Higashino</p>
                            <p class="text-gray-400 text-sm">2011</p>
                        </div>
                    </div>

                    <div class="flex gap-4 bg-white p-4 rounded-xl shadow-md">
                        <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/1/5/3be5vq8uakqtjyo7mncgtd.jpg"
                             class="w-20 h-28 object-cover rounded"
                             alt="Pasta Kacang Merah">

                        <div>
                            <h3 class="font-bold text-gray-800">
                                Pasta Kacang Merah
                            </h3>

                            <p class="text-gray-600 text-sm">Tetsuya Aikawa</p>
                            <p class="text-gray-400 text-sm">2022</p>
                        </div>
                    </div>

                    <div class="flex gap-4 bg-white p-4 rounded-xl shadow-md">
                        <img src="https://cdn.gramedia.com/uploads/items/Narnia_3_The_Horse_and_His_Boy_cov_page-0001.jpg"
                             class="w-20 h-28 object-cover rounded"
                             alt="The Horse And His Boy">

                        <div>
                            <h3 class="font-bold text-gray-800">
                                The Horse And His Boy
                            </h3>

                            <p class="text-gray-600 text-sm">C. S. Lewis</p>
                            <p class="text-gray-400 text-sm">1954</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>

</main>

>>>>>>> 2dd4a82683bcb78480bad5d83caf5cdd3378ca47
</body>
</html>