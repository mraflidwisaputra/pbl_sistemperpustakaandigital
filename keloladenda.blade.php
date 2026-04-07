<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Denda</title>
</head>

<body class="bg-gray-100 p-6">

    <h1 class="text-2xl font-bold text-blue-600 mb-4">
        Kelola Denda Perpustakaan
    </h1>

    <div class="relative overflow-x-auto bg-white shadow rounded-lg border">

        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-sm text-white bg-blue-500">
                <tr>
                    <th class="p-4">No</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Buku</th>
                    <th class="px-6 py-3">Hari Telat</th>
                    <th class="px-6 py-3">Denda</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr class="hover:bg-gray-100">
                    <td class="p-4">1</td>
                    <td class="px-6 py-4">Ryan</td>
                    <td class="px-6 py-4">Laravel Dasar</td>
                    <td class="px-6 py-4">3 hari</td>
                    <td class="px-6 py-4 text-red-500">Rp 3.000</td>
                    <td class="px-6 py-4">Belum Bayar</td>
                    <td class="px-6 py-4">
                        <button class="bg-green-500 text-white px-3 py-1 rounded">Bayar</button>
                        <button class="bg-yellow-400 text-white px-3 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                    </td>
                </tr>

                <tr class="hover:bg-gray-100">
                    <td class="p-4">2</td>
                    <td class="px-6 py-4">Budi</td>
                    <td class="px-6 py-4">Pemrograman Web</td>
                    <td class="px-6 py-4">1 hari</td>
                    <td class="px-6 py-4 text-red-500">Rp 1.000</td>
                    <td class="px-6 py-4 text-green-600">Sudah Bayar</td>
                    <td class="px-6 py-4">
                        <button class="bg-yellow-400 text-white px-3 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</body>
</html>