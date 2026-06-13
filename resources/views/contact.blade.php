<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blue-700 min-h-screen overflow-x-hidden">

@include('components.sidebar')

<!-- MAIN -->
<main class="ml-[210px] min-h-screen flex flex-col bg-gradient-to-br from-blue-400 to-blue-600">

    <!-- CONTENT -->
    <section class="flex-1 flex items-center justify-center px-10 py-10">

        <div class="max-w-5xl w-full grid lg:grid-cols-2 gap-20 items-center">

            <!-- INFORMASI KONTAK -->
            <div>

                <h1 class="text-5xl font-bold text-white mb-6">
                    Hubungi Kami
                </h1>

                <p class="text-xl text-white/90 leading-relaxed mb-10">
                    Jika Anda memiliki pertanyaan, saran, atau ingin bekerja sama,
                    jangan ragu untuk menghubungi kami melalui formulir kontak.
                </p>

                <div class="space-y-6">

                    <!-- Lokasi -->
                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 bg-white rounded-full shadow-lg flex items-center justify-center">
                            <svg class="w-7 h-7 text-blue-600"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 16 20">
                                <path d="M8 0a8 8 0 0 0-8 8c0 5.25 7.14 11.53 7.45 11.8a.85.85 0 0 0 1.1 0C8.86 19.53 16 13.25 16 8a8 8 0 0 0-8-8Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-bold text-white text-xl">
                                Lokasi
                            </h3>
                            <p class="text-white/90">
                                Politeknik Negeri Batam
                            </p>
                        </div>

                    </div>

                    <!-- Email -->
                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 bg-white rounded-full shadow-lg flex items-center justify-center">
                            <svg class="w-7 h-7 text-blue-600"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 16">
                                <path d="m10.036 8.278 9.258-7.79A1.98 1.98 0 0 0 18 0H2A1.98 1.98 0 0 0 .706.488l9.33 7.79Z"/>
                                <path d="M11.241 9.817a2 2 0 0 1-2.482 0L0 2.5V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-bold text-white text-xl">
                                Email
                            </h3>
                            <p class="text-white/90">
                                exploretech@email.com
                            </p>
                        </div>

                    </div>

                    <!-- Telepon -->
                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 bg-white rounded-full shadow-lg flex items-center justify-center">
                            <svg class="w-7 h-7 text-blue-600"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 19 18">
                                <path d="M18 13.446v3.24a1.313 1.313 0 0 1-1.43 1.31A16.81 16.81 0 0 1 9.2 15.364a16.566 16.566 0 0 1-5.1-5.1A16.81 16.81 0 0 1 1.468 2.9A1.313 1.313 0 0 1 2.778 1.47h3.24a1.313 1.313 0 0 1 1.31 1.13c.083.63.237 1.248.46 1.843a1.313 1.313 0 0 1-.295 1.385L6.122 7.2a13.125 13.125 0 0 0 5.1 5.1l1.372-1.372a1.313 1.313 0 0 1 1.385-.295c.595.223 1.213.377 1.843.46A1.313 1.313 0 0 1 18 13.446Z"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-bold text-white text-xl">
                                Telepon
                            </h3>
                            <p class="text-white/90">
                                0812-xxxx-xxxx
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- FORM KONTAK -->
            <div>

                <div class="max-w-md mx-auto bg-white/20 backdrop-blur-lg border border-white/30 rounded-3xl shadow-2xl p-6">

                    <h2 class="text-2xl font-bold text-center text-white mb-5">
                        Form Kontak
                    </h2>

                    @if(session('success'))
                        <div class="mb-4 p-4 text-green-800 bg-green-100 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-white font-medium mb-2">
                                Nama
                            </label>

                            <input type="text"
                                   name="nama"
                                   value="{{ old('nama') }}"
                                   class="w-full rounded-xl bg-white/70 border border-white/50 px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-white">
                        </div>

                        <div class="mb-4">
                            <label class="block text-white font-medium mb-2">
                                Email
                            </label>

                            <input type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   class="w-full rounded-xl bg-white/70 border border-white/50 px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-white">
                        </div>

                        <div class="mb-5">
                            <label class="block text-white font-medium mb-2">
                                Pesan
                            </label>

                            <textarea
                                name="pesan"
                                rows="4"
                                class="w-full rounded-xl bg-white/70 border border-white/50 px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-white">{{ old('pesan') }}</textarea>
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-white text-blue-700 hover:bg-blue-100 font-semibold py-2.5 rounded-xl transition text-sm">
                            Kirim Pesan
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

    <!-- FOOTER -->
    @include('components.footer')

    </main>

</body>
>>>>>>> 149f664 (update kode)
</html>