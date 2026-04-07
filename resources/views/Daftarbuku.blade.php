<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Di Perpustakaan Digital</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white flex justify-between">
        <h1 class="text-lg font-bold">EXPLOTERECH</h1>
        <div>
            <a href="#" class="mr-4">Dashboard</a>
            <a href="#">Logout</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">Daftar Buku</h2>

        <!-- Search -->
        <input type="text" placeholder="Cari buku..."
            class="w-full p-2 mb-4 border rounded">

        <!-- Book List -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <!-- Card Buku -->
            <div class="bg-white p-4 rounded shadow">
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9786020633176_.Atomic_Habit.jpg" class="mb-3 rounded">
                <h3 class="font-bold">Atomic Habits</h3>
                <p class="text-sm text-gray-500">Penulis: James Clear</p>
                <p class="text-green-600 mt-2">Tersedia</p>

                <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded w-full hover:bg-blue-600">
                    Pinjam
                </button>
            </div>

             <!-- Card Buku -->
            <div class="bg-white p-4 rounded shadow">
                <img src="https://cdn.gramedia.com/uploads/products/95ob5m98ur.jpg" class="mb-3 rounded">
                <h3 class="font-bold">seporsi mie ayam sebelum mati</h3>
                <p class="text-sm text-gray-500">Penulis: Brian Khrisna</p>
                <p class="text-green-600 mt-2">Tersedia</p>

                <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded w-full hover:bg-blue-600">
                    Pinjam
                </button>
            </div>

            <!-- Card Buku -->
            <div class="bg-white p-4 rounded shadow">
                <img src="https://cdn.gramedia.com/uploads/items/9786020332956_Bumi-New-Cover.jpg" class="mb-3 rounded">
                <h3 class="font-bold">Bumi</h3>
                <p class="text-sm text-gray-500">Penulis: Tere Liye</p>
                <p class="text-red-600 mt-2">Dipinjam</p>

                <button disabled class="mt-3 bg-gray-400 text-white px-4 py-2 rounded w-full">
                    Tidak Tersedia
                </button>
            </div>

        </div>
    </div>

</body>
</html>