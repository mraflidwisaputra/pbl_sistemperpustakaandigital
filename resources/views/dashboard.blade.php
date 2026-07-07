<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-slate-100 text-slate-900">

    @include('components.sidebarAdmin')

    <main class="ml-[210px] min-h-screen px-5 py-4 text-sm">

        <!-- HEADER -->
        <div class="flex items-center justify-between mb-5">
            <div>
                <h1 class="text-3xl font-bold text-slate-900">Dashboard</h1>
                <p class="text-slate-500 mt-1 text-sm">
                    {{ now()->translatedFormat('l, d F Y') }}
                </p>
            </div>

    <main>
    @include('components.profiladmin')
    </main>

    </div>
</div>
        </div>

        <!-- WELCOME -->
        <div class="mb-5 rounded-xl border border-blue-200 bg-blue-50 px-5 py-4">
            <p class="text-blue-700 font-semibold text-sm">
                Selamat Datang Administrator di Administrator Perpus
            </p>
        </div>

        <!-- CARD STATISTIK -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 mb-5">

            <div class="bg-white rounded-xl shadow-sm p-4">
                <p class="text-slate-500 text-sm">Total Anggota</p>
                <h2 class="text-3xl font-bold text-slate-900 mt-3">
                    {{ $totalAnggota ?? 0 }}
                </h2>
                <p class="text-slate-500 mt-1 text-sm">Anggota</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-4">
                <p class="text-slate-500 text-sm">Total Buku</p>
                <h2 class="text-3xl font-bold text-slate-900 mt-3">
                    {{ $totalBuku ?? 0 }}
                </h2>
                <p class="text-slate-500 mt-1 text-sm">Buku</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-4">
                <p class="text-slate-500 text-sm">Total Peminjaman</p>
                <h2 class="text-3xl font-bold text-slate-900 mt-3">
                    {{ $totalPeminjaman ?? 0 }}
                </h2>
                <p class="text-slate-500 mt-1 text-sm">Peminjaman Buku</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-4">
                <p class="text-slate-500 text-sm">Peminjaman Aktif</p>
                <h2 class="text-3xl font-bold text-green-600 mt-3">
                    {{ $peminjamanAktif ?? 0 }}
                </h2>
                <p class="text-slate-500 mt-1 text-sm">Sedang Dipinjam</p>
            </div>

        </div>

        <!-- AKTIVITAS TERBARU -->
        <div class="bg-white rounded-xl shadow-sm p-5">
            <h2 class="text-xl font-bold text-slate-900">Aktivitas Terbaru</h2>
            <p class="text-slate-500 mt-1 mb-4 text-sm">
                Daftar aktivitas peminjaman dan pengembalian buku terbaru.
            </p>

            <div class="overflow-x-auto rounded-lg border border-slate-200">
                <table class="w-full text-sm text-left">
                    <thead class="bg-slate-50 text-slate-700 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-3 text-center w-14">No</th>
                            <th class="px-4 py-3">Tanggal</th>
                            <th class="px-4 py-3">Nama Anggota</th>
                            <th class="px-4 py-3">Aktivitas</th>
                            <th class="px-4 py-3">Keterangan</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-200">
                        @forelse ($aktivitasTerbaru ?? [] as $index => $aktivitas)
                            <tr class="hover:bg-slate-50">
                                <td class="px-4 py-3 text-center">
                                    {{ $index + 1 }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $aktivitas->tanggal ?? '-' }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $aktivitas->nama_anggota ?? '-' }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $aktivitas->aktivitas ?? '-' }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $aktivitas->keterangan ?? '-' }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-5 text-center text-slate-500">
                                    Belum ada aktivitas terbaru.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </main>

</body>
</html>