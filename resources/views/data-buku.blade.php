<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - Perpustakaan</title>

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
                <h2 class="text-xl font-bold text-slate-900">Kelola Data Buku</h2>
                <p class="text-gray-500 mt-1 text-sm">
                    Tambah, edit, hapus, dan cari data buku perpustakaan.
                </p>
            </div>

            <button data-modal-target="modal-tambah-buku"
                    data-modal-toggle="modal-tambah-buku"
                    class="mt-3 sm:mt-0 px-3 py-2 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 transition shadow text-sm">
                <i class="fa-solid fa-plus mr-1"></i>
                Tambah Buku
            </button>
        </div>

        <!-- ALERT -->
        @include('components.notification')

        <!-- SEARCH -->
        <form action="/data-buku" method="GET" class="mb-3">
            <div class="flex items-center gap-2">

                <input type="text"
                       name="search"
                       value="{{ request('search') }}"
                       class="flex-1 h-10 px-3 text-sm bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-100 focus:border-blue-500"
                       placeholder="Cari judul, penulis, penerbit, ISBN, atau tahun terbit...">

                <button type="submit"
                        class="h-10 px-4 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700 transition">
                    <i class="fa-solid fa-magnifying-glass mr-1"></i>
                    Cari
                </button>

                <a href="/data-buku"
                   class="h-10 px-4 flex items-center justify-center bg-gray-500 text-white text-sm font-semibold rounded-lg hover:bg-gray-600 transition">
                    Reset
                </a>

            </div>
        </form>

        <!-- TABLE -->
        <div class="rounded-lg border border-gray-200 overflow-hidden">
            <table class="w-full table-fixed text-[11px] text-left text-gray-600">
                <thead class="bg-gray-50 text-gray-700 uppercase">
                <tr>
                    <th class="px-2 py-2 text-center w-[35px]">No</th>
                    <th class="px-2 py-2 text-center w-[50px]">Cover</th>
                    <th class="px-2 py-2 w-[150px]">Judul</th>
                    <th class="px-2 py-2 w-[100px]">Penulis</th>
                    <th class="px-2 py-2 w-[55px]">Tahun</th>
                    <th class="px-2 py-2 w-[100px]">Penerbit</th>
                    <th class="px-2 py-2 w-[90px]">ISBN</th>
                    <th class="px-2 py-2 w-[95px]">Kategori</th>
                    <th class="px-2 py-2 text-center w-[45px]">Stok</th>
                    <th class="px-2 py-2 text-center w-[90px]">Denda</th>
                    <th class="px-2 py-2 text-center w-[70px]">Status</th>
                    <th class="px-2 py-2 text-center w-[85px]">Aksi</th>
                </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                @forelse($buku as $item)
                    <tr class="bg-white hover:bg-gray-50 transition">

                        <td class="px-2 py-2 text-center font-semibold text-gray-900">
                            {{ $loop->iteration }}
                        </td>

                        <td class="px-2 py-2 text-center">
                            <div class="w-8 h-11 bg-gray-100 rounded-md mx-auto overflow-hidden border border-gray-200">
                                @if($item->cover)
                                    <img src="{{ asset('storage/'.$item->cover) }}"
                                         alt="{{ $item->judul }}"
                                         class="w-full h-full object-cover">
                                @else
                                    <div class="flex items-center justify-center w-full h-full text-gray-400 text-[9px] leading-tight">
                                        No<br>Cover
                                    </div>
                                @endif
                            </div>
                        </td>

                        <td class="px-2 py-2 font-semibold text-gray-900 truncate">
                            {{ $item->judul }}
                        </td>

                        <td class="px-2 py-2 truncate">
                            {{ $item->penulis }}
                        </td>

                        <td class="px-2 py-2 truncate">
                            {{ $item->tahun_terbit ?? '-' }}
                        </td>

                        <td class="px-2 py-2 truncate">
                            {{ $item->penerbit ?? '-' }}
                        </td>

                        <td class="px-2 py-2 truncate">
                            {{ $item->isbn ?? '-' }}
                        </td>

                        <td class="px-2 py-2 truncate">
                            {{ $item->kategori->nama_kategori ?? 'Tidak Ada' }}
                        </td>

                        <td class="px-2 py-2 text-center">
                            <span class="bg-blue-100 text-blue-700 text-[10px] font-bold px-2 py-1 rounded-full">
                                {{ $item->stok }}
                            </span>
                        </td>

                        <td class="px-2 py-2 text-center text-[10px] font-semibold text-red-600">
                            Rp{{ number_format($item->denda_hilang ?? 50000,0,',','.') }}
                        </td>

                        <td class="px-2 py-2 text-center">
                            @if($item->stok <= 0)
                                <span class="bg-red-100 text-red-700 text-[10px] font-bold px-2 py-1 rounded-full">
                                    Habis
                                </span>
                            @elseif($item->status == 'Tersedia')
                                <span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-1 rounded-full">
                                    Tersedia
                                </span>
                            @else
                                <span class="bg-yellow-100 text-yellow-700 text-[10px] font-bold px-2 py-1 rounded-full">
                                    Dipinjam
                                </span>
                            @endif
                        </td>

                        <td class="px-2 py-2 text-center">
                            <div class="flex items-center justify-center gap-1">

                                <button data-modal-target="modal-edit-buku{{ $item->id }}"
                                        data-modal-toggle="modal-edit-buku{{ $item->id }}"
                                        class="px-2 py-1 text-[10px] font-semibold text-white bg-blue-600 rounded hover:bg-blue-700">
                                    Edit
                                </button>

                                <form action="{{ route('data-buku.destroy', $item->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="px-2 py-1 text-[10px] font-semibold text-white bg-red-500 rounded hover:bg-red-600">
                                        Hapus
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>

                    <!-- MODAL EDIT -->
                    <div id="modal-edit-buku{{ $item->id }}"
                         tabindex="-1"
                         aria-hidden="true"
                         class="hidden fixed inset-0 z-50 overflow-y-auto overflow-x-hidden justify-center items-center">

                        <div class="relative p-4 w-full max-w-4xl">
                            <div class="bg-white rounded-xl shadow-2xl overflow-hidden">

                                <div class="flex items-center justify-between px-5 py-3 bg-blue-600 text-white">
                                    <h3 class="text-base font-bold">Edit Buku</h3>

                                    <button type="button"
                                            data-modal-hide="modal-edit-buku{{ $item->id }}"
                                            class="text-white hover:bg-white/20 rounded-lg p-1.5">
                                        ✕
                                    </button>
                                </div>

                                <form action="/data-buku/update/{{ $item->id }}"
                                      method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="px-5 py-4 space-y-3">

                                        <div>
                                            <label class="block mb-1 text-sm font-semibold text-gray-700">
                                                Judul Buku <span class="text-red-500">*</span>
                                            </label>
                                            <input type="text"
                                                   name="judul"
                                                   value="{{ old('judul', $item->judul) }}"
                                                   required
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2">
                                        </div>

                                        <div>
                                            <label class="block mb-1 text-sm font-semibold text-gray-700">
                                                Penulis <span class="text-red-500">*</span>
                                            </label>
                                            <input type="text"
                                                   name="penulis"
                                                   value="{{ old('penulis', $item->penulis) }}"
                                                   required
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2">
                                        </div>

                                        <div class="grid grid-cols-4 gap-3">
                                            <div>
                                                <label class="block mb-1 text-sm font-semibold text-gray-700">
                                                    Tahun Terbit
                                                </label>
                                                <input type="number"
                                                       name="tahun_terbit"
                                                       value="{{ old('tahun_terbit', $item->tahun_terbit) }}"
                                                       min="1900"
                                                       max="{{ date('Y') }}"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2">
                                            </div>

                                            <div>
                                                <label class="block mb-1 text-sm font-semibold text-gray-700">
                                                    Penerbit
                                                </label>
                                                <input type="text"
                                                       name="penerbit"
                                                       value="{{ old('penerbit', $item->penerbit) }}"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2">
                                            </div>

                                            <div>
                                                <label class="block mb-1 text-sm font-semibold text-gray-700">
                                                    ISBN
                                                </label>
                                                <input type="text"
                                                       name="isbn"
                                                       value="{{ old('isbn', $item->isbn) }}"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2">
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-3 gap-3">
                                            <div>
                                                <label class="block mb-1 text-sm font-semibold text-gray-700">
                                                    Kategori
                                                </label>
                                                <select name="kategori_id"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2">
                                                    <option value="">Pilih Kategori</option>
                                                    @foreach($kategori as $kat)
                                                        <option value="{{ $kat->id }}"
                                                            {{ old('kategori_id', $item->kategori_id) == $kat->id ? 'selected' : '' }}>
                                                            {{ $kat->nama_kategori }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div>
                                                <label class="block mb-1 text-sm font-semibold text-gray-700">
                                                    Stok <span class="text-red-500">*</span>
                                                </label>
                                                <input type="number"
                                                       name="stok"
                                                       value="{{ old('stok', $item->stok) }}"
                                                       required
                                                       min="0"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2">
                                            </div>
                                           <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-700">Denda Hilang</label>
                            <input type="number" name="denda_hilang" value="{{ old('denda_hilang',50000) }}" min="0" placeholder="Rp 50000"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2.5">
                            </div>
                        </div>

                                        <div>
                                            <label class="block mb-1 text-sm font-semibold text-gray-700">
                                                Cover Buku
                                            </label>
                                            <input type="file"
                                                   name="cover"
                                                   accept=".jpg,.jpeg,.png"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2">
                                        </div>

                                        <p class="text-xs text-gray-500">
                                            Cover boleh dikosongkan jika tidak ingin mengganti gambar.
                                        </p>

                                    </div>

                                    <div class="flex items-center justify-end gap-3 px-5 py-3 bg-gray-50 border-t border-gray-200">
                                        <button type="button"
                                                data-modal-hide="modal-edit-buku{{ $item->id }}"
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
                        <td colspan="11" class="px-4 py-8 text-center text-gray-500">
                            Data buku masih kosong.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if(method_exists($buku, 'links'))
            <div class="mt-4">
                {{ $buku->links() }}
            </div>
        @endif

    </div>
</main>

</div>

<!-- MODAL TAMBAH (REVISI TANPA BLUR) -->
<div id="modal-tambah-buku"
     tabindex="-1"
     aria-hidden="true"
     class="hidden fixed inset-0 z-50 flex justify-center items-center overflow-y-auto overflow-x-hidden bg-gray-900/50">

    <div class="relative p-4 w-full max-w-2xl">
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden flex flex-col max-h-[90vh]">

            <div class="flex items-center justify-between px-5 py-4 bg-blue-600 text-white shrink-0">
                <h3 class="text-base font-bold">Tambah Buku Baru</h3>
                <button type="button"
                        data-modal-hide="modal-tambah-buku"
                        class="text-white hover:bg-white/20 rounded-lg p-1.5 transition">
                    ✕
                </button>
            </div>

            <form action="/data-buku/store" method="POST" enctype="multipart/form-data" class="flex flex-col overflow-hidden">
                @csrf

                <div class="px-5 py-5 space-y-4 overflow-y-auto custom-scrollbar">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-700">
                                Judul Buku <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="judul" value="{{ old('judul') }}" required placeholder="Masukkan judul buku"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition">
                        </div>

                        <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-700">
                                Penulis <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="penulis" value="{{ old('penulis') }}" required placeholder="Nama penulis"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 transition">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-700">Tahun Terbit</label>
                            <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}" min="1900" max="{{ date('Y') }}" placeholder="2024"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2.5">
                        </div>

                        <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-700">Penerbit</label>
                            <input type="text" name="penerbit" value="{{ old('penerbit') }}" placeholder="Nama penerbit"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2.5">
                        </div>

                        <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-700">ISBN</label>
                            <input type="text" name="isbn" value="{{ old('isbn') }}" placeholder="Nomor ISBN"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2.5">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-700">Kategori</label>
                            <select name="kategori_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2.5">
                                <option value="">Pilih Kategori</option>
                                @foreach($kategori as $kat)
                                    <option value="{{ $kat->id }}" {{ old('kategori_id') == $kat->id ? 'selected' : '' }}>
                                        {{ $kat->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-700">
                                Stok <span class="text-red-500">*</span>
                            </label>
                            <input type="number" name="stok" value="{{ old('stok') }}" required min="0" placeholder="Jumlah"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2.5">
                        </div>

                        <div>
                            <label class="block mb-1 text-sm font-semibold text-gray-700">Denda Hilang</label>
                            <input type="number" name="denda_hilang" value="{{ old('denda_hilang',50000) }}" min="0" placeholder="Rp 50000"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 block w-full p-2.5">
                        </div>
                    </div>

                    <div class="p-3 bg-blue-50/50 border border-blue-100 rounded-lg">
                        <label class="block mb-1 text-sm font-semibold text-gray-700">Cover Buku</label>
                        <input type="file" name="cover" accept=".jpg,.jpeg,.png"
                               class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 transition">
                        <p class="mt-1 text-xs text-gray-500">
                            Format JPG, JPEG, atau PNG. Maksimal 5 MB.
                        </p>
                    </div>

                </div>

                <div class="flex items-center justify-end gap-3 px-5 py-4 bg-gray-50 border-t border-gray-200 shrink-0">
                    <button type="button"
                            data-modal-hide="modal-tambah-buku"
                            class="px-4 py-2 text-sm font-semibold text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition shadow-sm">
                        Batal
                    </button>

                    <button type="submit"
                            class="px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition shadow-sm">
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
