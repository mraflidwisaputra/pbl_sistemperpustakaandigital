<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kategori - Perpustakaan</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-[#f4f7fb] font-sans text-slate-900">

@include('components.sidebarAdmin')

<div class="ml-[210px] min-h-screen px-4 py-3">

<main>
    @include('components.profiladmin')
    </main>

    <main>
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">

            <!-- HEADER -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                <div>
                    <h2 class="text-xl font-bold text-slate-900">Daftar Kategori Buku</h2>
                    <p class="text-gray-500 mt-1 text-sm">
                        Tambah, edit, cari, dan hapus kategori buku.
                    </p>
                </div>

                <button data-modal-target="kategoriModal"
                        data-modal-toggle="kategoriModal"
                        class="mt-3 sm:mt-0 px-3 py-2 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 transition shadow text-sm">
                    <i class="fa-solid fa-plus mr-1"></i>
                    Tambah Kategori
                </button>
            </div>

            <!-- ALERT -->
            @include('components.notification')

            <!-- SEARCH -->
            <form action="{{ route('kategori.index') }}" method="GET" class="mb-3">
                <div class="flex items-center gap-2">

                    <input type="text"
                           name="search"
                           value="{{ request('search') }}"
                           class="flex-1 h-10 px-3 text-sm bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-100 focus:border-blue-500"
                           placeholder="Cari kategori...">

                    <button type="submit"
                            class="h-10 px-4 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700 transition">
                        <i class="fa-solid fa-magnifying-glass mr-1"></i>
                        Cari
                    </button>

                    <a href="{{ route('kategori.index') }}"
                       class="h-10 px-4 flex items-center justify-center bg-gray-500 text-white text-sm font-semibold rounded-lg hover:bg-gray-600 transition">
                        Reset
                    </a>

                </div>
            </form>

            <!-- TABLE -->
            <div class="rounded-lg border border-gray-200 overflow-hidden">
                <table class="w-full table-fixed text-[12px] text-left text-gray-600">
                    <thead class="bg-gray-50 text-gray-700 uppercase">
                    <tr>
                        <th class="px-3 py-2 text-center w-[50px]">No</th>
                        <th class="px-3 py-2">Nama Kategori</th>
                        <th class="px-3 py-2 text-center w-[130px]">Jumlah Buku</th>
                        <th class="px-3 py-2 text-center w-[130px]">Aksi</th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                    @forelse($kategori as $item)
                        <tr class="bg-white hover:bg-gray-50 transition">

                            <td class="px-3 py-2 text-center font-semibold text-gray-900">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-3 py-2 font-semibold text-gray-900 truncate">
                                {{ $item->nama_kategori }}
                            </td>

                            <td class="px-3 py-2 text-center">
                                <span class="bg-blue-100 text-blue-700 text-[11px] font-bold px-3 py-1 rounded-full">
                                    {{ $item->jumlah_buku }} Buku
                                </span>
                            </td>

                            <td class="px-3 py-2 text-center">
                                <div class="flex justify-center gap-1">

                                    <button data-modal-target="editKategori{{ $item->id }}"
                                            data-modal-toggle="editKategori{{ $item->id }}"
                                            class="px-2 py-1 text-[11px] font-semibold text-white bg-blue-600 rounded hover:bg-blue-700 transition">
                                        Edit
                                    </button>

                                    <form action="{{ route('kategori.destroy', $item->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="px-2 py-1 text-[11px] font-semibold text-white bg-red-600 rounded hover:bg-red-700 transition">
                                            Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                        <!-- MODAL EDIT -->
                        <div id="editKategori{{ $item->id }}"
                             tabindex="-1"
                             aria-hidden="true"
                             class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 justify-center items-center bg-black/50">

                            <div class="relative p-4 w-full max-w-sm">
                                <div class="bg-white rounded-xl shadow-2xl overflow-hidden">

                                    <div class="flex items-center justify-between px-5 py-3 bg-blue-600 text-white">
                                        <h3 class="text-base font-bold">Edit Kategori</h3>

                                        <button type="button"
                                                class="text-white hover:bg-white/20 rounded-lg p-1.5"
                                                data-modal-hide="editKategori{{ $item->id }}">
                                            ✕
                                        </button>
                                    </div>

                                    <form action="{{ route('kategori.update', $item->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="px-5 py-4 space-y-3">
                                            <div>
                                                <label class="block mb-1 text-sm font-semibold text-gray-700">
                                                    Nama Kategori <span class="text-red-500">*</span>
                                                </label>

                                                <input type="text"
                                                       name="nama_kategori"
                                                       value="{{ old('nama_kategori', $item->nama_kategori) }}"
                                                       required
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2"
                                                       placeholder="Masukkan kategori">
                                            </div>
                                        </div>

                                        <div class="flex items-center justify-end gap-3 px-5 py-3 bg-gray-50 border-t border-gray-200">
                                            <button type="button"
                                                    data-modal-hide="editKategori{{ $item->id }}"
                                                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                                                Batal
                                            </button>

                                            <button type="submit"
                                                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                                Update
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-8 text-center text-gray-500">
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

<!-- MODAL TAMBAH -->
<div id="kategoriModal"
     tabindex="-1"
     aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 justify-center items-center bg-black/50">

    <div class="relative p-4 w-full max-w-sm">
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden">

            <div class="flex items-center justify-between px-5 py-3 bg-blue-600 text-white">
                <h3 class="text-base font-bold">Tambah Kategori</h3>

                <button type="button"
                        class="text-white hover:bg-white/20 rounded-lg p-1.5"
                        data-modal-hide="kategoriModal">
                    ✕
                </button>
            </div>

            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf

                <div class="px-5 py-4 space-y-3">
                    <div>
                        <label class="block mb-1 text-sm font-semibold text-gray-700">
                            Nama Kategori <span class="text-red-500">*</span>
                        </label>

                        <input type="text"
                               name="nama_kategori"
                               value="{{ old('nama_kategori') }}"
                               required
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2"
                               placeholder="Masukkan kategori">
                    </div>

                    <p class="text-xs text-gray-500">
                        <span class="text-red-500">*</span> Nama kategori wajib diisi.
                    </p>
                </div>

                <div class="flex items-center justify-end gap-3 px-5 py-3 bg-gray-50 border-t border-gray-200">
                    <button type="button"
                            data-modal-hide="kategoriModal"
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">
                        Batal
                    </button>

                    <button type="submit"
                            class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
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
