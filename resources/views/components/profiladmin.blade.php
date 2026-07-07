<div class="flex items-center justify-end mb-4 no-print">
    <div class="relative z-30">
        <div class="flex items-center gap-1 px-2 py-1 bg-white border border-gray-200 rounded-lg shadow-sm">

            <button id="dropdownNotificationButton"
                    class="relative inline-flex items-center justify-center w-9 h-9 text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-600"
                    type="button">
                <i class="fa-solid fa-bell text-base"></i>

                @if(isset($jumlahNotifikasi) && $jumlahNotifikasi > 0)
                    <span class="absolute -top-2 -right-2 inline-flex items-center justify-center w-5 h-5 text-[10px] font-bold text-white bg-red-500 border-2 border-white rounded-full">
                        {{ $jumlahNotifikasi }}
                    </span>
                @endif
            </button>

            <div id="dropdownNotification"
                 class="absolute right-0 top-full z-50 mt-2 hidden w-80 max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-gray-100">

                <div class="block px-4 py-3 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 text-sm">
                    Notifikasi
                </div>

                <div class="divide-y divide-gray-100">
                    @forelse($notifikasis ?? [] as $notif)
                        <form action="{{ route('notifikasi.baca', $notif->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="flex w-full px-4 py-3 text-left hover:bg-gray-100 {{ $notif->status == 'belum_dibaca' ? 'bg-blue-50/60' : '' }}">
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
                            </button>
                        </form>
                    @empty
                        <div class="px-4 py-4 text-sm text-gray-500 text-center">
                            Tidak ada notifikasi.
                        </div>
                    @endforelse
                </div>
            </div>

            <button id="dropdownProfileButton"
                    class="flex items-center gap-2 px-2 py-1 rounded-lg hover:bg-gray-100 transition"
                    type="button">

                <img src="https://ui-avatars.com/api/?name={{ urlencode(session('name') ?? 'Admin') }}&background=2563eb&color=ffffff"
                     class="w-9 h-9 rounded-full object-cover border"
                     alt="Profile">

                <div class="leading-tight text-left">
                    <h5 class="text-xs font-bold text-gray-900 max-w-[120px] truncate">
                        Halo, {{ session('name') ?? 'Admin' }}
                    </h5>

                    <p class="text-[10px] text-gray-500">
                        Administrator
                    </p>
                </div>

                <i class="fa-solid fa-chevron-down text-[10px] text-gray-500"></i>
            </button>

            <div id="dropdownProfile"
                 class="absolute right-0 top-full z-50 mt-2 hidden w-44 bg-white rounded-lg shadow-lg border border-gray-100 overflow-hidden">

                <div class="px-3 py-2 bg-gray-50">
                    <p class="text-[10px] text-gray-500">
                        Login sebagai
                    </p>

                    <p class="text-xs font-semibold text-gray-900 truncate">
                        Admin Perpustakaan
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const notificationButton = document.getElementById('dropdownNotificationButton');
        const notificationDropdown = document.getElementById('dropdownNotification');
        const profileButton = document.getElementById('dropdownProfileButton');
        const profileDropdown = document.getElementById('dropdownProfile');

        function toggle(dropdown) {
            if (dropdown) {
                dropdown.classList.toggle('hidden');
            }
        }

        notificationButton?.addEventListener('click', function (event) {
            event.stopPropagation();
            profileDropdown?.classList.add('hidden');
            toggle(notificationDropdown);
        });

        profileButton?.addEventListener('click', function (event) {
            event.stopPropagation();
            notificationDropdown?.classList.add('hidden');
            toggle(profileDropdown);
        });

        document.addEventListener('click', function () {
            notificationDropdown?.classList.add('hidden');
            profileDropdown?.classList.add('hidden');
        });
    });
</script>
