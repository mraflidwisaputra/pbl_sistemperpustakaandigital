<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda Perpustakaan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-slate-100 overflow-x-hidden">

@include('components.sidebar')

<main class="ml-[210px] min-h-screen flex flex-col">

    <!-- HERO -->
    <section class="relative h-[260px] bg-cover bg-center"
             style="background-image: url('{{ asset('images/library.jpg') }}')">

        <div class="absolute inset-0 bg-black/50"></div>

         <main>
    @include('components.profilanggota')
    </main>

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

        <div class="relative mb-10">

            <button type="button"
                    onclick="geserKategoriPopuler(-1)"
                    class="hidden lg:flex absolute -left-4 top-1/2 -translate-y-1/2 z-20">
                <div class="w-10 h-10 rounded-full bg-white border border-gray-300 shadow flex items-center justify-center hover:scale-105 transition">
                    <i class="fa-solid fa-chevron-left text-black"></i>
                </div>
            </button>

            <div id="sliderKategoriPopuler"
                 class="flex gap-5 overflow-x-auto scroll-smooth pb-4 no-scrollbar">

                @forelse($kategoriPopuler ?? [] as $buku)
                    <div class="min-w-[220px] max-w-[220px] bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">

                        <div class="flex justify-center items-center bg-slate-50 p-3">
                            <img class="h-[220px] w-auto max-w-full object-contain rounded-xl"
                                 src="{{ $buku->cover ? asset('storage/' . $buku->cover) : 'https://via.placeholder.com/180x260?text=No+Cover' }}"
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
                                    ★ {{ number_format($buku->rating_otomatis ?? 0, 1) }}
                                </span>

                                <span class="text-gray-500">
                                    ({{ $buku->total_dipinjam ?? 0 }})
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

            <button type="button"
                    onclick="geserKategoriPopuler(1)"
                    class="hidden lg:flex absolute -right-4 top-1/2 -translate-y-1/2 z-20">
                <div class="w-10 h-10 rounded-full bg-white border border-gray-300 shadow flex items-center justify-center hover:scale-105 transition">
                    <i class="fa-solid fa-chevron-right text-black"></i>
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
                             src="{{ $buku->cover ? asset('storage/' . $buku->cover) : 'https://via.placeholder.com/180x260?text=No+Cover' }}"
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
                                ★ {{ number_format($buku->rating_otomatis ?? 0, 1) }}
                            </span>

                            <span class="text-gray-500">
                                ({{ $buku->total_dipinjam ?? 0 }})
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
                             src="{{ $buku->cover ? asset('storage/' . $buku->cover) : 'https://via.placeholder.com/80x110?text=No+Cover' }}"
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

</body>
</html>