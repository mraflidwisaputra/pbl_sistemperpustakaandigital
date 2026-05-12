<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExploreTech - Daftar Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date();
            const returnDate = new Date();
            returnDate.setDate(today.getDate() + 7);

            const formatDate = (date) => {
                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, '0');
                const day = String(date.getDate()).padStart(2, '0');
                return `${year}-${month}-${day}`;
            };

            const borrowDateInput = document.getElementById('borrowDate');
            const returnDateInput = document.getElementById('returnDate');
            if (borrowDateInput) borrowDateInput.value = formatDate(today);
            if (returnDateInput) returnDateInput.value = formatDate(returnDate);
        });

        function openModal(bookTitle, bookAuthor, bookCover) {
            document.getElementById('borrowModal').classList.remove('hidden');
            document.getElementById('modalBookTitle').textContent = bookTitle;
            document.getElementById('modalBookAuthor').textContent = bookAuthor.toUpperCase();
            document.getElementById('modalBookCover').src = bookCover;
        }

        function closeModal() {
            document.getElementById('borrowModal').classList.add('hidden');
        }

        function filterBooks(category) {
            const buttons = document.querySelectorAll('.category-btn');
            const books = document.querySelectorAll('.book-card');

            buttons.forEach(btn => {
                const btnCategory = btn.getAttribute('data-filter');
                if (btnCategory === category) {
                    btn.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-300');
                    btn.classList.add('bg-sky-500', 'text-white');
                } else {
                    btn.classList.remove('bg-sky-500', 'text-white');
                    btn.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-300');
                }
            });

            books.forEach(book => {
                if (category === 'Semua') {
                    book.style.display = 'block';
                } else {
                    const bookCategory = book.getAttribute('data-category');
                    book.style.display = (bookCategory === category) ? 'block' : 'none';
                }
            });
        }

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }

        // Scroll kategori
        function scrollCategories(direction) {
            const container = document.getElementById('categoryScroll');
            const scrollAmount = 200;
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }
    </script>
</head>
<body class="bg-gray-100">

    <!-- Header / Navbar -->
    <nav class="bg-slate-800 text-white p-4 flex justify-between items-center fixed top-0 left-0 right-0 z-30 shadow-lg">
        <button class="md:hidden flex flex-col gap-1.5 p-2" onclick="toggleSidebar()">
            <span class="block w-6 h-0.5 bg-white"></span>
            <span class="block w-6 h-0.5 bg-white"></span>
            <span class="block w-6 h-0.5 bg-white"></span>
        </button>
        <div class="flex items-center gap-3">
            <div class="bg-white rounded-full p-2 w-14 h-14 flex items-center justify-center shadow-md">
                <img src="/images/logo.png" alt="Logo ExploreTech" class="w-10 h-10 object-contain">
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                <i class="fas fa-user text-white text-sm"></i>
            </div>
        </div>
    </nav>

    <!-- Sidebar Overlay (Mobile) -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden" onclick="toggleSidebar()"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-slate-800 text-white flex flex-col fixed h-full z-40 top-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-300">
        <div class="p-6 flex items-center justify-center border-b border-slate-700 pt-24 md:pt-6">
            <div class="bg-white rounded-full p-3 w-16 h-16 flex items-center justify-center shadow-lg">
                <img src="/images/exploretech.jpg" alt="Logo ExploreTech" class="w-12 h-12 object-contain">
            </div>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="/home" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                <i class="fas fa-home"></i><span>Beranda</span>
            </a>
            <a href="/daftarbuku" class="flex items-center gap-3 px-4 py-3 bg-blue-600 rounded-lg text-white transition-colors">
                <i class="fas fa-list"></i><span>Daftar buku</span>
            </a>
            <a href="/riwayat-peminjaman" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                <i class="fas fa-history"></i><span>Riwayat Peminjaman</span>
            </a>
            <a href="/about" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                <i class="fas fa-info-circle"></i><span>Tentang</span>
            </a>
            <a href="/contact" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors">
                <i class="fas fa-envelope"></i><span>Kontak</span>
            </a>
        </nav>
        <div class="p-4 border-t border-slate-700">
            <button class="flex items-center gap-3 px-4 py-3 w-full bg-blue-600 hover:bg-blue-700 rounded-lg transition-colors text-white">
                <i class="fas fa-sign-out-alt"></i><span>Logout</span>
            </button>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 md:ml-64 pt-20 min-h-screen">

        <!-- Page Title -->
        <div class="px-6 pt-6 pb-4">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Buku</h1>
        </div>

        <!-- Search Bar -->
        <div class="px-6 pb-6">
            <div class="relative">
                <input type="text" placeholder="Cari Buku....." class="w-full px-5 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors text-gray-700 text-lg">
                <button class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <!-- ========== KATEGORI DENGAN TOMBOL SCROLL ========== -->
        <div class="px-6 pb-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Kategori</h2>
            <div class="relative">
                <!-- Tombol Scroll Kiri -->
                <button onclick="scrollCategories('left')" 
                        class="absolute left-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 bg-white border-2 border-gray-300 rounded-full flex items-center justify-center shadow-md hover:bg-gray-50 hover:border-sky-500 transition-all">
                    <i class="fas fa-chevron-left text-gray-700 text-lg"></i>
                </button>

                <!-- Kategori Scrollable Container -->
                <div id="categoryScroll" class="flex gap-3 overflow-x-auto pb-3 pl-12 pr-12" style="scrollbar-width: none; -ms-overflow-style: none;">
                    <button onclick="filterBooks('Semua')" data-filter="Semua"
                            class="category-btn bg-sky-500 text-white px-6 py-2.5 rounded-lg hover:bg-sky-600 transition-colors font-medium whitespace-nowrap flex-shrink-0">
                        Semua
                    </button>
                    <button onclick="filterBooks('Fiksi')" data-filter="Fiksi"
                            class="category-btn bg-white text-gray-700 px-6 py-2.5 rounded-lg hover:bg-sky-500 hover:text-white transition-colors font-medium border border-gray-300 whitespace-nowrap flex-shrink-0">
                        Fiksi
                    </button>
                    <button onclick="filterBooks('Non-Fiksi')" data-filter="Non-Fiksi"
                            class="category-btn bg-white text-gray-700 px-6 py-2.5 rounded-lg hover:bg-sky-500 hover:text-white transition-colors font-medium border border-gray-300 whitespace-nowrap flex-shrink-0">
                        Non-Fiksi
                    </button>
                    <button onclick="filterBooks('Teknologi')" data-filter="Teknologi"
                            class="category-btn bg-white text-gray-700 px-6 py-2.5 rounded-lg hover:bg-sky-500 hover:text-white transition-colors font-medium border border-gray-300 whitespace-nowrap flex-shrink-0">
                        Teknologi
                    </button>
                    <button onclick="filterBooks('Sejarah')" data-filter="Sejarah"
                            class="category-btn bg-white text-gray-700 px-6 py-2.5 rounded-lg hover:bg-sky-500 hover:text-white transition-colors font-medium border border-gray-300 whitespace-nowrap flex-shrink-0">
                        Sejarah
                    </button>
                    <button onclick="filterBooks('Sains')" data-filter="Sains"
                            class="category-btn bg-white text-gray-700 px-6 py-2.5 rounded-lg hover:bg-sky-500 hover:text-white transition-colors font-medium border border-gray-300 whitespace-nowrap flex-shrink-0">
                        Sains
                    </button>
                    <button onclick="filterBooks('Pengembangan Diri')" data-filter="Pengembangan Diri"
                            class="category-btn bg-white text-gray-700 px-6 py-2.5 rounded-lg hover:bg-sky-500 hover:text-white transition-colors font-medium border border-gray-300 whitespace-nowrap flex-shrink-0">
                        Pengembangan Diri
                    </button>
                    <button onclick="filterBooks('Pendidikan')" data-filter="Pendidikan"
                            class="category-btn bg-white text-gray-700 px-6 py-2.5 rounded-lg hover:bg-sky-500 hover:text-white transition-colors font-medium border border-gray-300 whitespace-nowrap flex-shrink-0">
                        Pendidikan
                    </button>
                    <button onclick="filterBooks('Romansa')" data-filter="Romansa"
                            class="category-btn bg-white text-gray-700 px-6 py-2.5 rounded-lg hover:bg-sky-500 hover:text-white transition-colors font-medium border border-gray-300 whitespace-nowrap flex-shrink-0">
                        Romansa
                    </button>
                    <button onclick="filterBooks('Horor')" data-filter="Horor"
                            class="category-btn bg-white text-gray-700 px-6 py-2.5 rounded-lg hover:bg-sky-500 hover:text-white transition-colors font-medium border border-gray-300 whitespace-nowrap flex-shrink-0">
                        Horor
                    </button>
                    <button onclick="filterBooks('Misteri')" data-filter="Misteri"
                            class="category-btn bg-white text-gray-700 px-6 py-2.5 rounded-lg hover:bg-sky-500 hover:text-white transition-colors font-medium border border-gray-300 whitespace-nowrap flex-shrink-0">
                        Misteri
                    </button>
                    <button onclick="filterBooks('Komedi')" data-filter="Komedi"
                            class="category-btn bg-white text-gray-700 px-6 py-2.5 rounded-lg hover:bg-sky-500 hover:text-white transition-colors font-medium border border-gray-300 whitespace-nowrap flex-shrink-0">
                        Komedi
                    </button>
                </div>

                <!-- Tombol Scroll Kanan -->
                <button onclick="scrollCategories('right')" 
                        class="absolute right-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 bg-white border-2 border-gray-300 rounded-full flex items-center justify-center shadow-md hover:bg-gray-50 hover:border-sky-500 transition-all">
                    <i class="fas fa-chevron-right text-gray-700 text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Books Grid -->
        <div class="px-6 pb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                <!-- Book 1 - Atomic Habits -->
                <div class="book-card bg-white border border-gray-400 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow" data-category="Pengembangan Diri">
                    <div class="flex justify-center p-6 bg-white">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaRhR2m_CCHCRf-Bpsnuy6-Sq3NeIQV9MezA&s"
                             alt="Atomic Habits" class="w-40 h-56 object-cover rounded shadow-md">
                    </div>
                    <div class="px-5 pb-5 pt-2">
                        <h3 class="font-bold text-xl text-gray-900 mb-1">Atomic Habits</h3>
                        <p class="text-gray-600 text-sm mb-3">Penulis : James Clear</p>
                        <p class="text-green-500 font-semibold text-lg mb-4">Tersedia</p>
                        <button onclick="openModal('Atomic Habits', 'James Clear', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaRhR2m_CCHCRf-Bpsnuy6-Sq3NeIQV9MezA&s')"
                                class="w-full bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2.5 rounded-lg transition-colors text-lg">
                            Pinjam
                        </button>
                    </div>
                </div>

                <!-- Book 2 - MADILOG -->
                <div class="book-card bg-white border border-gray-400 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow" data-category="Non-Fiksi">
                    <div class="flex justify-center p-6 bg-white">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiiUh96SM_5hjmMD4ipAQiKZDoyXDRa8AuoQ&s"
                             alt="MADILOG" class="w-40 h-56 object-cover rounded shadow-md">
                    </div>
                    <div class="px-5 pb-5 pt-2">
                        <h3 class="font-bold text-xl text-gray-900 mb-1">MADILOG</h3>
                        <p class="text-gray-600 text-sm mb-3">Penulis : Tan Malaka</p>
                        <p class="text-green-500 font-semibold text-lg mb-4">Tersedia</p>
                        <button onclick="openModal('MADILOG', 'Tan Malaka', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiiUh96SM_5hjmMD4ipAQiKZDoyXDRa8AuoQ&s')"
                                class="w-full bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2.5 rounded-lg transition-colors text-lg">
                            Pinjam
                        </button>
                    </div>
                </div>

                <!-- Book 3 - Laskar Pelangi -->
                <div class="book-card bg-white border border-gray-400 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow" data-category="Fiksi">
                    <div class="flex justify-center p-6 bg-white">
                        <img src="https://upload.wikimedia.org/wikipedia/id/8/8e/Laskar_pelangi_sampul.jpg"
                             alt="Laskar Pelangi" class="w-40 h-56 object-cover rounded shadow-md">
                    </div>
                    <div class="px-5 pb-5 pt-2">
                        <h3 class="font-bold text-xl text-gray-900 mb-1">Laskar Pelangi</h3>
                        <p class="text-gray-600 text-sm mb-3">Penulis : Andrea Hirata</p>
                        <p class="text-red-500 font-semibold text-lg mb-4">Dipinjam</p>
                        <button disabled class="w-full bg-gray-400 text-white font-semibold py-2.5 rounded-lg cursor-not-allowed text-lg">
                            Tidak Tersedia
                        </button>
                    </div>
                </div>

                <!-- Book 4 - Bumi Manusia -->
                <div class="book-card bg-white border border-gray-400 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow" data-category="Fiksi">
                    <div class="flex justify-center p-6 bg-white">
                        <img src="https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1565658920i/1398034.jpg"
                             alt="Bumi Manusia" class="w-40 h-56 object-cover rounded shadow-md">
                    </div>
                    <div class="px-5 pb-5 pt-2">
                        <h3 class="font-bold text-xl text-gray-900 mb-1">Bumi Manusia</h3>
                        <p class="text-gray-600 text-sm mb-3">Penulis : Pramoedya Ananta Toer</p>
                        <p class="text-green-500 font-semibold text-lg mb-4">Tersedia</p>
                        <button onclick="openModal('Bumi Manusia', 'Pramoedya Ananta Toer', 'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1565658920i/1398034.jpg')"
                                class="w-full bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2.5 rounded-lg transition-colors text-lg">
                            Pinjam
                        </button>
                    </div>
                </div>

                <!-- Book 5 - Laut Bercerita -->
                <div class="book-card bg-white border border-gray-400 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow" data-category="Fiksi">
                    <div class="flex justify-center p-6 bg-white">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/40678/143505/1.jpg"
                             alt="Laut Bercerita" class="w-40 h-56 object-cover rounded shadow-md">
                    </div>
                    <div class="px-5 pb-5 pt-2">
                        <h3 class="font-bold text-xl text-gray-900 mb-1">Laut Bercerita</h3>
                        <p class="text-gray-600 text-sm mb-3">Penulis : Leila S. Chudori</p>
                        <p class="text-green-500 font-semibold text-lg mb-4">Tersedia</p>
                        <button onclick="openModal('Laut Bercerita', 'Leila S. Chudori', 'https://s3-ap-southeast-1.amazonaws.com/ebook-previews/40678/143505/1.jpg')"
                                class="w-full bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2.5 rounded-lg transition-colors text-lg">
                            Pinjam
                        </button>
                    </div>
                </div>

                <!-- Book 6 - Sapiens -->
                <div class="book-card bg-white border border-gray-400 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow" data-category="Sejarah">
                    <div class="flex justify-center p-6 bg-white">
                        <img src="https://cdn.gramedia.com/uploads/items/591701404_sapiens.jpg"
                             alt="Sapiens" class="w-40 h-56 object-cover rounded shadow-md">
                    </div>
                    <div class="px-5 pb-5 pt-2">
                        <h3 class="font-bold text-xl text-gray-900 mb-1">Sapiens</h3>
                        <p class="text-gray-600 text-sm mb-3">Penulis : Yuval Noah Harari</p>
                        <p class="text-green-500 font-semibold text-lg mb-4">Tersedia</p>
                        <button onclick="openModal('Sapiens', 'Yuval Noah Harari', 'https://cdn.gramedia.com/uploads/items/591701404_sapiens.jpg')"
                                class="w-full bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2.5 rounded-lg transition-colors text-lg">
                            Pinjam
                        </button>
                    </div>
                </div>

                <!-- Book 7 - Harry Potter -->
                <div class="book-card bg-white border border-gray-400 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow" data-category="Fiksi">
                    <div class="flex justify-center p-6 bg-white">
                        <img src="https://upload.wikimedia.org/wikipedia/id/5/56/Harry_potter_deathly_hallows_US.jpg"
                             alt="Harry Potter" class="w-40 h-56 object-cover rounded shadow-md">
                    </div>
                    <div class="px-5 pb-5 pt-2">
                        <h3 class="font-bold text-xl text-gray-900 mb-1">Harry Potter</h3>
                        <p class="text-gray-600 text-sm mb-3">Penulis : J.K. Rowling</p>
                        <p class="text-red-500 font-semibold text-lg mb-4">Dipinjam</p>
                        <button disabled class="w-full bg-gray-400 text-white font-semibold py-2.5 rounded-lg cursor-not-allowed text-lg">
                            Tidak Tersedia
                        </button>
                    </div>
                </div>

                <!-- Book 8 - Sang Pemimpi -->
                <div class="book-card bg-white border border-gray-400 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow" data-category="Fiksi">
                    <div class="flex justify-center p-6 bg-white">
                        <img src="https://upload.wikimedia.org/wikipedia/id/8/89/Sang_Pemimpi_sampul.jpg"
                             alt="Sang Pemimpi" class="w-40 h-56 object-cover rounded shadow-md">
                    </div>
                    <div class="px-5 pb-5 pt-2">
                        <h3 class="font-bold text-xl text-gray-900 mb-1">Sang Pemimpi</h3>
                        <p class="text-gray-600 text-sm mb-3">Penulis : Andrea Hirata</p>
                        <p class="text-green-500 font-semibold text-lg mb-4">Tersedia</p>
                        <button onclick="openModal('Sang Pemimpi', 'Andrea Hirata', 'https://upload.wikimedia.org/wikipedia/id/8/89/Sang_Pemimpi_sampul.jpg"
                                class="w-full bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2.5 rounded-lg transition-colors text-lg">
                            Pinjam
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <!-- Modal Detail Buku -->
    <div id="borrowModal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black bg-opacity-40 backdrop-blur-sm" onclick="closeModal()"></div>
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <div class="relative bg-gradient-to-br from-sky-50 to-white border-2 border-sky-400 rounded-2xl shadow-2xl max-w-2xl w-full p-8">
                <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors">
                    <i class="fas fa-times text-2xl"></i>
                </button>
                <h2 class="text-2xl font-bold text-gray-800 text-center mb-6 tracking-wide">DETAIL BUKU</h2>
                <div class="flex justify-center mb-8">
                    <div class="flex items-center gap-6">
                        <img id="modalBookCover" src="" alt="Book Cover" class="w-32 h-44 object-cover rounded-lg shadow-md border border-gray-200">
                        <div>
                            <h3 id="modalBookTitle" class="text-2xl font-bold text-gray-900 mb-1">Judul Buku</h3>
                            <p id="modalBookAuthor" class="text-xl font-semibold text-gray-800 mb-2">PENULIS</p>
                            <p class="text-lg text-gray-700 font-medium">Stok : <span class="font-bold text-sky-600">5</span></p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div class="bg-white border border-sky-500 rounded-lg p-4">
                        <label class="block text-gray-800 font-semibold mb-2 text-sm">Tanggal Peminjaman</label>
                        <input type="date" id="borrowDate" readonly class="w-full border border-sky-500 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-300 text-gray-700 bg-gray-50">
                    </div>
                    <div class="bg-white border border-sky-500 rounded-lg p-4">
                        <label class="block text-gray-800 font-semibold mb-2 text-sm">Tanggal Pengembalian</label>
                        <input type="date" id="returnDate" readonly class="w-full border border-sky-500 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-sky-300 text-gray-700 bg-gray-50">
                    </div>
                </div>
                <p class="text-red-500 text-sm italic mb-6 text-center">*Keterlambatan dihitung sebagai denda</p>
                <div class="flex justify-center">
                    <button onclick="closeModal()" class="bg-sky-500 hover:bg-sky-600 text-white font-bold py-3 px-8 rounded-lg text-lg transition-colors shadow-md">
                        Konfirmasi Peminjaman
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>