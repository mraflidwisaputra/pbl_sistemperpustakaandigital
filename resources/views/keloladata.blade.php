<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota - Perpustakaan</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-[#f4f7fb] font-sans text-slate-900">

@include('components.sidebarAdmin')

<div class="ml-[210px] min-h-screen px-4 py-3">

<main>
    @include('components.profiladmin')
    </main>

    <main>
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                <div>
                    <h2 class="text-xl font-bold text-slate-900">Daftar Anggota</h2>
                    <p class="text-gray-500 mt-1 text-sm">
                        Tambah, cari, hapus, dan reset password anggota.
                    </p>
                </div>

                <button data-modal-target="modal-tambah-anggota"
                        data-modal-toggle="modal-tambah-anggota"
                        class="mt-3 sm:mt-0 px-3 py-2 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 transition shadow text-sm">
                    <i class="fa-solid fa-plus mr-1"></i>
                    Tambah Anggota
                </button>
            </div>

            @include('components.notification')

            <form action="{{ route('keloladata.index') }}" method="GET" class="mb-3">
                <div class="flex items-center gap-2">
                    <input type="text"
                           name="search"
                           value="{{ request('search') }}"
                           class="flex-1 h-10 px-3 text-sm bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-100 focus:border-blue-500"
                           placeholder="Cari nama atau NIM anggota...">

                    <button type="submit"
                            class="h-10 px-4 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700 transition">
                        <i class="fa-solid fa-magnifying-glass mr-1"></i>
                        Cari
                    </button>

                </div>
            </form>

            <div class="rounded-lg border border-gray-200 overflow-hidden">
                <table class="w-full table-fixed text-[12px] text-left text-gray-600">
                    <thead class="bg-gray-50 text-gray-700 uppercase">
                        <tr>
                            <th class="px-3 py-2 text-center w-[50px]">No</th>
                            <th class="px-3 py-2">Nama Anggota</th>
                            <th class="px-3 py-2 w-[160px]">NIM</th>
                            <th class="px-3 py-2 text-center w-[100px]">Role</th>
                            <th class="px-3 py-2 text-center w-[190px]">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @forelse($users as $item)
                            <tr class="bg-white hover:bg-gray-50 transition">
                                <td class="px-3 py-2 text-center font-semibold text-gray-900">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="px-3 py-2 font-semibold text-gray-900 truncate">
                                    {{ $item->name }}
                                </td>

                                <td class="px-3 py-2 truncate">
                                    {{ $item->nim ?? '-' }}
                                </td>

                                <td class="px-3 py-2 text-center">
                                    <span class="bg-green-100 text-green-700 text-[11px] font-bold px-3 py-1 rounded-full">
                                        {{ ucfirst($item->role) }}
                                    </span>
                                </td>

                                <td class="px-3 py-2 text-center">
                                    <div class="flex justify-center gap-2">
                                        <form action="{{ route('keloladata.resetPassword', $item->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Yakin ingin mereset password anggota ini menjadi NIM?')">
                                            @csrf
                                            @method('PUT')

                                            <button type="submit"
                                                    class="px-3 py-1 text-[11px] font-semibold text-white bg-yellow-500 rounded hover:bg-yellow-600 transition">
                                                Reset Password
                                            </button>
                                        </form>

                                        <form action="{{ route('keloladata.destroy', $item->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus anggota ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="px-3 py-1 text-[11px] font-semibold text-white bg-red-600 rounded hover:bg-red-700 transition">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-8 text-center text-gray-500">
                                    Data anggota tidak ditemukan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>

<div id="modal-tambah-anggota"
     tabindex="-1"
     aria-hidden="true"
     class="hidden fixed inset-0 z-50 overflow-y-auto overflow-x-hidden justify-center items-center bg-black/50">

    <div class="relative p-4 w-full max-w-sm">
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden">

            <div class="flex items-center justify-between px-5 py-3 bg-blue-600 text-white">
                <h3 class="text-base font-bold">Tambah Anggota Baru</h3>

                <button type="button"
                        data-modal-hide="modal-tambah-anggota"
                        class="text-white hover:bg-white/20 rounded-lg p-1.5">
                    ✕
                </button>
            </div>

            <form action="{{ route('keloladata.store') }}" method="POST">
                @csrf

                <div class="px-5 py-4 space-y-3">
                    <div>
                        <label class="block mb-1 text-sm font-semibold text-gray-700">
                            Nama Anggota <span class="text-red-500">*</span>
                        </label>
                        <input type="text"
                               name="name"
                               value="{{ old('name') }}"
                               required
                               placeholder="Masukkan nama anggota"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2">
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-semibold text-gray-700">
                            NIM <span class="text-red-500">*</span>
                        </label>
                        <input type="text"
                               name="nim"
                               value="{{ old('nim') }}"
                               required
                               placeholder="Masukkan NIM"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2">
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-semibold text-gray-700">
                            Password <span class="text-red-500">*</span>
                        </label>
                        <input type="password"
                               name="password"
                               required
                               placeholder="Minimal 6 karakter"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2">
                    </div>

                    <p class="text-xs text-gray-500">
                        Anggota akan otomatis tersimpan dengan role <b>anggota</b>.
                    </p>
                </div>

                <div class="flex items-center justify-end gap-3 px-5 py-3 bg-gray-50 border-t border-gray-200">
                    <button type="button"
                            data-modal-hide="modal-tambah-anggota"
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
