<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ExploreTech</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500 flex items-center justify-center h-screen">

    <!-- Card Login -->
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">

        <!-- Title -->
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">
            LOGIN
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
                <input type="text" placeholder="Masukkan NIM"
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

    </div>

</body>
</html>