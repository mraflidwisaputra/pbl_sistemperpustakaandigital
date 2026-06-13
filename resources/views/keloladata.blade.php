<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota - Perpustakaan</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-[#f4f7fb] font-sans">

@include('components.sidebarAdmin')

<div class="ml-64 min-h-screen">

    @include('components.topbarAdmin', ['title' => 'Data Anggota'])

    <main class="px-8 pb-10">

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Daftar Anggota</h2>
                    <p class="text-gray-500 mt-1">Tambah, edit, cari, dan hapus data anggota.</p>
                </div>

                <button data-modal-target="modal-tambah-anggota" data-modal-toggle="modal-tambah-anggota"
                        class="mt-4 sm:mt-0 px-5 py-3 text-white bg-blue-600 rounded-xl font-semibold hover:bg-blue-700 transition shadow">
                    <i class="fa-solid fa-plus mr-2"></i>
                    Tambah Anggota
                </button>
            </div>

            @if(session('success'))
                <div class="mb-6 p-5 rounded-xl bg-green-100 border border-green-300 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 p-5 rounded-xl bg-red-100 border border-red-300 text-red-700">
                    <ul class="list-disc ml-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/keloladata" method="GET" class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-6">
                <div class="md:col-span-8">
                    <input type="text"
                           name="search"
                           value="{{ request('search') }}"
                           placeholder="Cari berdasarkan nama, NIM, atau email..."
                           class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-xl focus:ring-blue-500 focus:border-blue-500 p-4">
                </div>

                <div class="md:col-span-2">
                    <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl px-6 py-4">
                        Cari
                    </button>
                </div>

                <div class="md:col-span-2">
                    <a href="/keloladata"
                       class="block w-full bg-gray-500 hover:bg-gray-600 text-white font-semibold rounded-xl px-6 py-4 text-center">
                        Reset
                    </a>
                </div>
            </form>

            <div class="relative overflow-x-auto rounded-xl border border-gray-200">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs uppercase bg-gray-50 text-gray-700">
                    <tr>
                        <th class="px-6 py-5 text-center">No</th>
                        <th class="px-6 py-5">Nama Anggota</th>
                        <th class="px-6 py-5">NIM</th>
                        <th class="px-6 py-5">Tanggal Daftar</th>
                        <th class="px-6 py-5 text-center">Status</th>
                        <th class="px-6 py-5 text-center">Aksi</th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                    @forelse($anggota as $item)
                        <tr class="bg-white hover:bg-gray-50 transition">
                            <td class="px-6 py-5 text-center font-semibold text-gray-900">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-5">
                                <div class="font-bold text-gray-900">
                                    {{ $item->nama_anggota }}
                                </div>
                                <div class="text-xs text-gray-500">
                                    {{ $item->email }}
                                </div>
                            </td>

                            <td class="px-6 py-5 font-semibold text-gray-900">
                                {{ $item->nim }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->tanggal_daftar }}
                            </td>

                            <td class="px-6 py-5 text-center">
                                @if($item->status == 'Aktif')
                                    <span class="bg-green-100 text-green-700 text-xs font-bold px-4 py-2 rounded-full">
                                        Aktif
                                    </span>
                                @else
                                    <span class="bg-red-100 text-red-700 text-xs font-bold px-4 py-2 rounded-full">
                                        Tidak Aktif
                                    </span>
                                @endif
                            </td>

                            <td class="px-6 py-5 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <button data-modal-target="modal-edit-anggota{{ $item->id_anggota }}"
                                            data-modal-toggle="modal-edit-anggota{{ $item->id_anggota }}"
                                            class="px-4 py-2 text-xs font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">
                                        Edit
                                    </button>

                                    <form action="/keloladata/delete/{{ $item->id_anggota }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus anggota ini?')">
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

                        <div id="modal-edit-anggota{{ $item->id_anggota }}" tabindex="-1" aria-hidden="true"
                             class="hidden fixed inset-0 z-50 overflow-y-auto overflow-x-hidden justify-center items-center">

                            <div class="relative p-4 w-full max-w-lg">
                                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">

                                    <div class="flex items-center justify-between px-6 py-4 bg-blue-600 text-white">
                                        <h3 class="text-lg font-bold">Edit Anggota</h3>

                                        <button type="button"
                                                data-modal-hide="modal-edit-anggota{{ $item->id_anggota }}"
                                                class="text-white hover:bg-white/20 rounded-lg p-1.5">
                                            ✕
                                        </button>
                                    </div>

                                    <form action="/keloladata/update/{{ $item->id_anggota }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="px-6 py-5 space-y-4">
                                            <div>
                                                <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                    Nama Lengkap <span class="text-red-500">*</span>
                                                </label>
                                                <input type="text"
                                                       name="nama_anggota"
                                                       value="{{ $item->nama_anggota }}"
                                                       required
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                            </div>

                                            <div>
                                                <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                    NIM <span class="text-red-500">*</span>
                                                </label>
                                                <input type="text"
                                                       name="nim"
                                                       value="{{ $item->nim }}"
                                                       required
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                            </div>

                                            <div>
                                                <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                    Email <span class="text-red-500">*</span>
                                                </label>
                                                <input type="email"
                                                       name="email"
                                                       value="{{ $item->email }}"
                                                       required
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                            </div>

                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        Tanggal Daftar <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="date"
                                                           name="tanggal_daftar"
                                                           value="{{ $item->tanggal_daftar }}"
                                                           required
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                </div>

                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        Status <span class="text-red-500">*</span>
                                                    </label>
                                                    <select name="status"
                                                            required
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                        <option value="Aktif" {{ $item->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                                        <option value="Tidak Aktif" {{ $item->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex items-center justify-end gap-3 px-6 py-4 bg-gray-50 border-t border-gray-200">
                                            <button type="button"
                                                    data-modal-hide="modal-edit-anggota{{ $item->id_anggota }}"
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
                            <td colspan="6" class="px-6 py-10 text-center text-gray-500">
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

<div id="modal-tambah-anggota" tabindex="-1" aria-hidden="true"
     class="hidden fixed inset-0 z-50 overflow-y-auto overflow-x-hidden justify-center items-center">

    <div class="relative p-4 w-full max-w-lg">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">

            <div class="flex items-center justify-between px-6 py-4 bg-blue-600 text-white">
                <h3 class="text-lg font-bold">Tambah Anggota Baru</h3>

                <button type="button"
                        data-modal-hide="modal-tambah-anggota"
                        class="text-white hover:bg-white/20 rounded-lg p-1.5">
                    ✕
                </button>
            </div>

            <form action="/keloladata/store" method="POST">
                @csrf

                <div class="px-6 py-5 space-y-4">
                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input type="text"
                               name="nama_anggota"
                               value="{{ old('nama_anggota') }}"
                               required
                               placeholder="Masukkan nama lengkap"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>

                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                            NIM <span class="text-red-500">*</span>
                        </label>
                        <input type="text"
                               name="nim"
                               value="{{ old('nim') }}"
                               required
                               placeholder="Masukkan NIM"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>

                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email"
                               name="email"
                               value="{{ old('email') }}"
                               required
                               placeholder="contoh@email.com"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Tanggal Daftar <span class="text-red-500">*</span>
                            </label>
                            <input type="date"
                                   name="tanggal_daftar"
                                   value="{{ old('tanggal_daftar') }}"
                                   required
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>

                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Status <span class="text-red-500">*</span>
                            </label>
                            <select name="status"
                                    required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                <option value="Aktif" selected>Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>

                    <p class="text-xs text-gray-500">
                        <span class="text-red-500">*</span> Semua form wajib diisi.
                    </p>
                </div>

                <div class="flex items-center justify-end gap-3 px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <button type="button"
                            data-modal-hide="modal-tambah-anggota"
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