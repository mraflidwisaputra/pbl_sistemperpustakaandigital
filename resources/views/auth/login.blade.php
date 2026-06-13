<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-image: url("{{ asset('https://www.polibatam.ac.id/wp-content/uploads/2023/06/Gedung.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .font-login {
            font-family: 'Courier New', monospace;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center font-login">

    <div class="w-[500px] bg-white/75 backdrop-blur-sm border border-sky-400 rounded-lg shadow-xl px-9 py-8">

        <h1 class="text-center text-3xl font-bold text-black mb-7">
            LOGIN
        </h1>

        @if(session('error'))
            <div class="mb-4 text-sm text-red-700 bg-red-100 border border-red-300 rounded-lg px-4 py-2">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <input type="hidden" name="role" id="role" value="anggota">

            <div class="flex justify-center mb-7">
                <button type="button" id="btnAnggota"
                    class="px-6 py-2 text-xl font-bold border border-sky-400 rounded-l-md bg-sky-400 text-black">
                    Anggota
                </button>

                <button type="button" id="btnAdmin"
                    class="px-6 py-2 text-xl font-bold border border-sky-400 rounded-r-md bg-white text-black">
                    Admin
                </button>
            </div>

            <div class="mb-5" id="nimGroup">
                <label class="block text-2xl font-bold text-black mb-1">
                    NIM
                </label>

                <input
                    type="text"
                    name="nim"
                    placeholder="Masukkan NIM Anda"
                    class="w-full h-12 rounded-md border border-sky-400 bg-white/90 text-lg px-3 focus:ring-sky-400 focus:border-sky-400">
            </div>

            <div class="mb-5 hidden" id="nipGroup">
                <label class="block text-2xl font-bold text-black mb-1">
                    NIP
                </label>

                <input
                    type="text"
                    name="nip"
                    placeholder="Masukkan NIP Anda"
                    class="w-full h-12 rounded-md border border-sky-400 bg-white/90 text-lg px-3 focus:ring-sky-400 focus:border-sky-400">
            </div>

            <div class="mb-3">
                <label class="block text-2xl font-bold text-black mb-1">
                    Password
                </label>

                <div class="relative">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Masukkan Password Anda"
                        class="w-full h-12 rounded-md border border-sky-400 bg-white/90 text-lg px-3 pr-12 focus:ring-sky-400 focus:border-sky-400">

                    <button
                        type="button"
                        id="togglePassword"
                        class="absolute inset-y-0 right-3 flex items-center text-gray-600 hover:text-sky-600">

                        <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 12a3 3 0 11-6 0
                                3 3 0 016 0zm6 0
                                s-3 7-9 7-9-7-9-7
                                3-7 9-7 9 7z"/>
                        </svg>

                        <svg id="eyeClose" xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 hidden"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13.875 18.825A10.05 10.05 0 0112 19
                                c-6 0-9-7-9-7
                                a13.16 13.16 0 013.293-3.95M9.88 9.88
                                a3 3 0 104.24 4.24M6.1 6.1
                                L17.9 17.9"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="text-right mb-7">
                <a href="#" class="text-blue-700 text-xl font-bold hover:underline">
                    Lupa Password?
                </a>
            </div>

            <div class="flex justify-center">
                <button type="submit"
                    class="bg-sky-500 hover:bg-sky-600 text-white text-2xl font-bold px-12 py-2 rounded-lg">
                    Login
                </button>
            </div>
        </form>
    </div>

    <script>
        const btnAnggota = document.getElementById('btnAnggota');
        const btnAdmin = document.getElementById('btnAdmin');
        const role = document.getElementById('role');
        const nimGroup = document.getElementById('nimGroup');
        const nipGroup = document.getElementById('nipGroup');

        btnAnggota.addEventListener('click', function () {
            role.value = 'anggota';

            nimGroup.classList.remove('hidden');
            nipGroup.classList.add('hidden');

            btnAnggota.classList.add('bg-sky-400');
            btnAnggota.classList.remove('bg-white');

            btnAdmin.classList.add('bg-white');
            btnAdmin.classList.remove('bg-sky-400');
        });

        btnAdmin.addEventListener('click', function () {
            role.value = 'admin';

            nipGroup.classList.remove('hidden');
            nimGroup.classList.add('hidden');

            btnAdmin.classList.add('bg-sky-400');
            btnAdmin.classList.remove('bg-white');

            btnAnggota.classList.add('bg-white');
            btnAnggota.classList.remove('bg-sky-400');
        });

        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const eyeOpen = document.getElementById('eyeOpen');
        const eyeClose = document.getElementById('eyeClose');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';

            password.setAttribute('type', type);

            eyeOpen.classList.toggle('hidden');
            eyeClose.classList.toggle('hidden');
        });
    </script>

</body>
</html>