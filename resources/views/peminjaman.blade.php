<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman - Perpustakaan</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-[#f4f7fb] font-sans">

@include('components.sidebarAdmin')

<div class="ml-64 min-h-screen">

    @include('components.topbarAdmin', ['title' => 'Data Peminjaman'])

    <main class="px-8 pb-10">

        @if(session('success'))
            <div class="mb-6 p-5 rounded-xl bg-green-100 border border-green-300 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="mb-6 p-5 rounded-xl bg-red-100 border border-red-300 text-red-700">
                {{ session('error') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Total Peminjaman</p>
                <h2 class="text-4xl font-extrabold text-slate-900">{{ $peminjaman->count() }}</h2>
                <p class="text-gray-500 mt-1">Buku</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Menunggu Konfirmasi</p>
                <h2 class="text-4xl font-extrabold text-yellow-600">
                    {{ $peminjaman->where('status', 'Menunggu Konfirmasi')->count() }}
                </h2>
                <p class="text-gray-500 mt-1">Booking Buku</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Sedang Dipinjam</p>
                <h2 class="text-4xl font-extrabold text-blue-600">
                    {{ $peminjaman->where('status', 'Dipinjam')->count() }}
                </h2>
                <p class="text-gray-500 mt-1">Buku</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <p class="text-gray-500 text-lg mb-3">Selesai</p>
                <h2 class="text-4xl font-extrabold text-green-600">
                    {{ $peminjaman->where('status', 'Selesai')->count() }}
                </h2>
                <p class="text-gray-500 mt-1">Dikembalikan</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

            <form action="/peminjaman" method="GET" class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-6">
                <div class="md:col-span-7">
                    <input type="text" name="search" value="{{ request('search') }}"
                           class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-xl focus:ring-blue-500 focus:border-blue-500 p-4"
                           placeholder="Cari code booking, nama, email, judul buku, kategori, penerbit, atau ISBN...">
                </div>

                <div class="md:col-span-3">
                    <select name="status"
                            class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-xl focus:ring-blue-500 focus:border-blue-500 p-4">
                        <option value="">Semua Status</option>
                        <option value="Menunggu Konfirmasi" {{ request('status') == 'Menunggu Konfirmasi' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                        <option value="Dipinjam" {{ request('status') == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                        <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        <option value="Terlambat" {{ request('status') == 'Terlambat' ? 'selected' : '' }}>Terlambat</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <button type="submit"
                            class="w-full h-full bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl px-6 py-4">
                        Cari
                    </button>
                </div>
            </form>

            <div class="relative overflow-x-auto rounded-xl border border-gray-200">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs uppercase bg-gray-50 text-gray-700">
                    <tr>
                        <th class="px-6 py-5 text-center">No</th>
                        <th class="px-6 py-5">Code Booking</th>
                        <th class="px-6 py-5">Peminjam</th>
                        <th class="px-6 py-5">Judul Buku</th>
                        <th class="px-6 py-5">Kategori</th>
                        <th class="px-6 py-5 text-center">Tahun Rilis</th>
                        <th class="px-6 py-5">Penerbit</th>
                        <th class="px-6 py-5">ISBN</th>
                        <th class="px-6 py-5 text-center">Tanggal Pinjam</th>
                        <th class="px-6 py-5 text-center">Tanggal Kembali</th>
                        <th class="px-6 py-5 text-center">Status</th>
                        <th class="px-6 py-5 text-center">Aksi</th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                    @forelse($peminjaman as $item)
                        <tr class="bg-white hover:bg-gray-50 transition">
                            <td class="px-6 py-5 text-center font-semibold text-gray-900">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-5">
                                <span class="bg-slate-100 text-slate-700 text-xs font-bold px-3 py-2 rounded-lg">
                                    {{ $item->code_booking ?? '-' }}
                                </span>
                            </td>

                            <td class="px-6 py-5">
                                <div class="font-bold text-gray-900">{{ $item->nama_anggota }}</div>
                                <div class="text-xs text-gray-500">{{ $item->email }}</div>
                            </td>

                            <td class="px-6 py-5 font-bold text-gray-900">{{ $item->judul_buku }}</td>

                            <td class="px-6 py-5">
                                <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">
                                    {{ $item->nama_kategori ?? 'Tidak Ada Kategori' }}
                                </span>
                            </td>

                            <td class="px-6 py-5 text-center">{{ $item->tahun_rilis ?? '-' }}</td>
                            <td class="px-6 py-5">{{ $item->penerbit ?? '-' }}</td>
                            <td class="px-6 py-5">{{ $item->isbn ?? '-' }}</td>
                            <td class="px-6 py-5 text-center">{{ $item->tanggal_pinjam ?? '-' }}</td>
                            <td class="px-6 py-5 text-center">{{ $item->tanggal_kembali ?? '-' }}</td>

                            <td class="px-6 py-5 text-center">
                                @if($item->status == 'Menunggu Konfirmasi')
                                    <span class="bg-yellow-100 text-yellow-700 text-xs font-bold px-4 py-2 rounded-full">
                                        Menunggu
                                    </span>
                                @elseif($item->status == 'Dipinjam')
                                    <span class="bg-blue-100 text-blue-700 text-xs font-bold px-4 py-2 rounded-full">
                                        Dipinjam
                                    </span>
                                @elseif($item->status == 'Selesai')
                                    <span class="bg-green-100 text-green-700 text-xs font-bold px-4 py-2 rounded-full">
                                        Selesai
                                    </span>
                                @else
                                    <span class="bg-red-100 text-red-700 text-xs font-bold px-4 py-2 rounded-full">
                                        Terlambat
                                    </span>
                                @endif
                            </td>

                            <td class="px-6 py-5 text-center">
                                @if($item->status == 'Menunggu Konfirmasi')
                                    <form action="/peminjaman/konfirmasi/{{ $item->id_peminjaman }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin mengonfirmasi peminjaman ini?')">
                                        @csrf
                                        @method('PUT')

                                        <button type="submit"
                                                class="px-4 py-2 text-xs font-bold text-white bg-green-600 rounded-lg hover:bg-green-700 transition">
                                            Konfirmasi
                                        </button>
                                    </form>
                                @else
                                    <span class="text-xs text-gray-400">Tidak ada aksi</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12" class="px-6 py-10 text-center text-gray-500">
                                Tidak ada riwayat peminjaman buku.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>