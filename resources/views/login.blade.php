<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExploreTech - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="min-h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat" 
      style="background-image: url('https://www.polibatam.ac.id/wp-content/uploads/2022/03/MG_9155-scaled-1.jpg');">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-blue-900/30 backdrop-blur-[2px]"></div>

    <!-- Login Card -->
    <div class="relative z-10 w-full max-w-md mx-4">
        <div class="bg-white/80 backdrop-blur-xl rounded-2xl shadow-2xl border border-white/50 p-8">
            
            <!-- Logo & Title -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white rounded-full shadow-lg mb-4">
                    <img src="/images/exploretech.jpg" alt="ExploreTech" class="w-14 h-14 object-contain">
                </div>
                <h1 class="text-3xl font-bold text-gray-800 tracking-wide">LOGIN</h1>
            </div>

            <!-- Tab Toggle: Anggota / Admin -->
            <div class="flex justify-center mb-8">
                <div class="inline-flex bg-white/60 rounded-xl p-1 shadow-sm border border-gray-200">
                    <button id="tabAnggota" onclick="switchTab('anggota')" 
                        class="px-6 py-2.5 rounded-lg text-sm font-semibold transition-all duration-300 bg-blue-500 text-white shadow-md">
                        Anggota
                    </button>
                    <button id="tabAdmin" onclick="switchTab('admin')" 
                        class="px-6 py-2.5 rounded-lg text-sm font-semibold transition-all duration-300 text-gray-600 hover:text-gray-800">
                        Admin
                    </button>
                </div>
            </div>

            <!-- Form Login -->
            <form id="loginForm" class="space-y-5">
                
                <!-- ID Input (NIM / NIP) -->
                <div>
                    <label for="userId" class="block text-base font-semibold text-gray-800 mb-2">
                        <i class="fas fa-id-card mr-2 text-blue-500"></i><span id="userLabel">NIM</span>
                    </label>
                    <input type="text" id="userId" name="userId" 
                        placeholder="Masukkan NIM Anda"
                        class="bg-white/90 border-2 border-blue-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 transition-all duration-200 placeholder:text-gray-400 hover:border-blue-400">
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-base font-semibold text-gray-800 mb-2">
                        <i class="fas fa-lock mr-2 text-blue-500"></i>Password
                    </label>
                    <div class="relative">
                        <input type="password" id="password" name="password" 
                            placeholder="Masukkan Password Anda"
                            class="bg-white/90 border-2 border-blue-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 pr-12 transition-all duration-200 placeholder:text-gray-400 hover:border-blue-400">
                        <button type="button" onclick="togglePassword()" 
                            class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-blue-500 transition-colors">
                            <i id="eyeIcon" class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Lupa Password -->
                <div class="text-right">
                    <a href="lupa-password" class="text-sm font-medium text-blue-600 hover:text-blue-700 hover:underline transition-colors">
                        Lupa Password?
                    </a>
                </div>

                <!-- Login Button -->
                <div class="pt-2">
                    <button type="submit" 
                        class="w-full text-white bg-gradient-to-r from-blue-400 to-blue-500 hover:from-blue-500 hover:to-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-lg px-6 py-3 text-center shadow-lg transform transition-all duration-200 hover:scale-[1.02] hover:shadow-xl">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </button>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script>
        // Switch Tab Anggota / Admin
        function switchTab(tab) {
            const tabAnggota = document.getElementById('tabAnggota');
            const tabAdmin = document.getElementById('tabAdmin');
            const userIdInput = document.getElementById('userId');
            const userLabel = document.getElementById('userLabel');

            if (tab === 'anggota') {
                // Anggota aktif
                tabAnggota.className = 'px-6 py-2.5 rounded-lg text-sm font-semibold transition-all duration-300 bg-blue-500 text-white shadow-md';
                tabAdmin.className = 'px-6 py-2.5 rounded-lg text-sm font-semibold transition-all duration-300 text-gray-600 hover:text-gray-800';
                userLabel.textContent = 'NIM';
                userIdInput.placeholder = 'Masukkan NIM Anda';
            } else {
                // Admin aktif
                tabAdmin.className = 'px-6 py-2.5 rounded-lg text-sm font-semibold transition-all duration-300 bg-blue-500 text-white shadow-md';
                tabAnggota.className = 'px-6 py-2.5 rounded-lg text-sm font-semibold transition-all duration-300 text-gray-600 hover:text-gray-800';
                userLabel.textContent = 'NIP';
                userIdInput.placeholder = 'Masukkan NIP Anda';
            }
        }

        // Toggle Password Visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.className = 'fas fa-eye-slash';
            } else {
                passwordInput.type = 'password';
                eyeIcon.className = 'fas fa-eye';
            }
        }

        // Form Submit Handler (Placeholder - belum ada database)
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const userId = document.getElementById('userId').value;
            const password = document.getElementById('password').value;
            const isAnggota = document.getElementById('tabAnggota').classList.contains('bg-blue-500');
            const labelName = isAnggota ? 'NIM' : 'NIP';

            if (!userId || !password) {
                alert(`Mohon isi ${labelName} dan Password!`);
                return;
            }

            alert(`Login berhasil sebagai ${isAnggota ? 'Anggota' : 'Admin'}! (Database belum diintegrasikan)`);
        });
    </script>
</body>
</html>