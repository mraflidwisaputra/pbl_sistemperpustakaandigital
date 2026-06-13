<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 overflow-x-hidden">

@include('components.sidebar')

<!-- MAIN -->
<main class="ml-[210px] min-h-screen bg-slate-100 flex flex-col">

    <!-- CONTENT -->
    <div class="flex-1 px-10 py-10">

        <section class="max-w-5xl mx-auto text-center pb-10">

            <!-- JUDUL -->
            <h1 class="text-3xl font-extrabold text-gray-900 mb-8">
                TENTANG KAMI
            </h1>

            <!-- DESKRIPSI -->
            <p class="text-xl leading-relaxed text-gray-900 mb-12">
                Perpustakaan Digital adalah platform yang dirancang untuk
                mempermudah akses informasi dan literasi bagi seluruh pengguna.
                Dengan memanfaatkan teknologi, kami menghadirkan sistem
                perpustakaan yang modern, praktis, dan efisien tanpa harus
                datang langsung ke lokasi.
            </p>

            <!-- VISI -->
            <div class="text-left bg-blue-500 border border-gray-900 rounded-xl p-6 mb-10 shadow-md">
                <h2 class="text-2xl font-semibold text-black mb-3">
                    Visi
                </h2>

                <p class="text-xl text-black leading-relaxed">
                    Menjadi platform perpustakaan digital yang inovatif,
                    mudah diakses, dan mampu mendukung peningkatan minat
                    baca serta kualitas pembelajaran di era digital.
                </p>
            </div>

            <!-- MISI -->
            <div class="text-left bg-blue-500 border border-gray-900 rounded-xl p-6 mb-20 shadow-md">
                <h2 class="text-2xl font-semibold text-black mb-3">
                    Misi
                </h2>

                <ul class="list-disc ml-8 text-xl text-black leading-relaxed space-y-2">
                    <li>
                        Menyediakan akses buku secara online dengan mudah dan cepat.
                    </li>

                    <li>
                        Meningkatkan efisiensi proses peminjaman dan pengembalian buku.
                    </li>

                    <li>
                        Mengurangi keterlambatan dan kehilangan buku melalui sistem terintegrasi.
                    </li>

                    <li>
                        Mendukung kegiatan belajar dengan koleksi buku yang beragam dan up-to-date.
                    </li>
                </ul>
            </div>

            <!-- TIM -->
            <h2 class="text-2xl font-semibold text-gray-900 mb-12">
                Tim Pengembang
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-10 gap-y-14">

                @foreach($tim as $anggota)

                <div class="flex flex-col items-center">

                    <img src="{{ asset('images/' . $anggota['foto']) }}"
                         alt="{{ $anggota['nama'] }}"
                         class="w-32 h-32 rounded-full object-cover border-4 border-blue-500 shadow-lg">

                    <div class="mt-4 text-center">

                        <h3 class="font-semibold text-lg text-gray-900">
                            {{ $anggota['nama'] }}
                        </h3>

                        <p class="text-sm text-gray-500">
                            {{ $anggota['nim'] }}
                        </p>

                    </div>

                </div>

                @endforeach

            </div>

        </section>

    </div>

    <!-- FOOTER -->
    @include('components.footer')

</main>

</body>
</html>