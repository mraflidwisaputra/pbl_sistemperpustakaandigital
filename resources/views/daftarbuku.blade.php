<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-slate-100 overflow-x-hidden">
    @include('components.sidebar')

<main class="ml-[210px] min-h-screen flex flex-col">
    @include('components.profilanggota')
    
    <section class="px-8 pt-0 pb-6">
        <div class="flex items-center justify-between relative">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900">
                    Daftar Buku
                </h1>

                <p class="text-sm text-gray-500 mt-1">
                    Cari, pilih, dan pinjam buku favoritmu.
                </p>

            </div>
        </div>
    </section>

    <section class="px-8 pb-10 flex-1">

        @include('components.notification')

        <div class="bg-white rounded-2xl shadow-md px-6 pt-6 pb-6">

            <form method="GET"
                  action="{{ route('daftar.buku') }}"
                  class="flex flex-wrap items-center gap-3 mb-6">

                <input type="text"
                       name="search"
                       value="{{ request('search') }}"
                       placeholder="Cari judul buku atau penulis..."
                       class="w-[420px] max-w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">

                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-5 py-3 rounded-lg transition">
                    Cari
                </button>
            </form>

            <div class="relative mb-7 px-12">

                <button type="button"
                        onclick="document.getElementById('genreScroll').scrollBy({ left: -180, behavior: 'smooth' })"
                        class="absolute left-0 top-0 z-10 w-10 h-10 bg-white border border-gray-300 rounded-full shadow-md flex items-center justify-center hover:bg-gray-100 transition">

                    <svg class="w-5 h-5 text-gray-800"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="3"
                              d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <div id="genreScroll"
                     class="flex items-center gap-4 overflow-x-auto pb-3 scroll-smooth scrollbar-hide">

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
                        onclick="document.getElementById('genreScroll').scrollBy({ left: 180, behavior: 'smooth' })"
                        class="absolute right-0 top-0 z-10 w-10 h-10 bg-white border border-gray-300 rounded-full shadow-md flex items-center justify-center hover:bg-gray-100 transition">

                    <svg class="w-5 h-5 text-gray-800"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="3"
                              d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">

                @forelse($buku as $item)

                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-lg transition duration-300 overflow-hidden">

                        <div class="flex justify-center p-4 pb-0">
                            <img src="{{ $item->cover ? asset('storage/' . $item->cover) : 'https://via.placeholder.com/180x260?text=No+Cover' }}"
                                 alt="{{ $item->judul }}"
                                 class="w-[135px] h-[200px] object-cover rounded-xl shadow">
                        </div>

                        <div class="p-4 pt-3">

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
                                    {{ number_format($item->rating_otomatis, 1) }}
                                </span>

                                <span class="text-gray-400 ml-1">
                                    ({{ $item->total_dipinjam ?? 0 }})
                                </span>
                            </div>

                            @if($item->stok > 0)
                                <button type="button"
                                        onclick="openModal('modal-buku-{{ $item->id }}')"
                                        class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2.5 rounded-xl transition">
                                    Pinjam Buku
                                </button>
                            @else
                                <button disabled
                                        class="mt-4 w-full bg-gray-400 text-white text-sm font-semibold py-2.5 rounded-xl cursor-not-allowed">
                                    Tidak Tersedia
                                </button>
                            @endif

                        </div>
                    </div>

                    <div id="modal-buku-{{ $item->id }}"
                         class="hidden fixed inset-0 z-[9999] bg-black/50 items-center justify-center">

                        <div class="bg-white w-full max-w-2xl rounded-2xl shadow-xl mx-4 overflow-hidden">

                            <div class="flex items-center justify-between p-5 border-b bg-white">
                                <h3 class="text-2xl font-bold text-blue-900">
                                    Detail Buku
                                </h3>

                                <button type="button"
                                        onclick="closeModal('modal-buku-{{ $item->id }}')"
                                        class="w-8 h-8 rounded-full border border-sky-400 text-sky-600 hover:bg-sky-100 transition">

                                    <svg class="w-3 h-3 mx-auto"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none"
                                         viewBox="0 0 14 14">
                                        <path stroke="currentColor"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M1 1l12 12M13 1 1 13"/>
                                    </svg>
                                </button>
                            </div>

                            <form action="{{ route('daftar.buku.pinjam') }}" method="POST">
                                @csrf

                                <input type="hidden" name="buku_id" value="{{ $item->id }}">

                                <div class="p-6">

                                    <div class="flex flex-col md:flex-row gap-5">
                                        <div class="w-36 h-52 bg-gray-50 border rounded-lg flex items-center justify-center p-3 mx-auto md:mx-0">
                                            <img src="{{ $item->cover ? asset('storage/' . $item->cover) : 'https://via.placeholder.com/160x220?text=No+Cover' }}"
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
                                                <svg class="w-4 h-4 text-yellow-400"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     fill="currentColor"
                                                     viewBox="0 0 22 20">
                                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.377a1.534 1.534 0 0 0 2.226-1.616l-.863-5.031L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                </svg>

                                                <span>
                                                    {{ $item->rating }}
                                                </span>
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
                                                class="text-white bg-blue-600 hover:bg-blue-700 rounded-lg text-sm px-8 py-2.5 font-bold transition">
                                            Konfirmasi Peminjaman
                                        </button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                @empty
                    <div class="col-span-full p-10 text-center bg-white rounded-xl border border-dashed border-gray-300">
                        <p class="text-gray-500">
                            Data buku belum tersedia.
                        </p>
                    </div>
                @endforelse

            </div>

        </div>

    </section>

    <div class="mt-auto">
        @include('components.footer')
    </div>

</main>

<script>
    function openModal(id) {
        const modal = document.getElementById(id);

        if (!modal) {
            return;
        }

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('overflow-hidden');
    }

    function closeModal(id) {
        const modal = document.getElementById(id);

        if (!modal) {
            return;
        }

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

    document.querySelectorAll('[id^="modal-buku-"]').forEach(function (modal) {
        modal.addEventListener('click', function (event) {
            if (event.target === modal) {
                closeModal(modal.id);
            }
        });
    });
</script>

</body>
</html>