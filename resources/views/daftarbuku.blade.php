<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">

    @include('components.sidebarAnggota')

    <div class="main-content">
        @include('components.topbarAnggota', [
            'title' => 'Daftar Buku',
            'subtitle' => 'Cari, pilih, dan ajukan peminjaman buku favoritmu.'
        ])

        <div class="container mx-auto px-4 py-6">
            
            {{-- Alert Messages --}}
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <ul class="list-disc pl-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Filter & Search --}}
            <form method="GET" action="{{ route('daftar.buku') }}" class="flex flex-col md:flex-row gap-4 mb-6">
                <select name="kategori" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Kategori</option>
                    @foreach($kategori as $kat)
                        <option value="{{ $kat->id_kategori }}" {{ request('kategori') == $kat->id_kategori ? 'selected' : '' }}>
                            {{ $kat->nama_kategori }}
                        </option>
                    @endforeach
                </select>
                
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari judul atau penulis..." class="border border-gray-300 rounded-md px-3 py-2 flex-grow focus:outline-none focus:ring-2 focus:ring-blue-500">
                
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">
                    Cari
                </button>
            </form>

            {{-- Kategori Tags --}}
            <div class="flex flex-wrap gap-2 mb-6">
                <a href="{{ route('daftar.buku') }}" class="px-3 py-1 rounded-full text-sm {{ !request('kategori') ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                    Semua
                </a>
                @foreach($kategori as $kat)
                    <a href="{{ route('daftar.buku', ['kategori' => $kat->id_kategori]) }}" class="px-3 py-1 rounded-full text-sm {{ request('kategori') == $kat->id_kategori ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                        {{ $kat->nama_kategori }}
                    </a>
                @endforeach
            </div>

            {{-- Book Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @forelse($buku as $item)
                    <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1 line-clamp-2">{{ $item->judul_buku }}</h3>
                            <p class="text-sm text-gray-600 mb-1">{{ $item->penulis }}</p>
                            <p class="text-xs text-gray-500 mb-3">{{ $item->kategori->nama_kategori ?? 'Tidak Ada Kategori' }}</p>
                            
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-xs font-semibold px-2 py-1 rounded {{ $item->isTersedia() ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $item->isTersedia() ? 'Tersedia' : 'Habis' }}
                                </span>
                                <span class="text-sm font-medium text-gray-700">Stok: {{ $item->stok }}</span>
                            </div>
                        </div>

                        <div class="flex gap-2 mt-auto">
                            @if($item->stok > 0)
                                <button type="button" 
                                    class="btn-pinjam flex-1 bg-blue-600 text-white text-sm py-2 rounded-md hover:bg-blue-700 transition"
                                    data-id="{{ $item->id_buku }}"
                                    data-judul="{{ $item->judul_buku }}"
                                    data-stok="{{ $item->stok }}">
                                    Pinjam Buku
                                </button>
                            @else
                                <button disabled class="flex-1 bg-gray-300 text-gray-500 text-sm py-2 rounded-md cursor-not-allowed">
                                    Tidak Tersedia
                                </button>
                            @endif

                            <button type="button" 
                                class="btn-detail bg-gray-100 text-gray-700 px-3 py-2 rounded-md hover:bg-gray-200 transition"
                                data-id="{{ $item->id_buku }}"
                                data-judul="{{ $item->judul_buku }}"
                                data-penulis="{{ $item->penulis }}"
                                data-kategori="{{ $item->kategori->nama_kategori ?? '-' }}"
                                data-tahun="{{ $item->tahun_rilis ?? '-' }}"
                                data-penerbit="{{ $item->penerbit ?? '-' }}"
                                data-isbn="{{ $item->isbn ?? '-' }}"
                                data-stok="{{ $item->stok }}">
                                Detail
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-10 text-gray-500">
                        Data buku belum tersedia.
                    </div>
                @endforelse
            </div>

            {{-- Pagination Links --}}
            <div class="mt-8">
                {{ $buku->links() }}
            </div>

        </div>
    </div>

    {{-- SINGLE MODAL (Hanya ada 1 modal di seluruh halaman, diisi oleh JavaScript) --}}
    <div id="bookModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md overflow-hidden">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 id="modalTitle" class="text-lg font-bold text-gray-800">Detail Buku</h3>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700 text-2xl leading-none">&times;</button>
            </div>
            
            <div class="p-4">
                <!-- Tampilan Detail -->
                <div id="detailView" class="space-y-2 text-sm text-gray-700">
                    <p><span class="font-semibold">Judul:</span> <span id="m-judul"></span></p>
                    <p><span class="font-semibold">Penulis:</span> <span id="m-penulis"></span></p>
                    <p><span class="font-semibold">Kategori:</span> <span id="m-kategori"></span></p>
                    <p><span class="font-semibold">Tahun Rilis:</span> <span id="m-tahun"></span></p>
                    <p><span class="font-semibold">Penerbit:</span> <span id="m-penerbit"></span></p>
                    <p><span class="font-semibold">ISBN:</span> <span id="m-isbn"></span></p>
                    <p><span class="font-semibold">Stok Tersedia:</span> <span id="m-stok" class="font-bold text-blue-600"></span></p>
                </div>

                <!-- Tampilan Form Pinjam (Awalnya disembunyikan) -->
                <div id="pinjamView" class="hidden">
                    <form action="{{ route('buku.pinjam') }}" method="POST" id="formPinjam">
                        @csrf
                        <input type="hidden" name="id_buku" id="m-id-buku">
                        
                        <p class="font-semibold mb-2">Ajukan Peminjaman: <span id="m-judul-pinjam" class="text-blue-600"></span></p>
                        
                        <div class="mb-3">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_pinjam" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Pengembalian</label>
                            <input type="date" name="tanggal_kembali" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>

                        <p class="text-xs text-gray-500 mb-4">*Setelah diajukan, data peminjaman akan masuk ke halaman admin untuk dikonfirmasi.</p>
                        
                        <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-md hover:bg-green-700 transition font-semibold">
                            Konfirmasi Peminjaman
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="p-4 border-t bg-gray-50 flex justify-end gap-2" id="modalActions">
                <button id="btnShowPinjam" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition text-sm hidden">
                    Lanjut Pinjam
                </button>
                <button id="btnShowDetail" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300 transition text-sm hidden">
                    Kembali ke Detail
                </button>
            </div this>
        </div>
    </div>

    {{-- JavaScript untuk Mengelola Single Modal --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('bookModal');
            const closeModal = document.getElementById('closeModal');
            const detailView = document.getElementById('detailView');
            const pinjamView = document.getElementById('pinjamView');
            const btnShowPinjam = document.getElementById('btnShowPinjam');
            const btnShowDetail = document.getElementById('btnShowDetail');

            // Fungsi untuk membuka modal dan mengisi data
            function openModal(type, button) {
                const id = button.getAttribute('data-id');
                const judul = button.getAttribute('data-judul');
                const penulis = button.getAttribute('data-penulis');
                const kategori = button.getAttribute('data-kategori');
                const tahun = button.getAttribute('data-tahun');
                const penerbit = button.getAttribute('data-penerbit');
                const isbn = button.getAttribute('data-isbn');
                const stok = button.getAttribute('data-stok');

                // Isi data ke elemen modal
                document.getElementById('m-judul').textContent = judul;
                document.getElementById('m-penulis').textContent = penulis;
                document.getElementById('m-kategori').textContent = kategori;
                document.getElementById('m-tahun').textContent = tahun;
                document.getElementById('m-penerbit').textContent = penerbit;
                document.getElementById('m-isbn').textContent = isbn;
                document.getElementById('m-stok').textContent = stok;
                
                // Untuk form pinjam
                document.getElementById('m-id-buku').value = id;
                document.getElementById('m-judul-pinjam').textContent = judul;

                // Reset tampilan ke detail
                detailView.classList.remove('hidden');
                pinjamView.classList.add('hidden');
                btnShowPinjam.classList.remove('hidden');
                btnShowDetail.classList.add('hidden');

                // Jika tombol yang diklik adalah "Pinjam", langsung tampilkan form
                if (type === 'pinjam') {
                    detailView.classList.add('hidden');
                    pinjamView.classList.remove('hidden');
                    btnShowPinjam.classList.add('hidden');
                    btnShowDetail.classList.remove('hidden');
                }

                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            // Event Listener untuk tombol Detail
            document.querySelectorAll('.btn-detail').forEach(btn => {
                btn.addEventListener('click', function() {
                    openModal('detail', this);
                });
            });

            // Event Listener untuk tombol Pinjam
            document.querySelectorAll('.btn-pinjam').forEach(btn => {
                btn.addEventListener('click', function() {
                    openModal('pinjam', this);
                });
            });

            // Tutup modal
            closeModal.addEventListener('click', () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            });

            // Tutup modal jika klik di luar area konten
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            });

            // Toggle antara Detail dan Form Pinjam di dalam modal
            btnShowPinjam.addEventListener('click', () => {
                detailView.classList.add('hidden');
                pinjamView.classList.remove('hidden');
                btnShowPinjam.classList.add('hidden');
                btnShowDetail.classList.remove('hidden');
            });

            btnShowDetail.addEventListener('click', () => {
                pinjamView.classList.add('hidden');
                detailView.classList.remove('hidden');
                btnShowDetail.classList.add('hidden');
                btnShowPinjam.classList.remove('hidden');
            });
        });
    </script>
</body>
</html>