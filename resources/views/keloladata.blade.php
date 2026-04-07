<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>

<body class="bg-gray-100 p-6">

    <h1 class="text-2xl font-bold mb-4 text-blue-600">
        Data Buku Perpustakaan
    </h1>

    <div class="overflow-x-auto bg-white shadow rounded-lg p-4">

        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-blue-500">
                <tr>
                    <th class="px-6 py-3">Judul buku</th>
                    <th class="px-6 py-3">Kategori</th>
                    <th class="px-6 py-3">Penulis</th>
                    <th class="px-6 py-3">Tanggal Rilis</th>
                    <th class="px-6 py-3">Stok buku</th>
                   
                  
            
                </tr>
            </thead>

            <tbody>
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 font-medium">Atomic Habits </td>
                    <td class="px-6 py-4 font-medium">Self Improvement</td>
                    <td class="px-6 py-4 font-medium">James Clear</td>
                    <td class="px-6 py-4">2018</td>
                    <td class="px-6 py-4">26</td>
               
                </tr>

                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 font-medium">Seporsi Mie Ayam Sebelum Mati</td>
                    <td class="px-6 py-4 font-medium">Drama</td>
                    <td class="px-6 py-4 font-medium">Brian Khrisna</td>
                    <td class="px-6 py-4">2025</td>
                    <td class="px-6 py-4">55</td>
                 
                </tr>

                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 font-medium">Bumi</td>
                    <td class="px-6 py-4 font-medium">Fiksi Ilmiah</td>
                    <td class="px-6 py-4 font-medium">Tere Liye</td>
                    <td class="px-6 py-4">2014</td>
                    <td class="px-6 py-4">35</td>
                  

                </tr>
            </tbody>
        </table>

    </div>

</body>
</html>