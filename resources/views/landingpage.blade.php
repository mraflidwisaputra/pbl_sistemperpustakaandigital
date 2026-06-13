<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExploreTech - Sistem Perpustakaan Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-b from-blue-50 to-white">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center shadow-md">
                        <img src="/images/exploretech.jpg" alt="Logo" class="w-7 h-7 object-contain">
                    </div>
                    <span class="text-xl font-bold text-gray-800">EXPLORETECH</span>
                </div>

                <!-- Menu Desktop -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#beranda" class="text-gray-600 hover:text-blue-500 font-medium transition">Beranda</a>
                    <a href="#fitur" class="text-gray-600 hover:text-blue-500 font-medium transition">Fitur</a>
                    <a href="#tentang" class="text-gray-600 hover:text-blue-500 font-medium transition">Tentang</a>
                    <a href="login.html" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg font-medium transition">Login</a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-gray-600" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-2 space-y-2">
                <a href="#beranda" class="block py-2 text-gray-600 hover:text-blue-500">Beranda</a>
                <a href="#fitur" class="block py-2 text-gray-600 hover:text-blue-500">Fitur</a>
                <a href="#tentang" class="block py-2 text-gray-600 hover:text-blue-500">Tentang</a>
                <a href="login.html" class="block py-2 text-blue-500 font-semibold">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                        SISTEM PERPUSTAKAAN DIGITAL
                    </h1>
                    <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                        Perpustakaan digital ini menyediakan akses terintegrasi ke berbagai sumber informasi akademik guna mendukung kegiatan pembelajaran dan penelitian secara efektif, efisien, dan berkelanjutan.
                    </p>
                    <a href="#fitur" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold text-lg transition shadow-lg hover:shadow-xl">
                        Mulai Sekarang
                    </a>
                </div>
                <div class="flex justify-center">
                    <img src="/images/gambarlandingpage.png" alt="Digital Library" class="w-full max-w-md">
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur Unggulan -->
    <section id="fitur" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Fitur Unggulan</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white border border-blue-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-search text-blue-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pencarian Buku Cepat</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Membantu pengguna menemukan buku berdasarkan judul, penulis, kategori, atau kata kunci dengan cepat.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white border border-blue-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-book-reader text-blue-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Peminjaman dan Pengembalian</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Mencatat proses peminjaman buku oleh anggota serta mengatur tanggal pinjam dan batas pengembalian.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white border border-blue-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-history text-blue-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Riwayat Lengkap</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Menampilkan seluruh riwayat peminjaman dan pengembalian buku sebagai data monitoring dan laporan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tim Pengembang -->
    <section class="py-16 bg-gradient-to-b from-white to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Tim Pengembang</h2>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <!-- Member 1 -->
                <div class="text-center">
                    <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-blue-500 shadow-lg">
                        <img src="/images/rafli.jpg" alt="M.Rafli" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-blue-500 text-white px-4 py-2 rounded-lg inline-block">
                        <p class="font-semibold text-sm">M.Rafli Dwi Saputra</p>
                        <p class="text-xs">(3312501106)</p>
                    </div>
                </div>

                <!-- Member 2 -->
                <div class="text-center">
                    <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-blue-500 shadow-lg">
                         <img src="/images/ebet.jpg" alt="Albertzon" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-blue-500 text-white px-4 py-2 rounded-lg inline-block">
                        <p class="font-semibold text-sm">Albertzon Ayomi</p>
                        <p class="text-xs">(3312501119)</p>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="text-center">
                    <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-blue-500 shadow-lg">
                         <img src="/images/moti.jpg" alt="Timothy" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-blue-500 text-white px-4 py-2 rounded-lg inline-block">
                        <p class="font-semibold text-sm">Timothy Pryan</p>
                        <p class="text-xs">(3312501098)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Tentang Kami</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Perpustakaan Digital adalah platform yang dirancang untuk mempermudah akses informasi dan literasi bagi seluruh pengguna. Dengan memanfaatkan teknologi, kami menghadirkan sistem perpustakaan yang modern, praktis, dan efisien tanpa harus datang langsung ke lokasi.
            </p>
        </div>
    </section>

    <!-- Hubungi Kami -->
    <section class="py-16 bg-gradient-to-b from-blue-50 to-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Hubungi Kami</h2>
            <div class="space-y-3 text-gray-700">
                <p class="text-lg">
                    <i class="fas fa-envelope text-blue-500 mr-2"></i>
                    Email: exploretech@gmail.com
                </p>
                <p class="text-lg">
                    <i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>
                    Alamat: Politeknik Negeri Batam
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm">
                © 2026 PerpustakaanDigital PBL | Polibatam | All Rights Reserved
            </p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    document.getElementById('mobileMenu').classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>