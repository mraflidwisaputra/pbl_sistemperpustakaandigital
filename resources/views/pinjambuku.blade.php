<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Form Peminjaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-cover bg-center flex items-center justify-center"
    style="background-image: url('https://www.polibatam.ac.id/wp-content/uploads/2023/05/Gedung.jpg');">

    <!-- Overlay biar teks tetap jelas -->
    <div class="absolute inset-0 bg-blue-900/40"></div>

    <!-- Card -->
    <div class="relative backdrop-blur-lg bg-white/70 border border-blue-300 
        p-8 rounded-2xl shadow-xl w-[800px]">

        <h2 class="text-2xl font-bold text-center text-blue-700 mb-6">
            Form Peminjaman
        </h2>

        <div class="grid grid-cols-2 gap-6">

            <!-- KIRI -->
            <div>
                <label class="block mb-1 font-medium">Nama</label>
                <input type="text" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">

                <label class="block mt-4 mb-1 font-medium">NIM</label>
                <input type="text" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">

                <label class="block mt-4 mb-1 font-medium">Pilih Kategori</label>
                <select class="w-full p-2 border rounded-lg">
                    <option>Pilih kategori</option>
                </select>

                <label class="block mt-4 mb-1 font-medium">Pilih Buku</label>
                <select class="w-full p-2 border rounded-lg">
                    <option>Pilih buku</option>
                </select>
            </div>

            <!-- KANAN -->
            <div>
                <label class="block mb-1 font-medium">Tanggal Peminjaman</label>
                <input type="date" class="w-full p-2 border rounded-lg">

                <label class="block mt-4 mb-1 font-medium">Tanggal Pengembalian</label>
                <input type="date" class="w-full p-2 border rounded-lg">
            </div>
        </div>

        <!-- BUTTON -->
        <button class="mt-8 w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
            Pinjam
        </button>
=======
    <title>Login - ExploreTech</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-cover bg-center"
      style="background-image: url('https://www.polibatam.ac.id/wp-content/uploads/2023/05/Gedung.jpg');">

    <!-- Card Login -->
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">

        <!-- Title -->
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">
            Login 
        </h2>

        <!-- Form -->
        <form action="#" method="POST">

             <!-- Nama -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Nama</label>
                <input type="text" placeholder="Masukkan nama"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- NIM -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">NIM</label>
                <input type="text" placeholder="Contoh: 123456789"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Password</label>
                <input type="password" placeholder="Masukkan password"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Remember & Forgot -->
            <div class="flex justify-between items-center mb-4 text-sm">
                <label class="flex items-center">
                    <input type="checkbox" class="mr-2">
                    Ingatkan Saya
                </label>
                <a href="#" class="text-blue-500 hover:underline">Lupa password?</a>
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                Login
            </button>

        </form>

        <!-- Register -->
        <p class="text-center text-sm mt-4">
            Belum punya akun?
            <a href="#" class="text-blue-500 hover:underline">Daftar</a>
        </p>
>>>>>>> 0c2aad9ee736e6a62656310fa4c7dda385fe3220

    </div>

</body>
</html>