<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password - ExploreTech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-400 to-blue-600 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-xl shadow-2xl w-full max-w-md p-8">
        
        <!-- Logo -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Lupa Password</h1>
        </div>

        <!-- Info Text -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
            <p class="text-sm text-gray-700 text-center">
                <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                Masukkan email Anda yang terdaftar. Kami akan mengirimkan link untuk mengatur ulang password.
            </p>
        </div>

        <!-- Form -->
        <form onsubmit="handleReset(event)" class="space-y-4">
            
            <!-- Email Input -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    <i class="fas fa-envelope text-blue-500 mr-2"></i>Email
                </label>
                <input type="email" id="email" placeholder="nama@email.com" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2.5 rounded-lg transition shadow-md hover:shadow-lg">
                <i class="fas fa-paper-plane mr-2"></i>Kirim Link Reset
            </button>

            <!-- Back to Login -->
            <div class="text-center pt-2">
                <a href="login.html" class="text-sm text-gray-600 hover:text-blue-500 font-medium transition">
                    <i class="fas fa-arrow-left mr-1"></i>Kembali ke Login
                </a>
            </div>
        </form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script>
        function handleReset(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;

            if (!email) {
                alert('Mohon masukkan email Anda!');
                return;
            }

            // Validasi format email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Format email tidak valid!');
                return;
            }

            // Simulasi pengiriman email (belum ada database)
            alert(`Link reset password telah dikirim ke: ${email}\n\n(Catatan: Ini hanya simulasi, database belum terintegrasi)`);
        }
    </script>
</body>
</html>