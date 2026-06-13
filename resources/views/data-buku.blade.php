<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - Perpustakaan</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-[#f4f7fb] font-sans">

@include('components.sidebarAdmin')

<div class="ml-64 min-h-screen">

    @include('components.topbarAdmin', ['title' => 'Data Buku'])

    <main class="px-8 pb-10">

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Kelola Data Buku</h2>
                    <p class="text-gray-500 mt-1">Tambah, edit, hapus, dan cari data buku perpustakaan.</p>
                </div>

                <button data-modal-target="modal-tambah-buku" data-modal-toggle="modal-tambah-buku"
                        class="mt-4 sm:mt-0 px-5 py-3 text-white bg-blue-600 rounded-xl font-semibold hover:bg-blue-700 transition shadow">
                    <i class="fa-solid fa-plus mr-2"></i>
                    Tambah Buku
                </button>
            </div>

            @if(session('success'))
                <div class="mb-4 p-4 text-sm text-green-800 rounded-lg bg-green-100">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-4 p-4 text-sm text-red-800 rounded-lg bg-red-100">
                    <ul class="list-disc ml-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/data-buku" method="GET" class="mb-6">
                <div class="flex flex-col md:flex-row gap-3">
                    <input type="text"
                           name="search"
                           value="{{ request('search') }}"
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 text-sm"
                           placeholder="Cari judul, penulis, penerbit, ISBN, atau tahun rilis...">

                    <button type="submit"
                            class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition shadow">
                        <i class="fa-solid fa-magnifying-glass mr-2"></i>
                        Cari
                    </button>

                    <a href="/data-buku"
                       class="px-6 py-3 bg-gray-500 text-white font-semibold rounded-xl hover:bg-gray-600 transition shadow text-center">
                        Reset
                    </a>
                </div>
            </form>

            <div class="relative overflow-x-auto rounded-xl border border-gray-200">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs uppercase bg-gray-50 text-gray-700">
                    <tr>
                        <th class="px-6 py-5 text-center">No</th>
                        <th class="px-6 py-5 text-center">Cover</th>
                        <th class="px-6 py-5">Judul Buku</th>
                        <th class="px-6 py-5">Penulis</th>
                        <th class="px-6 py-5">Tahun</th>
                        <th class="px-6 py-5">Penerbit</th>
                        <th class="px-6 py-5">ISBN</th>
                        <th class="px-6 py-5">Kategori</th>
                        <th class="px-6 py-5 text-center">Stok</th>
                        <th class="px-6 py-5 text-center">Aksi</th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                    @forelse($buku as $item)
                        <tr class="bg-white hover:bg-gray-50 transition">
                            <td class="px-6 py-5 text-center font-semibold text-gray-900">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-5 text-center">
                                <div class="w-16 h-24 bg-gray-100 rounded-lg mx-auto overflow-hidden border border-gray-200">
                                    @if($item->cover)
                                        <img src="{{ asset('storage/'.$item->cover) }}"
                                             alt="{{ $item->judul_buku }}"
                                             class="w-full h-full object-cover">
                                    @else
                                        <div class="flex items-center justify-center w-full h-full text-gray-400 text-xs">
                                            No Cover
                                        </div>
                                    @endif
                                </div>
                            </td>

                            <td class="px-6 py-5 font-bold text-gray-900">
                                {{ $item->judul_buku }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->penulis }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->tahun_rilis }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->penerbit }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->isbn }}
                            </td>

                            <td class="px-6 py-5">
                                {{ $item->nama_kategori ?? 'Tidak Ada Kategori' }}
                            </td>

                            <td class="px-6 py-5 text-center">
                                <span class="bg-blue-100 text-blue-700 text-xs font-bold px-4 py-2 rounded-full">
                                    {{ $item->stok }}
                                </span>
                            </td>

                            <td class="px-6 py-5 text-center">
                                <div class="flex items-center justify-center gap-2">

                                    <button data-modal-target="modal-edit-buku{{ $item->id_buku }}"
                                            data-modal-toggle="modal-edit-buku{{ $item->id_buku }}"
                                            class="px-3 py-2 text-xs font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                        Edit
                                    </button>

                                    <form action="/data-buku/delete/{{ $item->id_buku }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="px-3 py-2 text-xs font-semibold text-white bg-red-500 rounded-lg hover:bg-red-600">
                                            Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                        <div id="modal-edit-buku{{ $item->id_buku }}" tabindex="-1" aria-hidden="true"
                             class="hidden fixed inset-0 z-50 overflow-y-auto overflow-x-hidden justify-center items-center">

                            <div class="relative p-4 w-full max-w-2xl">
                                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">

                                    <div class="flex items-center justify-between px-6 py-4 bg-blue-600 text-white">
                                        <h3 class="text-lg font-bold">Edit Buku</h3>

                                        <button type="button"
                                                data-modal-hide="modal-edit-buku{{ $item->id_buku }}"
                                                class="text-white hover:bg-white/20 rounded-lg p-1.5">
                                            ✕
                                        </button>
                                    </div>

                                    <form action="/data-buku/update/{{ $item->id_buku }}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="px-6 py-5 space-y-4">

                                            <div>
                                                <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                    Judul Buku <span class="text-red-500">*</span>
                                                </label>
                                                <input type="text" name="judul_buku" value="{{ $item->judul_buku }}" required
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                            </div>

                                            <div>
                                                <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                    Penulis <span class="text-red-500">*</span>
                                                </label>
                                                <input type="text" name="penulis" value="{{ $item->penulis }}" required
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                            </div>

                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        Tahun Rilis <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="number" name="tahun_rilis" value="{{ $item->tahun_rilis }}" required min="1900" max="{{ date('Y') }}"
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                </div>

                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        Penerbit <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="text" name="penerbit" value="{{ $item->penerbit }}" required
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                </div>

                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        ISBN <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="text" name="isbn" value="{{ $item->isbn }}" required
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        Kategori <span class="text-red-500">*</span>
                                                    </label>
                                                    <select name="id_kategori" required
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                        <option value="">Pilih Kategori</option>
                                                        @foreach($kategori as $kat)
                                                            <option value="{{ $kat->id_kategori }}"
                                                                {{ $item->id_kategori == $kat->id_kategori ? 'selected' : '' }}>
                                                                {{ $kat->nama_kategori }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div>
                                                    <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                        Stok <span class="text-red-500">*</span>
                                                    </label>
                                                    <input type="number" name="stok" value="{{ $item->stok }}" required min="0"
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                                </div>
                                            </div>

                                            <div>
                                                <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                                    Cover Buku
                                                </label>
                                                <input type="file" name="cover" accept=".jpg"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                            </div>

                                            <p class="text-xs text-gray-500">
                                                <span class="text-red-500">*</span> Semua form wajib diisi. Cover boleh dikosongkan jika tidak ingin mengganti gambar.
                                            </p>

                                        </div>

                                        <div class="flex items-center justify-end gap-3 px-6 py-4 bg-gray-50 border-t border-gray-200">
                                            <button type="button" data-modal-hide="modal-edit-buku{{ $item->id_buku }}"
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
                            <td colspan="10" class="px-6 py-10 text-center text-gray-500">
                                Data buku masih kosong.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </main>
</div>

<div id="modal-tambah-buku" tabindex="-1" aria-hidden="true"
     class="hidden fixed inset-0 z-50 overflow-y-auto overflow-x-hidden justify-center items-center">

    <div class="relative p-4 w-full max-w-2xl">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">

            <div class="flex items-center justify-between px-6 py-4 bg-blue-600 text-white">
                <h3 class="text-lg font-bold">Tambah Buku Baru</h3>

                <button type="button"
                        data-modal-hide="modal-tambah-buku"
                        class="text-white hover:bg-white/20 rounded-lg p-1.5">
                    ✕
                </button>
            </div>

            <form action="/data-buku/store" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="px-6 py-5 space-y-4">

                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Judul Buku <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="judul_buku" value="{{ old('judul_buku') }}" required
                               placeholder="Masukkan judul buku"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>

                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Penulis <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="penulis" value="{{ old('penulis') }}" required
                               placeholder="Nama penulis"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Tahun Rilis <span class="text-red-500">*</span>
                            </label>
                            <input type="number" name="tahun_rilis" value="{{ old('tahun_rilis') }}" required min="1900" max="{{ date('Y') }}"
                                   placeholder="Contoh: 2024"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>

                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Penerbit <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="penerbit" value="{{ old('penerbit') }}" required
                                   placeholder="Nama penerbit"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>

                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                ISBN <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="isbn" value="{{ old('isbn') }}" required
                                   placeholder="Nomor ISBN"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Kategori <span class="text-red-500">*</span>
                            </label>
                            <select name="id_kategori" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                <option value="">Pilih Kategori</option>
                                @foreach($kategori as $kat)
                                    <option value="{{ $kat->id_kategori }}">
                                        {{ $kat->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                                Stok <span class="text-red-500">*</span>
                            </label>
                            <input type="number" name="stok" value="{{ old('stok') }}" required min="0"
                                   placeholder="Jumlah"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                    </div>

                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-gray-700">
                            Cover Buku <span class="text-red-500">*</span>
                        </label>
                        <input type="file" name="cover" accept=".jpg"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>

                    <p class="text-xs text-gray-500">
                        <span class="text-red-500">*</span> Cover hanya boleh format JPG dengan ukuran maksimal 5 MB.
                    </p>

                </div>

                <div class="flex items-center justify-end gap-3 px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <button type="button"
                            data-modal-hide="modal-tambah-buku"
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