<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blue-700 min-h-screen overflow-x-hidden">

@include('components.sidebar')

<!-- MAIN -->
<main class="ml-[210px] min-h-screen flex flex-col bg-gradient-to-br from-blue-400 to-blue-600">

    <!-- CONTENT -->
    <section class="flex-1 flex items-center justify-center px-10 py-10">

        <div class="max-w-5xl w-full grid lg:grid-cols-2 gap-20 items-center">

            <!-- INFORMASI KONTAK -->
            <div>

                <h1 class="text-5xl font-bold text-white mb-6">
                    Hubungi Kami
                </h1>

                <p class="text-xl text-white/90 leading-relaxed mb-10">
                    Jika Anda memiliki pertanyaan, saran, atau ingin bekerja sama,
                    jangan ragu untuk menghubungi kami melalui formulir kontak.
                </p>

                <div class="space-y-6">

                    <!-- Lokasi -->
                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 bg-white rounded-full shadow-lg flex items-center justify-center">
                            <svg class="w-7 h-7 text-blue-600"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 16 20">
                                <path d="M8 0a8 8 0 0 0-8 8c0 5.25 7.14 11.53 7.45 11.8a.85.85 0 0 0 1.1 0C8.86 19.53 16 13.25 16 8a8 8 0 0 0-8-8Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-bold text-white text-xl">
                                Lokasi
                            </h3>
                            <p class="text-white/90">
                                Politeknik Negeri Batam
                            </p>
                        </div>

                    </div>

                    <!-- Email -->
                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 bg-white rounded-full shadow-lg flex items-center justify-center">
                            <svg class="w-7 h-7 text-blue-600"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 16">
                                <path d="m10.036 8.278 9.258-7.79A1.98 1.98 0 0 0 18 0H2A1.98 1.98 0 0 0 .706.488l9.33 7.79Z"/>
                                <path d="M11.241 9.817a2 2 0 0 1-2.482 0L0 2.5V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-bold text-white text-xl">
                                Email
                            </h3>
                            <p class="text-white/90">
                                exploretech@email.com
                            </p>
                        </div>

                    </div>

                    <!-- Telepon -->
                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 bg-white rounded-full shadow-lg flex items-center justify-center">
                            <svg class="w-7 h-7 text-blue-600"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 19 18">
                                <path d="M18 13.446v3.24a1.313 1.313 0 0 1-1.43 1.31A16.81 16.81 0 0 1 9.2 15.364a16.566 16.566 0 0 1-5.1-5.1A16.81 16.81 0 0 1 1.468 2.9A1.313 1.313 0 0 1 2.778 1.47h3.24a1.313 1.313 0 0 1 1.31 1.13c.083.63.237 1.248.46 1.843a1.313 1.313 0 0 1-.295 1.385L6.122 7.2a13.125 13.125 0 0 0 5.1 5.1l1.372-1.372a1.313 1.313 0 0 1 1.385-.295c.595.223 1.213.377 1.843.46A1.313 1.313 0 0 1 18 13.446Z"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-bold text-white text-xl">
                                Telepon
                            </h3>
                            <p class="text-white/90">
                                0812-xxxx-xxxx
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- FORM KONTAK -->
            <div>

                <div class="max-w-md mx-auto bg-white/20 backdrop-blur-lg border border-white/30 rounded-3xl shadow-2xl p-6">

                    <h2 class="text-2xl font-bold text-center text-white mb-5">
                        Form Kontak
                    </h2>

                    @if(session('success'))
                        <div class="mb-4 p-4 text-green-800 bg-green-100 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-white font-medium mb-2">
                                Nama
                            </label>

                            <input type="text"
                                   name="nama"
                                   value="{{ old('nama') }}"
                                   class="w-full rounded-xl bg-white/70 border border-white/50 px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-white">
                        </div>

                        <div class="mb-4">
                            <label class="block text-white font-medium mb-2">
                                Email
                            </label>

                            <input type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   class="w-full rounded-xl bg-white/70 border border-white/50 px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-white">
                        </div>

                        <div class="mb-5">
                            <label class="block text-white font-medium mb-2">
                                Pesan
                            </label>

                            <textarea
                                name="pesan"
                                rows="4"
                                class="w-full rounded-xl bg-white/70 border border-white/50 px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-white">{{ old('pesan') }}</textarea>
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-white text-blue-700 hover:bg-blue-100 font-semibold py-2.5 rounded-xl transition text-sm">
                            Kirim Pesan
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

    <!-- FOOTER -->
    @include('components.footer')

    </main>

</body>
</html>