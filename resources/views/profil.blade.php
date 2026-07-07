<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Anggota</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-slate-100 overflow-x-hidden">

@include('components.sidebar')

<main class="ml-[210px] min-h-screen p-8">

    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-200 p-8">

        <div class="flex items-center gap-4 mb-8">
            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name ?? 'User') }}&background=2563eb&color=ffffff"
                 class="w-16 h-16 rounded-full border"
                 alt="Profile">

            <div>
                <h1 class="text-2xl font-bold text-gray-900">
                    Profil Anggota
                </h1>
                <p class="text-sm text-gray-500">
                    Detail identitas akun dan pengaturan password.
                </p>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-5 px-4 py-3 rounded-lg bg-green-100 text-green-700 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 gap-4 mb-8">
            <div>
                <label class="block text-sm text-gray-500 mb-1">Nama</label>
                <input type="text"
                       value="{{ $user->name ?? '-' }}"
                       readonly
                       class="w-full bg-gray-100 border border-gray-300 rounded-lg px-4 py-3 text-gray-700">
            </div>

            @if(($user->role ?? '') == 'anggota')
                <div>
                    <label class="block text-sm text-gray-500 mb-1">NIM</label>
                    <input type="text"
                           value="{{ $user->nim ?? '-' }}"
                           readonly
                           class="w-full bg-gray-100 border border-gray-300 rounded-lg px-4 py-3 text-gray-700">
                </div>
            @endif

            @if(($user->role ?? '') == 'admin')
                <div>
                    <label class="block text-sm text-gray-500 mb-1">NIP</label>
                    <input type="text"
                           value="{{ $user->nip ?? '-' }}"
                           readonly
                           class="w-full bg-gray-100 border border-gray-300 rounded-lg px-4 py-3 text-gray-700">
                </div>
            @endif

            <div>
                <label class="block text-sm text-gray-500 mb-1">Role</label>
                <input type="text"
                       value="{{ ucfirst($user->role ?? '-') }}"
                       readonly
                       class="w-full bg-gray-100 border border-gray-300 rounded-lg px-4 py-3 text-gray-700">
            </div>
        </div>

        <form action="{{ route('profil.updatePassword') }}" method="POST">
            @csrf

            <h2 class="text-lg font-bold text-gray-900 mb-4">
                Ganti Password Baru
            </h2>

            <div class="mb-4">
                <label class="block text-sm text-gray-500 mb-1">
                    Password Baru
                </label>
                <input type="password"
                       name="password_baru"
                       placeholder="Masukkan password baru"
                       class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-blue-500 focus:border-blue-500">

                @error('password_baru')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-sm text-gray-500 mb-1">
                    Konfirmasi Password Baru
                </label>
                <input type="password"
                       name="konfirmasi_password"
                       placeholder="Ulangi password baru"
                       class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-blue-500 focus:border-blue-500">

                @error('konfirmasi_password')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}"
                   class="px-5 py-3 rounded-lg bg-gray-500 text-white font-semibold hover:bg-gray-600">
                    <i class="fa-solid fa-arrow-left mr-2"></i>
                    Kembali
                </a>

                <button type="submit"
                        class="px-5 py-3 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700">
                    <i class="fa-solid fa-lock mr-2"></i>
                    Simpan Password
                </button>
            </div>
        </form>

    </div>

</main>

</body>
</html>