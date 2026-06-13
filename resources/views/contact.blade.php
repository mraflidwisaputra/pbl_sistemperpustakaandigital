<<<<<<< HEAD
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 overflow-x-hidden">

@include('components.sidebarAnggota')

<main class="ml-[260px] min-h-screen">

    @include('components.topbarAnggota', [
        'title' => 'Kontak',
        'subtitle' => 'Hubungi pengelola perpustakaan digital.'
    ])

    <section class="px-8 pb-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <div class="bg-white rounded-2xl shadow-md p-8">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">
                    Informasi Kontak
                </h2>

                <p class="text-gray-600 mb-6">
                    Jika mengalami kendala saat menggunakan sistem perpustakaan digital,
                    silakan hubungi admin melalui informasi berikut.
                </p>

                <div class="space-y-4">
                    <div class="p-4 bg-blue-50 rounded-xl border border-blue-100">
                        <p class="font-semibold text-blue-900">Email</p>
                        <p class="text-gray-700">admin@perpustakaandigital.com</p>
                    </div>

                    <div class="p-4 bg-blue-50 rounded-xl border border-blue-100">
                        <p class="font-semibold text-blue-900">Telepon</p>
                        <p class="text-gray-700">0812-3456-7890</p>
                    </div>

                    <div class="p-4 bg-blue-50 rounded-xl border border-blue-100">
                        <p class="font-semibold text-blue-900">Alamat</p>
                        <p class="text-gray-700">Politeknik Negeri Batam</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md p-8">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">
                    Kirim Pesan
                </h2>

                <form action="#" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900">
                            Nama
                        </label>
                        <input type="text"
                               name="nama"
                               class="w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Masukkan nama">
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900">
                            Email
                        </label>
                        <input type="email"
                               name="email"
                               class="w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Masukkan email">
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900">
                            Pesan
                        </label>
                        <textarea name="pesan"
                                  rows="5"
                                  class="w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                  placeholder="Tulis pesan kamu"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg">
                        Kirim Pesan
                    </button>
                </form>
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
    <title>ExploreTech - Kontak</title>
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
                <a href="{{ url('/about') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                    <i class="fas fa-info-circle w-5"></i>
                    <span>Tentang</span>
                </a>
                <a href="{{ url('/contact') }}" class="flex items-center gap-3 px-4 py-3 bg-blue-600 rounded-lg text-white transition-colors shadow-md">
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

            <!-- Contact Page Content with Blue Gradient Background -->
            <div class="min-h-screen bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 p-8">
                
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        
                        <!-- Left Side - Contact Information -->
                        <div class="space-y-6">
                            <h1 class="text-4xl font-bold text-white mb-4">Hubungi Kami</h1>
                            
                            <p class="text-blue-50 text-lg leading-relaxed mb-6">
                                Jika Anda memiliki pertanyaan, saran, atau ingin bekerja sama, jangan ragu untuk menghubungi kami melalui formulir di samping.
                            </p>
                            
                            <div class="space-y-4">
                                <!-- Location -->
                                <div class="flex items-center gap-3 text-white">
                                    <div class="w-10 h-10 bg-blue-700 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-map-marker-alt text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-lg">Politeknik Negeri Batam</p>
                                    </div>
                                </div>
                                
                                <!-- Email -->
                                <div class="flex items-center gap-3 text-white">
                                    <div class="w-10 h-10 bg-blue-700 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-envelope text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-lg">exploretech@email.com</p>
                                    </div>
                                </div>
                                
                                <!-- Phone -->
                                <div class="flex items-center gap-3 text-white">
                                    <div class="w-10 h-10 bg-blue-700 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-phone text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-lg">0812345678</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side - Contact Form -->
                        <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl shadow-2xl p-8 border-2 border-blue-200">
                            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Form Kontak</h2>
                            
                            <form class="space-y-5">
                                <!-- Name Field -->
                                <div>
                                    <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Nama
                                    </label>
                                    <input type="text" id="nama" name="nama" 
                                        class="bg-white border-2 border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 transition-colors" 
                                        placeholder="Masukkan nama Anda">
                                </div>
                                
                                <!-- Email Field -->
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Email
                                    </label>
                                    <input type="email" id="email" name="email" 
                                        class="bg-white border-2 border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 transition-colors" 
                                        placeholder="nama@email.com">
                                </div>
                                
                                <!-- Message Field -->
                                <div>
                                    <label for="pesan" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Pesan
                                    </label>
                                    <textarea id="pesan" name="pesan" rows="5" 
                                        class="bg-white border-2 border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 resize-none transition-colors" 
                                        placeholder="Tulis pesan Anda di sini..."></textarea>
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="pt-2">
                                    <button type="submit" 
                                        class="w-full text-white bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-base px-6 py-3 text-center shadow-lg transform transition-all hover:scale-105">
                                        <i class="fas fa-paper-plane mr-2"></i>Kirim
                                    </button>
                                </div>
                            </form>
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