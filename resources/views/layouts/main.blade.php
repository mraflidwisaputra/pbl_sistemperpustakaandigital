<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?? 'Perpustakaan Digital' ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    
    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .sidebar-active {
            background-color: #3b82f6;
            color: white;
        }
        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white flex flex-col">
            <!-- Logo -->
            <div class="p-6 flex items-center justify-center border-b border-gray-700">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-book-reader text-3xl text-blue-400"></i>
                    <span class="text-xl font-bold">exploretech</span>
                </div>
            </div>
            
            <!-- Navigation -->
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="/" class="flex items-center space-x-3 px-4 py-3 rounded-lg sidebar-active transition-colors">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span>
                </a>
                <a href="/books" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                    <i class="fas fa-list"></i>
                    <span>Daftar Buku</span>
                </a>
                <a href="/history" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                    <i class="fas fa-history"></i>
                    <span>Riwayat Peminjaman</span>
                </a>
                <a href="/about" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                    <i class="fas fa-info-circle"></i>
                    <span>Tentang</span>
                </a>
                <a href="/contact" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                    <i class="fas fa-envelope"></i>
                    <span>Kontak</span>
                </a>
            </nav>
            
            <!-- Logout -->
            <div class="p-4 border-t border-gray-700">
                <button class="w-full flex items-center justify-center space-x-2 bg-blue-600 hover:bg-blue-700 px-4 py-3 rounded-lg transition-colors">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </button>
            </div>
        </aside>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm border-b border-gray-200 px-8 py-4">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold text-gray-800">Perpustakaan Digital</h1>
                    <div class="flex items-center space-x-4">
                        <button class="p-2 rounded-full hover:bg-gray-100 relative">
                            <i class="fas fa-bell text-gray-600"></i>
                            <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>
                        <div class="flex items-center space-x-3">
                            <img src="<?= $data['user']['avatar'] ?? 'https://ui-avatars.com/api/?name=John+Doe&background=0D8ABC&color=fff' ?>" 
                                 alt="User" class="w-10 h-10 rounded-full">
                            <span class="font-medium text-gray-700"><?= $data['user']['name'] ?? 'User' ?></span>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-8">
                <?php if (isset($content)) echo $content; ?>
            </main>
        </div>
    </div>
</body>
</html>