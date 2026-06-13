<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Digital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 font-sans">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    <aside class="w-64 bg-slate-800 text-white fixed h-screen px-5 py-6">
        <div class="flex justify-center mb-10">
            <div class="bg-white rounded-full w-28 h-20 flex items-center justify-center text-blue-700 font-bold">
                exploretech
            </div>
        </div>

        <nav class="space-y-4">
            <a href="#" class="flex items-center gap-3 bg-blue-500 px-4 py-3 rounded text-sm">
                🏠 Beranda
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded text-sm hover:bg-blue-500">
                📘 Daftar buku
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded text-sm hover:bg-blue-500">
                🕘 Riwayat Peminjaman
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded text-sm hover:bg-blue-500">
                ℹ️ Tentang
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded text-sm hover:bg-blue-500">
                ✉️ Kontak
            </a>
        </nav>

        <div class="absolute bottom-6 left-5 right-5">
            <a href="#" class="block bg-blue-500 text-center py-3 rounded font-semibold text-sm">
                Logout
            </a>
        </div>
    </aside>

    {{-- Content --}}
    <main class="ml-64 w-full">
        @yield('content')
    </main>

</div>

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>