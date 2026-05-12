<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExploreTech - Perpustakaan Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">

    <div class="flex h-screen overflow-hidden">
       <!-- Sidebar -->
        <aside class="w-64 bg-slate-800 text-white flex flex-col fixed h-full z-20">
            
          <!-- Logo di Sidebar -->
            <div class="p-6 flex items-center justify-center border-b border-slate-700">
            <div class="bg-white rounded-full p-3 w-16 h-16 flex items-center justify-center shadow-lg">
            <img src="/images/exploretech.jpg" alt="Logo ExploreTech" class="w-12 h-12 object-contain">
         </div>
    </div>
            
            
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="{{ url('/home') }}" class="flex items-center gap-3 px-4 py-3 bg-blue-600 rounded-lg text-white transition-colors">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span>
                </a>
                <a href="{{ url('/daftarbuku') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                    <i class="fas fa-list"></i>
                    <span>Daftar buku</span>
                </a>
                <a href="{{ url('/riwayat-peminjaman') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                    <i class="fas fa-history"></i>
                    <span>Riwayat Peminjaman</span>
                </a>
                <a href="{{ url('/about') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                    <i class="fas fa-info-circle"></i>
                    <span>Tentang</span>
                </a>
                <a href="{{ url('/contact') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                    <i class="fas fa-envelope"></i>
                    <span>Kontak</span>
                </a>
            </nav>

            <div class="p-4 border-t border-slate-700">
                <button class="flex items-center gap-3 px-4 py-3 w-full bg-blue-600 hover:bg-blue-700 rounded-lg transition-colors text-white">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-64 overflow-y-auto">
            <!-- Header -->
            <header class="bg-slate-800 text-white p-4 flex justify-between items-center sticky top-0 z-10">
                <div class="flex items-center gap-4">
                    <button class="md:hidden">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                        <i class="fas fa-user text-white"></i>
                    </div>
                </div>
            </header>

            <!-- Hero Section -->
            <section class="relative h-80 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-4">
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        SELAMAT DATANG DI PERPUSTAKAAN DIGITAL
                    </h1>
                    <p class="text-xl text-gray-200 mb-8 max-w-2xl">
                        Temukan, baca, dan pinjam ribuan buku dengan mudah kapan saja dan di mana saja
                    </p>
                </div>
            </section>

            <div class="p-8 space-y-12">
                <!-- Kategori Populer -->
                <section>
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Kategori populer</h2>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1">
                            Lihat Semua <i class="fas fa-chevron-right text-sm"></i>
                        </a>
                    </div>
                    
                    <!-- Category Pills -->
                    <div class="flex gap-3 mb-8 overflow-x-auto pb-2">
                        <button class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 whitespace-nowrap transition-colors">Fiksi</button>
                        <button class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 whitespace-nowrap transition-colors">Non-Fiksi</button>
                        <button class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 whitespace-nowrap transition-colors">Sains</button>
                        <button class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 whitespace-nowrap transition-colors">Teknologi</button>
                        <button class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 whitespace-nowrap transition-colors">Sejarah</button>
                        <button class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 whitespace-nowrap transition-colors">Pengembangan Diri</button>
                        <button class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 whitespace-nowrap transition-colors">Pendidikan</button>
                        <button class="w-10 h-10 border border-gray-300 rounded-full flex items-center justify-center hover:bg-gray-100">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>

                    <!-- Books Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Book Card 1 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-64 bg-gray-200 flex items-center justify-center">
                                <img src="https://cdn.gramedia.com/uploads/items/9786020639536_nebula_cov.jpg" alt="Nebula" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800 mb-1">Nebula</h3>
                                <p class="text-gray-600 text-sm mb-2">Tere Liye</p>
                                <div class="flex items-center gap-2 mb-3">
                                    <div class="flex items-center text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <span class="text-gray-700 ml-1 text-sm">4.8</span>
                                    </div>
                                    <span class="text-gray-400 text-sm">(120)</span>
                                </div>
                                <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Tersedia</span>
                            </div>
                        </div>

                        <!-- Book Card 2 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-64 bg-gray-200 flex items-center justify-center">
                                <img src="https://www.gramedia.com/blog/content/images/2020/08/laut-bercerita-leila-s-chudori_gramedia.jpg" alt="Laut Bercerita" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800 mb-1">Laut Bercerita</h3>
                                <p class="text-gray-600 text-sm mb-2">Lela S, chodori</p>
                                <div class="flex items-center gap-2 mb-3">
                                    <div class="flex items-center text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <span class="text-gray-700 ml-1 text-sm">4.6</span>
                                    </div>
                                    <span class="text-gray-400 text-sm">(98)</span>
                                </div>
                                <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Tersedia</span>
                            </div>
                        </div>

                        <!-- Book Card 3 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-64 bg-gray-200 flex items-center justify-center">
                                <img src="https://www.gramedia.com/blog/content/images/2024/12/Brianna-dan-Bottomwise.png" alt="Brianna" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800 mb-1">Brianna Dan Bottomwisme</h3>
                                <p class="text-gray-600 text-sm mb-2">Andrea Hirata</p>
                                <div class="flex items-center gap-2 mb-3">
                                    <div class="flex items-center text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <span class="text-gray-700 ml-1 text-sm">4.9</span>
                                    </div>
                                    <span class="text-gray-400 text-sm">(150)</span>
                                </div>
                                <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Tersedia</span>
                            </div>
                        </div>

                        <!-- Book Card 4 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-64 bg-gray-200 flex items-center justify-center">
                                <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/ccmq4kges6gstnsrrtxabw.jpg" alt="Bintang" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800 mb-1">Bintang</h3>
                                <p class="text-gray-600 text-sm mb-2">Tere Liye</p>
                                <div class="flex items-center gap-2 mb-3">
                                    <div class="flex items-center text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <span class="text-gray-700 ml-1 text-sm">4.8</span>
                                    </div>
                                    <span class="text-gray-400 text-sm">(110)</span>
                                </div>
                                <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Tersedia</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Rekomendasi Untuk Anda -->
                <section>
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Rekomendasi Untuk Anda</h2>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1">
                            Lihat Semua <i class="fas fa-chevron-right text-sm"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Book Card 1 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-64 bg-gray-200 flex items-center justify-center">
                                <img src="https://cdn.gramedia.com/uploads/items/9786020649320_the_midnight_library_cov.jpg" alt="Midnight Library" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800 mb-1">The Midnight Library</h3>
                                <p class="text-gray-600 text-sm mb-2">Matt haig</p>
                                <div class="flex items-center gap-2 mb-3">
                                    <div class="flex items-center text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <span class="text-gray-700 ml-1 text-sm">4.9</span>
                                    </div>
                                    <span class="text-gray-400 text-sm">(198)</span>
                                </div>
                                <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Tersedia</span>
                            </div>
                        </div>

                        <!-- Book Card 2 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-64 bg-gray-200 flex items-center justify-center">
                                <img src="https://cdn.gramedia.com/uploads/products/32x14965x4.jpg" alt="Etika Bisnis" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800 mb-1">Etika Bisnis</h3>
                                <p class="text-gray-600 text-sm mb-2">Budi Karyanto</p>
                                <div class="flex items-center gap-2 mb-3">
                                    <div class="flex items-center text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <span class="text-gray-700 ml-1 text-sm">4.8</span>
                                    </div>
                                    <span class="text-gray-400 text-sm">(67)</span>
                                </div>
                                <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Tersedia</span>
                            </div>
                        </div>

                        <!-- Book Card 3 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-64 bg-gray-200 flex items-center justify-center">
                                 <img src="https://cdn.gramedia.com/uploads/product-metas/ov3mxzzxrx.jpeg" alt="Muros" class="w-full h-full object-cover">
                                <div class="text-gray-400 text-6xl">
                                    <i class="fas fa-book"></i>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800 mb-1">Muros</h3>
                                <p class="text-gray-600 text-sm mb-2">Surya Putra</p>
                                <div class="flex items-center gap-2 mb-3">
                                    <div class="flex items-center text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <span class="text-gray-700 ml-1 text-sm">4.7</span>
                                    </div>
                                    <span class="text-gray-400 text-sm">(120)</span>
                                </div>
                                <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Tersedia</span>
                            </div>
                        </div>

                        <!-- Book Card 4 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-64 bg-gray-200 flex items-center justify-center">
                                <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/6/8/3qaxyret7kcgarrevayw6d.jpg" alt="Lofarsa" class="w-full h-full object-cover">
                                <div class="text-gray-400 text-6xl">
                                    <i class="fas fa-book"></i>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800 mb-1">Lofarsa</h3>
                                <p class="text-gray-600 text-sm mb-2">Rofenaa</p>
                                <div class="flex items-center gap-2 mb-3">
                                    <div class="flex items-center text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <span class="text-gray-700 ml-1 text-sm">4.9</span>
                                    </div>
                                    <span class="text-gray-400 text-sm">(140)</span>
                                </div>
                                <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Tersedia</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Buku Terbaru -->
                <section>
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Buku Terbaru</h2>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1">
                            Lihat Semua <i class="fas fa-chevron-right text-sm"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Book Item 1 -->
                        <div class="flex gap-4 bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-20 h-28 bg-gray-200 rounded flex-shrink-0">
                                <img src="https://cdn.gramedia.com/uploads/items/9786020648293_Keajaiban_Toko_Kelontong_Namiya_cov.jpg" alt="Book" class="w-full h-full object-cover rounded">
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-1">Keajaiban Toko Kelontong Namiya</h3>
                                <p class="text-gray-600 text-sm mb-1">Keigo Higashino</p>
                                <p class="text-gray-400 text-sm">2011</p>
                            </div>
                        </div>

                        <!-- Book Item 2 -->
                        <div class="flex gap-4 bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-20 h-28 bg-gray-200 rounded flex-shrink-0">
                                <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/1/5/3be5vq8uakqtjyo7mncgtd.jpg" alt="Book" class="w-full h-full object-cover rounded">
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-1">Pasta Kacang Merah</h3>
                                <p class="text-gray-600 text-sm mb-1">Tetsuya Aikawa</p>
                                <p class="text-gray-400 text-sm">2022</p>
                            </div>
                        </div>

                        <!-- Book Item 3 -->
                        <div class="flex gap-4 bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-20 h-28 bg-gray-200 rounded flex-shrink-0">
                                <img src="https://cdn.gramedia.com/uploads/items/Narnia_3_The_Horse_and_His_Boy_cov_page-0001.jpg" alt="Book" class="w-full h-full object-cover rounded">
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-1">The Horse And His Boy</h3>
                                <p class="text-gray-600 text-sm mb-1">C. S. Lewis</p>
                                <p class="text-gray-400 text-sm">1954</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>