<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kategori - Perpustakaan</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-[#f4f7fb] font-sans">

@include('components.sidebarAdmin')

<div class="ml-64 min-h-screen">

    @include('components.topbarAdmin', ['title' => 'Kelola Kategori'])

    <main class="px-8 pb-10">

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Daftar Kategori Buku</h2>
                    <p class="text-gray-500 mt-1">Tambah, edit, cari, dan hapus kategori buku.</p>
                </div>

                <button data-modal-target="kategoriModal"
                        data-modal-toggle="kategoriModal"
                        class="mt-4 sm:mt-0 px-5 py-3 text-white bg-blue-600 rounded-xl font-semibold hover:bg-blue-700 transition shadow">
                    <i class="fa-solid fa-plus mr-2"></i>
                    Tambah Kategori
                </button>
            </div>

            @if(session('success'))
                <div class="mb-6 p-5 rounded-xl bg-green-100 border border-green-300 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/kategori" method="GET" class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-6">
                <div class="md:col-span-10">
                    <input type="text"
                           name="search"
                           value="{{ request('search') }}"
                           placeholder="Cari kategori..."
                           class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-xl focus:ring-blue-500 focus:border-blue-500 p-4">
                </div>

                <div class="md:col-span-2">
                    <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl px-6 py-4">
                        Cari
                    </button>
                </div>
            </form>

            <div class="relative overflow-x-auto rounded-xl border border-gray-200">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs uppercase bg-gray-50 text-gray-700">
                    <tr>
                        <th class="px-6 py-5 text-center">No</th>
                        <th class="px-6 py-5">Nama Kategori</th>
                        <th class="px-6 py-5">Deskripsi</th>
                        <th class="px-6 py-5 text-center">Jumlah Buku</th>
                        <th class="px-6 py-5 text-center">Aksi</th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                    @forelse($kategori as $item)
                        <tr class="bg-white hover:bg-gray-50 transition">
                            <td class="px-6 py-5 text-center font-semibold text-gray-900">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-5 font-bold text-gray-900">
                                {{ $item->nama_kategori }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->deskripsi ?? '-' }}
                            </td>

                            <td class="px-6 py-5 text-center">
                                <span class="bg-blue-100 text-blue-700 text-xs font-bold px-4 py-2 rounded-full">
                                    {{ $item->jumlah_buku }} Buku
                                </span>
                            </td>

                            <td class="px-6 py-5 text-center">
                                <div class="flex justify-center gap-2">
                                    <button data-modal-target="editKategori{{ $item->id_kategori }}"
                                            data-modal-toggle="editKategori{{ $item->id_kategori }}"
                                            class="px-4 py-2 text-xs font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">
                                        Edit
                                    </button>

                                    <form action="/kategori/delete/{{ $item->id_kategori }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="px-4 py-2 text-xs font-bold text-white bg-red-600 rounded-lg hover:bg-red-700 transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <div id="editKategori{{ $item->id_kategori }}" tabindex="-1"
                             class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full bg-black/50">

                            <div class="relative p-4 w-full max-w-md">
                                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">

                                    <div class="flex items-center justify-between px-6 py-4 bg-blue-600 text-white">
                                        <h3 class="text-lg font-bold">Edit Kategori</h3>

                                        <button type="button"
                                                class="text-white hover:bg-white/20 rounded-lg p-1.5"
                                                data-modal-hide="editKategori{{ $item->id_kategori }}">
                                            ✕
                                        </button>
                                    </div>

                                    <form action="/kategori/update/{{ $item->id_kategori }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="px-6 py-5 space-y-4">
                                            <div>
                                                <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                    Nama Kategori <span class="text-red-500">*</span>
                                                </label>

                                                <input type="text"
                                                       name="nama_kategori"
                                                       value="{{ $item->nama_kategori }}"
                                                       required
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                                       placeholder="Masukkan kategori">
                                            </div>

                                            <div>
                                                <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                    Deskripsi
                                                </label>

                                                <textarea name="deskripsi"
                                                          rows="4"
                                                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                                          placeholder="Masukkan deskripsi">{{ $item->deskripsi }}</textarea>
                                            </div>
                                        </div>

                                        <div class="flex items-center justify-end gap-3 px-6 py-4 bg-gray-50 border-t border-gray-200">
                                            <button type="button"
                                                    data-modal-hide="editKategori{{ $item->id_kategori }}"
                                                    class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                                                Batal
                                            </button>

                                            <button type="submit"
                                                    class="px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                                Update
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-gray-500">
                                Data kategori masih kosong.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>

<div id="kategoriModal" tabindex="-1"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full bg-black/50">

    <div class="relative p-4 w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">

            <div class="flex items-center justify-between px-6 py-4 bg-blue-600 text-white">
                <h3 class="text-lg font-bold">Tambah Kategori</h3>

                <button type="button"
                        class="text-white hover:bg-white/20 rounded-lg p-1.5"
                        data-modal-hide="kategoriModal">
                    ✕
                </button>
            </div>

            <form action="/kategori/store" method="POST">
                @csrf

                <div class="px-6 py-5 space-y-4">
                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Nama Kategori <span class="text-red-500">*</span>
                        </label>

                        <input type="text"
                               name="nama_kategori"
                               required
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                               placeholder="Masukkan kategori">
                    </div>

                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Deskripsi
                        </label>

                        <textarea name="deskripsi"
                                  rows="4"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                  placeholder="Masukkan deskripsi"></textarea>
                    </div>

                    <p class="text-xs text-gray-500">
                        <span class="text-red-500">*</span> Nama kategori wajib diisi.
                    </p>
                </div>

                <div class="flex items-center justify-end gap-3 px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <button type="button"
                            data-modal-hide="kategoriModal"
                            class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                        Batal
                    </button>

                    <button type="submit"
                            class="px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>
</html>