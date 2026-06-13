<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Peminjaman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 overflow-x-hidden">

@include('components.sidebarAnggota')

<main class="ml-[260px] min-h-screen">

    @include('components.topbarAnggota', [
        'title' => 'Riwayat Peminjaman',
        'subtitle' => 'Lihat daftar riwayat peminjaman buku yang pernah dilakukan.'
    ])

    <section class="px-8 pb-10">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6">
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <p class="text-gray-500">Buku Dipinjam</p>
                <h2 class="text-3xl font-extrabold text-blue-600 mt-2">1</h2>
                <p class="text-sm text-gray-500 mt-1">Sedang Dipinjam</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <p class="text-gray-500">Terlambat</p>
                <h2 class="text-3xl font-extrabold text-red-600 mt-2">1</h2>
                <p class="text-sm text-gray-500 mt-1">Buku Terlambat</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <p class="text-gray-500">Denda Total</p>
                <h2 class="text-3xl font-extrabold text-slate-900 mt-2">Rp2.000</h2>
                <p class="text-sm text-gray-500 mt-1">Total Denda</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6">

            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">
                        Riwayat Peminjaman Saya
                    </h2>
                    <p class="text-sm text-gray-500 mt-1">
                        Data peminjaman buku anggota.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3">
                    <input type="text"
                           placeholder="Cari riwayat peminjaman..."
                           class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg p-3">

                    <select class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg p-3">
                        <option>Semua Status</option>
                        <option>Selesai</option>
                        <option>Terlambat</option>
                        <option>Sedang Dipinjam</option>
                    </select>
                </div>
            </div>

            <div class="overflow-x-auto rounded-xl border border-gray-200">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs uppercase bg-gray-50 text-gray-700">
                        <tr>
                            <th class="px-5 py-4 text-center">No</th>
                            <th class="px-5 py-4">Judul Buku</th>
                            <th class="px-5 py-4">Tanggal Pinjam</th>
                            <th class="px-5 py-4">Tanggal Kembali</th>
                            <th class="px-5 py-4 text-center">Status</th>
                            <th class="px-5 py-4 text-center">Denda</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-4 text-center font-semibold">1</td>
                            <td class="px-5 py-4 font-bold text-gray-900">
                                Pemrograman Berbasis Objek
                            </td>
                            <td class="px-5 py-4">01-04-2026</td>
                            <td class="px-5 py-4">08-04-2026</td>
                            <td class="px-5 py-4 text-center">
                                <span class="bg-green-100 text-green-700 text-xs font-bold px-4 py-2 rounded-full">
                                    Selesai
                                </span>
                            </td>
                            <td class="px-5 py-4 text-center text-green-600 font-semibold">
                                Rp0
                            </td>
                        </tr>

                        <tr class="bg-amber-50 hover:bg-amber-100">
                            <td class="px-5 py-4 text-center font-semibold">2</td>
                            <td class="px-5 py-4 font-bold text-gray-900">
                                Basis Data Lanjut
                            </td>
                            <td class="px-5 py-4">03-04-2026</td>
                            <td class="px-5 py-4">10-04-2026</td>
                            <td class="px-5 py-4 text-center">
                                <span class="bg-yellow-100 text-yellow-700 text-xs font-bold px-4 py-2 rounded-full">
                                    Terlambat
                                </span>
                            </td>
                            <td class="px-5 py-4 text-center text-red-600 font-semibold">
                                Rp2.000
                            </td>
                        </tr>

                        <tr class="bg-blue-50 hover:bg-blue-100">
                            <td class="px-5 py-4 text-center font-semibold">3</td>
                            <td class="px-5 py-4 font-bold text-gray-900">
                                Jaringan Komputer
                            </td>
                            <td class="px-5 py-4">07-04-2026</td>
                            <td class="px-5 py-4">-</td>
                            <td class="px-5 py-4 text-center">
                                <span class="bg-blue-100 text-blue-700 text-xs font-bold px-4 py-2 rounded-full">
                                    Dipinjam
                                </span>
                            </td>
                            <td class="px-5 py-4 text-center text-green-600 font-semibold">
                                Rp0
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
</main>

</body>
</html>