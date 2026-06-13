<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda - Perpustakaan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 overflow-x-hidden">

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

</body>
</html>