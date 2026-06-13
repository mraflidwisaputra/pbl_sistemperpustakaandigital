<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Peminjaman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 overflow-x-hidden">

@include('components.sidebar')

<!-- MAIN -->
<main class="ml-[210px] min-h-screen">

    <!-- HEADER -->
    <section class="px-8 pt-7 pb-5">
        <div class="flex items-center justify-between">

            <div>
                <h1 class="text-3xl font-extrabold text-slate-900">
                    Riwayat Peminjaman
                </h1>
                <p class="text-sm text-gray-500 mt-1">
                    Lihat daftar buku yang pernah dan sedang Anda pinjam.
                </p>
            </div>

           <!-- PROFILE + NOTIFIKASI -->
        <div class="absolute top-4 right-4 z-30">
            <div class="flex items-center gap-2 px-3 py-2 bg-white border border-gray-200 rounded-xl shadow-sm w-[205px]">

                <button id="dropdownNotificationButton"
                        data-dropdown-toggle="dropdownNotification"
                        class="relative inline-flex items-center justify-center w-9 h-9 text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-600"
                        type="button">

                    <svg class="w-5 h-5"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor"
                         viewBox="0 0 14 20">
                        <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 8.979 3.9.946.946 0 0 0 9 3.735V2.767a2 2 0 0 0-4 0v.968c0 .056.009.11.021.164a5.406 5.406 0 0 0-3.154 4.933v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4.538 16 1.6 16h10.8c1.062 0 1.6-.6 1.6-1.193 0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z"/>
                    </svg>

                    @if(isset($jumlahNotifikasi) && $jumlahNotifikasi > 0)
                        <span class="absolute -top-2 -right-2 inline-flex items-center justify-center w-5 h-5 text-[10px] font-bold text-white bg-red-500 border-2 border-white rounded-full">
                            {{ $jumlahNotifikasi }}
                        </span>
                    @endif
                </button>

                <!-- DROPDOWN NOTIFIKASI -->
                <div id="dropdownNotification"
                     class="z-50 hidden w-80 max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-gray-100">

                    <div class="block px-4 py-3 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 text-sm">
                        Notifikasi
                    </div>

                    <div class="divide-y divide-gray-100">
                        @forelse($notifikasis ?? [] as $notif)
                            <div class="flex px-4 py-3 hover:bg-gray-100">
                                <div class="w-full">
                                    <div class="text-sm font-semibold text-gray-900">
                                        {{ $notif->judul }}
                                    </div>

                                    <div class="text-xs text-gray-600 mt-1">
                                        {{ $notif->pesan }}
                                    </div>

                                    <div class="text-[11px] mt-1 {{ $notif->status == 'belum_dibaca' ? 'text-red-500' : 'text-gray-400' }}">
                                        {{ $notif->status == 'belum_dibaca' ? 'Belum dibaca' : 'Dibaca' }}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="px-4 py-4 text-sm text-gray-500 text-center">
                                Tidak ada notifikasi.
                            </div>
                        @endforelse
                    </div>
                </div>

                <img src="{{ asset('images/Rafli.jpg') }}"
                     onerror="this.src='https://via.placeholder.com/45?text=User'"
                     class="w-9 h-9 rounded-full object-cover border"
                     alt="Profile">

                <div class="leading-tight">
                    <h5 class="text-xs font-bold text-gray-900">
                        Halo, Sigma
                    </h5>
                    <p class="text-[10px] text-gray-500">
                        Selamat Datang
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="px-8 pb-10">

        @if(session('success'))
            <div class="p-4 mb-5 text-sm text-green-800 rounded-lg bg-green-100 border border-green-300">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="p-4 mb-5 text-sm text-red-800 rounded-lg bg-red-100 border border-red-300">
                {{ session('error') }}
            </div>
        @endif

        <!-- STATISTIK -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 mb-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5">
                <p class="text-sm text-gray-500">Total Peminjaman</p>
                <h2 class="text-3xl font-bold text-gray-900 mt-1">{{ $totalPeminjaman }}</h2>
                <p class="text-xs text-gray-500">Buku</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5">
                <p class="text-sm text-gray-500">Sedang Dipinjam</p>
                <h2 class="text-3xl font-bold text-gray-900 mt-1">{{ $sedangDipinjam }}</h2>
                <p class="text-xs text-gray-500">Buku</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5">
                <p class="text-sm text-gray-500">Terlambat</p>
                <h2 class="text-3xl font-bold text-gray-900 mt-1">{{ $terlambat }}</h2>
                <p class="text-xs text-gray-500">Peminjaman</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5">
                <p class="text-sm text-gray-500">Total Denda</p>
                <h2 class="text-2xl font-bold text-red-600 mt-1">
                    Rp{{ number_format($totalDenda, 0, ',', '.') }}
                </h2>
                <p class="text-xs text-gray-500">Belum Dibayar</p>
            </div>
        </div>

        <!-- TABLE CARD -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5">

            <!-- SEARCH -->
            <form method="GET"
                  action="{{ route('riwayat.peminjaman') }}"
                  class="grid grid-cols-1 lg:grid-cols-[1fr_220px_110px] gap-4 mb-5">

                <input type="text"
                       name="search"
                       value="{{ request('search') }}"
                       placeholder="Cari judul buku atau kode booking..."
                       class="w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">

                <select name="status"
                        class="p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Semua Status</option>
                    <option value="menunggu konfirmasi" {{ request('status') == 'menunggu konfirmasi' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                    <option value="dipinjam" {{ request('status') == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                    <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="terlambat" {{ request('status') == 'terlambat' ? 'selected' : '' }}>Terlambat</option>
                    <option value="buku hilang" {{ request('status') == 'buku hilang' ? 'selected' : '' }}>Buku Hilang</option>
                </select>

                <button type="submit"
                        class="text-white bg-blue-600 hover:bg-blue-700 rounded-lg px-5 py-3 text-sm font-medium">
                    Cari
                </button>
            </form>

            <!-- TABLE -->
            <div class="relative overflow-x-auto rounded-lg border border-gray-200">
                <table class="w-full text-sm text-left text-gray-600">

                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
                        <tr>
                            <th class="px-4 py-4 text-center">No</th>
                            <th class="px-4 py-4">Buku</th>
                            <th class="px-4 py-4 text-center">Kategori</th>
                            <th class="px-4 py-4 text-center">Tanggal Pinjam</th>
                            <th class="px-4 py-4 text-center">Tanggal Kembali</th>
                            <th class="px-4 py-4 text-center">Kode Booking</th>
                            <th class="px-4 py-4 text-center">Denda</th>
                            <th class="px-4 py-4 text-center">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($riwayat as $item)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-4 py-4 text-center font-medium text-gray-900">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="px-4 py-4">
                                    <div class="flex items-center gap-3 min-w-[230px]">
                                        <img src="{{ $item->buku && $item->buku->cover ? asset('uploads/buku/' . $item->buku->cover) : 'https://via.placeholder.com/60x80?text=Book' }}"
                                            class="w-14 h-20 object-cover rounded-lg border" alt="Cover Buku">

                                        <div>
                                            <h4 class="font-bold text-gray-900 leading-tight">
                                                {{ $item->buku->judul ?? '-' }}
                                            </h4>

                                            <p class="text-xs text-gray-500 mt-1">
                                                {{ $item->buku->penulis ?? '-' }}
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-center">
                                    <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700">
                                        {{ $item->buku->kategori->nama_kategori ?? '-' }}
                                    </span>
                                </td>

                                <td class="px-4 py-4 text-center whitespace-nowrap">
                                    {{ $item->tanggal_peminjaman ? \Carbon\Carbon::parse($item->tanggal_peminjaman)->format('d M Y') : '-' }}
                                </td>

                                <td class="px-4 py-4 text-center whitespace-nowrap">
                                    {{ $item->tanggal_pengembalian ? \Carbon\Carbon::parse($item->tanggal_pengembalian)->format('d M Y') : '-' }}
                                </td>

                                <td class="px-4 py-4 text-center">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-gray-100 text-gray-800 text-xs font-semibold">
                                        {{ $item->kode_booking ?? '-' }}
                                    </span>
                                </td>

                                <td class="px-4 py-4 text-center font-semibold text-gray-700 whitespace-nowrap">
                                    Rp{{ number_format($item->denda ?? 0, 0, ',', '.') }}
                                </td>

                                <td class="px-4 py-4 text-center">
                                    @if($item->status == 'menunggu konfirmasi')
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-700">
                                            Menunggu Konfirmasi
                                        </span>
                                    @elseif($item->status == 'dipinjam')
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">
                                            Dipinjam
                                        </span>
                                    @elseif($item->status == 'selesai')
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                            Selesai
                                        </span>
                                    @elseif($item->status == 'terlambat')
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">
                                            Terlambat
                                        </span>
                                    @elseif($item->status == 'buku hilang')
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">
                                            Buku Hilang
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-700">
                                            {{ $item->status ?? '-' }}
                                        </span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-8 text-gray-500">
                                    Riwayat peminjaman belum tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

            <div class="mt-4 text-xs text-gray-500">
                Menampilkan {{ $riwayat->count() }} data peminjaman.
            </div>

        </div>

    </section>

    <!-- FOOTER -->
    @include('components.footer')

</main>

</body>
</html>