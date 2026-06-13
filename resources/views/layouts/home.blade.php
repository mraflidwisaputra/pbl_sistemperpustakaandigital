<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Exploretech - Perpustakaan Digital</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r hidden md:block">
      <div class="p-6">
        <h1 class="text-2xl font-bold text-blue-600">Exploretech</h1>
        <p class="text-sm text-gray-500 mt-1">Perpustakaan Digital</p>
      </div>
      <nav class="px-4">
        <ul class="space-y-1">
          <li><a href="{{ route('home') }}" class="flex items-center gap-3 p-2 rounded hover:bg-gray-100">Beranda</a></li>
          <li><a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-gray-100">Daftar buku</a></li>
          <li><a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-gray-100">Riwayat Peminjaman</a></li>
          <li><a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-gray-100">Tentang</a></li>
          <li><a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-gray-100">Kontak</a></li>
          <li><a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-gray-100 text-red-600">Logout</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Main -->
    <main class="flex-1 p-6">
      @yield('content')
    </main>
  </div>
</body>
</html>
