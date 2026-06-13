<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 overflow-x-hidden">

@include('components.sidebarAnggota')

<main class="ml-[260px] min-h-screen">

    @include('components.topbarAnggota', [
        'title' => 'Tentang Kami',
        'subtitle' => 'Informasi singkat tentang sistem perpustakaan digital.'
    ])

    <section class="px-8 pb-10">
        <div class="bg-white rounded-2xl shadow-md p-8">

            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">TENTANG KAMI</h2>
                <p class="text-gray-600 mt-3 max-w-4xl mx-auto">
                    Perpustakaan Digital adalah platform yang dirancang untuk mempermudah akses informasi
                    dan literasi bagi seluruh pengguna. Sistem ini membantu proses pencarian, peminjaman,
                    dan pengelolaan buku secara lebih modern, praktis, dan efisien.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6">
                    <h3 class="text-2xl font-bold text-blue-900 mb-3">Visi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Menjadi platform perpustakaan digital yang inovatif, mudah diakses,
                        dan mampu mendukung peningkatan minat baca serta kualitas pembelajaran di era digital.
                    </p>
                </div>

                <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6">
                    <h3 class="text-2xl font-bold text-blue-900 mb-3">Misi</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Menyediakan akses buku secara online dengan mudah dan cepat.</li>
                        <li>• Meningkatkan efisiensi proses peminjaman dan pengembalian buku.</li>
                        <li>• Mendukung kegiatan belajar dengan koleksi buku yang beragam.</li>
                        <li>• Mengurangi keterlambatan melalui sistem yang terintegrasi.</li>
                    </ul>
                </div>
            </div>

            <div class="pt-10">
                <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">
                    Tim Pengembang
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/rafli.jpg') }}"
                             onerror="this.src='https://via.placeholder.com/120?text=User'"
                             class="w-32 h-32 rounded-full object-cover border-4 border-blue-300 shadow-lg mb-4"
                             alt="Rafli">

                        <div class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center shadow">
                            <p class="font-semibold text-sm">M. Rafli Dwi Saputra</p>
                            <p class="text-xs">(3312501106)</p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/ebet.jpg') }}"
                             onerror="this.src='https://via.placeholder.com/120?text=User'"
                             class="w-32 h-32 rounded-full object-cover border-4 border-blue-300 shadow-lg mb-4"
                             alt="Albertzon">

                        <div class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center shadow">
                            <p class="font-semibold text-sm">Albertzon Ayomi</p>
                            <p class="text-xs">(3312501119)</p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/moti.jpg') }}"
                             onerror="this.src='https://via.placeholder.com/120?text=User'"
                             class="w-32 h-32 rounded-full object-cover border-4 border-blue-300 shadow-lg mb-4"
                             alt="Timothy">

                        <div class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center shadow">
                            <p class="font-semibold text-sm">Timothy Pryan</p>
                            <p class="text-xs">(3312501098)</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

</body>
</html>