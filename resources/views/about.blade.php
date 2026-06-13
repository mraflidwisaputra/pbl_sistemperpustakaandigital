<<<<<<< HEAD
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 overflow-x-hidden">

@include('components.sidebarAnggota')

<main class="ml-[260px] min-h-screen">

    @include('components.topbarAnggota', [
        'title' => 'Tentang Kami',
        'subtitle' => 'Informasi singkat tentang sistem perpustakaan digital.'
    ])

    <section class="px-8 pb-10">
        <div class="bg-white rounded-2xl shadow-md p-8">

            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">TENTANG KAMI</h2>
                <p class="text-gray-600 mt-3 max-w-4xl mx-auto">
                    Perpustakaan Digital adalah platform yang dirancang untuk mempermudah akses informasi
                    dan literasi bagi seluruh pengguna. Sistem ini membantu proses pencarian, peminjaman,
                    dan pengelolaan buku secara lebih modern, praktis, dan efisien.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6">
                    <h3 class="text-2xl font-bold text-blue-900 mb-3">Visi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Menjadi platform perpustakaan digital yang inovatif, mudah diakses,
                        dan mampu mendukung peningkatan minat baca serta kualitas pembelajaran di era digital.
                    </p>
                </div>

                <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6">
                    <h3 class="text-2xl font-bold text-blue-900 mb-3">Misi</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Menyediakan akses buku secara online dengan mudah dan cepat.</li>
                        <li>• Meningkatkan efisiensi proses peminjaman dan pengembalian buku.</li>
                        <li>• Mendukung kegiatan belajar dengan koleksi buku yang beragam.</li>
                        <li>• Mengurangi keterlambatan melalui sistem yang terintegrasi.</li>
                    </ul>
                </div>
            </div>

            <div class="pt-10">
                <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">
                    Tim Pengembang
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/rafli.jpg') }}"
                             onerror="this.src='https://via.placeholder.com/120?text=User'"
                             class="w-32 h-32 rounded-full object-cover border-4 border-blue-300 shadow-lg mb-4"
                             alt="Rafli">

                        <div class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center shadow">
                            <p class="font-semibold text-sm">M. Rafli Dwi Saputra</p>
                            <p class="text-xs">(3312501106)</p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/ebet.jpg') }}"
                             onerror="this.src='https://via.placeholder.com/120?text=User'"
                             class="w-32 h-32 rounded-full object-cover border-4 border-blue-300 shadow-lg mb-4"
                             alt="Albertzon">

                        <div class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center shadow">
                            <p class="font-semibold text-sm">Albertzon Ayomi</p>
                            <p class="text-xs">(3312501119)</p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/moti.jpg') }}"
                             onerror="this.src='https://via.placeholder.com/120?text=User'"
                             class="w-32 h-32 rounded-full object-cover border-4 border-blue-300 shadow-lg mb-4"
                             alt="Timothy">

                        <div class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center shadow">
                            <p class="font-semibold text-sm">Timothy Pryan</p>
                            <p class="text-xs">(3312501098)</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

</body>
=======
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExploreTech - Tentang Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-800 text-white flex flex-col fixed h-full z-20">
            
            <!-- Logo -->
            <div class="p-6 flex items-center justify-center border-b border-slate-700">
                <div class="bg-white rounded-full p-3 w-16 h-16 flex items-center justify-center shadow-lg">
                    <img src="/images/exploretech.jpg" alt="Logo ExploreTech" class="w-12 h-12 object-contain">
                </div>
            </div>
            
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="{{ url('/home') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                    <i class="fas fa-home w-5"></i>
                    <span>Beranda</span>
                </a>
                <a href="{{ url('/daftarbuku') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                    <i class="fas fa-list w-5"></i>
                    <span>Daftar buku</span>
                </a>
                <a href="{{ url('/riwayat-peminjaman') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                    <i class="fas fa-clock-rotate-left w-5"></i>
                    <span>Riwayat Peminjaman</span>
                </a>
                <a href="{{ url('/about') }}" class="flex items-center gap-3 px-4 py-3 bg-blue-600 rounded-lg text-white transition-colors shadow-md">
                    <i class="fas fa-info-circle w-5"></i>
                    <span>Tentang</span>
                </a>
                <a href="{{ url('/contact') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                    <i class="fas fa-envelope w-5"></i>
                    <span>Kontak</span>
                </a>
            </nav>

            <div class="p-4 border-t border-slate-700">
                <button class="flex items-center gap-3 px-4 py-3 w-full bg-blue-600 hover:bg-blue-700 rounded-lg transition-colors text-white">
                    <i class="fas fa-right-from-bracket w-5"></i>
                    <span>Logout</span>
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-64 overflow-y-auto">
            
            <!-- Top Header Bar -->
            <header class="bg-slate-800 text-white p-4 flex justify-between items-center sticky top-0 z-10 shadow-md">
                <div class="flex items-center gap-4"></div>
                <div class="flex items-center gap-4">
                    <div class="w-11 h-11 rounded-full overflow-hidden border-2 border-blue-400">
                        <img src="https://cdn.pixabay.com/photo/2023/02/18/11/00/icon-7797704_1280.png" alt="User" class="w-full h-full object-cover">
                    </div>
                </div>
            </header>

            <div class="p-8 space-y-8">
                
                <!-- Title -->
                <div class="text-center">
                    <h1 class="text-3xl font-bold text-gray-900">TENTANG KAMI</h1>
                </div>

                <!-- Description -->
                <div class="text-center max-w-4xl mx-auto">
                    <p class="text-lg text-gray-800 leading-relaxed">
                        Perpustakaan Digital adalah platform yang dirancang untuk mempermudah akses informasi dan literasi bagi seluruh pengguna. Dengan memanfaatkan teknologi, kami menghadirkan sistem perpustakaan yang modern, praktis, dan efisien tanpa harus datang langsung ke lokasi.
                    </p>
                </div>

                <!-- Visi Section -->
                <div class="bg-blue-500 border-2 border-blue-600 rounded-lg p-6 max-w-4xl mx-auto">
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Visi</h2>
                    <p class="text-gray-900 leading-relaxed">
                        Menjadi platform perpustakaan digital yang inovatif, mudah diakses, dan mampu mendukung peningkatan minat baca serta kualitas pembelajaran di era digital.
                    </p>
                </div>

                <!-- Misi Section -->
                <div class="bg-blue-500 border-2 border-blue-600 rounded-lg p-6 max-w-4xl mx-auto">
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Misi</h2>
                    <ul class="space-y-2 text-gray-900">
                        <li class="flex items-start gap-2">
                            <span class="text-xl mt-1">•</span>
                            <span>Menyediakan akses buku secara online dengan mudah dan cepat</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-xl mt-1">•</span>
                            <span>Meningkatkan efisiensi proses peminjaman dan pengembalian buku</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-xl mt-1">•</span>
                            <span>Mengurangi keterlambatan dan kehilangan buku melalui sistem terintegrasi</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-xl mt-1">•</span>
                            <span>Mendukung kegiatan belajar dengan koleksi buku yang beragam dan up-to-date</span>
                        </li>
                    </ul>
                </div>

                <!-- Development Team Section -->
                <div class="pt-8 pb-4">
                    <h2 class="text-2xl font-bold text-gray-900 text-center mb-8">Tim Pengembang</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                        <!-- Team Member 1 -->
                        <div class="flex flex-col items-center">
                            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-blue-300 shadow-lg mb-4">
                                <img src="/images/rafli.jpg"
                                     alt="M.Rafli Dwi Saputra" 
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="bg-blue-600 text-white px-4 py-2 rounded text-center shadow-md">
                                <p class="font-semibold text-sm">M.Rafli Dwi Saputra</p>
                                <p class="text-xs">(3312501106)</p>
                            </div>
                        </div>

                        <!-- Team Member 2 -->
                        <div class="flex flex-col items-center">
                            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-blue-300 shadow-lg mb-4">
                                <img src="/images/ebet.jpg"
                                     alt="Albertzon Ayomi" 
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="bg-blue-600 text-white px-4 py-2 rounded text-center shadow-md">
                                <p class="font-semibold text-sm">Albertzon Ayomi</p>
                                <p class="text-xs">(3312501119)</p>
                            </div>
                        </div>

                        <!-- Team Member 3 -->
                        <div class="flex flex-col items-center">
                            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-blue-300 shadow-lg mb-4">
                                <img src="/images/moti.jpg" 
                                     alt="Timothy Pryan" 
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="bg-blue-600 text-white px-4 py-2 rounded text-center shadow-md">
                                <p class="font-semibold text-sm">Timothy Pryan</p>
                                <p class="text-xs">(3312501098)</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
>>>>>>> 72c0d82dde3cf4663099b55714e16b86ec4f72be
</html>