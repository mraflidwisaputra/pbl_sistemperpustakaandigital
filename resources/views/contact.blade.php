<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 overflow-x-hidden">

@include('components.sidebarAnggota')

<main class="ml-[260px] min-h-screen">

    @include('components.topbarAnggota', [
        'title' => 'Kontak',
        'subtitle' => 'Hubungi pengelola perpustakaan digital.'
    ])

    <section class="px-8 pb-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <div class="bg-white rounded-2xl shadow-md p-8">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">
                    Informasi Kontak
                </h2>

                <p class="text-gray-600 mb-6">
                    Jika mengalami kendala saat menggunakan sistem perpustakaan digital,
                    silakan hubungi admin melalui informasi berikut.
                </p>

                <div class="space-y-4">
                    <div class="p-4 bg-blue-50 rounded-xl border border-blue-100">
                        <p class="font-semibold text-blue-900">Email</p>
                        <p class="text-gray-700">admin@perpustakaandigital.com</p>
                    </div>

                    <div class="p-4 bg-blue-50 rounded-xl border border-blue-100">
                        <p class="font-semibold text-blue-900">Telepon</p>
                        <p class="text-gray-700">0812-3456-7890</p>
                    </div>

                    <div class="p-4 bg-blue-50 rounded-xl border border-blue-100">
                        <p class="font-semibold text-blue-900">Alamat</p>
                        <p class="text-gray-700">Politeknik Negeri Batam</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md p-8">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">
                    Kirim Pesan
                </h2>

                <form action="#" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900">
                            Nama
                        </label>
                        <input type="text"
                               name="nama"
                               class="w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Masukkan nama">
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900">
                            Email
                        </label>
                        <input type="email"
                               name="email"
                               class="w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Masukkan email">
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900">
                            Pesan
                        </label>
                        <textarea name="pesan"
                                  rows="5"
                                  class="w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                  placeholder="Tulis pesan kamu"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg">
                        Kirim Pesan
                    </button>
                </form>
            </div>

        </div>

    </section>

</main>

</body>
</html>