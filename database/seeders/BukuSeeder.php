<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'deskripsi' => 'Panduan praktis membangun kebiasaan baik dan menghilangkan kebiasaan buruk',
                'stok' => 15,
                'kategori' => 'Pengembangan Diri',
                'cover_url' => 'https://cdn.gramedia.com/uploads/items/9786020633176_.Atomic_Habit.jpg',
                'rating' => 4.9,
            ],
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'deskripsi' => 'Kisah inspiratif tentang perjuangan pendidikan di Belitung',
                'stok' => 8,
                'kategori' => 'Fiksi',
                'cover_url' => 'https://cdn.gramedia.com/uploads/items/9789793062792_New-Edition-Laskar-Pelangi.jpg',
                'rating' => 4.8,
            ],
            [
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'deskripsi' => 'Filsafat Stoisisme untuk kehidupan modern',
                'stok' => 12,
                'kategori' => 'Filsafat',
                'cover_url' => 'https://cdn.gramedia.com/uploads/items/9786020620176_Filosofi-Teras_cov.jpg',
                'rating' => 4.8,
            ],
            [
                'judul' => 'Nebula',
                'penulis' => 'Tere Liye',
                'deskripsi' => 'Kisah petualangan di alam semesta',
                'stok' => 10,
                'kategori' => 'Fiksi',
                'cover_url' => 'https://cdn.gramedia.com/uploads/items/9786020639536_nebula_cov.jpg',
                'rating' => 4.7,
            ],
            [
                'judul' => 'Algoritma & Pemrograman',
                'penulis' => 'Rinaldi Munir',
                'deskripsi' => 'Dasar-dasar logika pemrograman dan struktur data',
                'stok' => 20,
                'kategori' => 'Teknologi',
                'cover_url' => 'https://via.placeholder.com/200x300/3b82f6/ffffff?text=Algoritma',
                'rating' => 4.6,
            ],
            [
                'judul' => 'The Midnight Library',
                'penulis' => 'Matt Haig',
                'deskripsi' => 'Perpustakaan di antara kehidupan dan kematian',
                'stok' => 7,
                'kategori' => 'Fiksi',
                'cover_url' => 'https://cdn.gramedia.com/uploads/items/9786020649320_the_midnight_library_cov.jpg',
                'rating' => 4.9,
            ],
            [
                'judul' => 'Pemrograman Web Modern',
                'penulis' => 'Betha Sidik',
                'deskripsi' => 'Panduan lengkap HTML, CSS, JavaScript, dan framework',
                'stok' => 14,
                'kategori' => 'Teknologi',
                'cover_url' => 'https://via.placeholder.com/200x300/10b981/ffffff?text=Web+Dev',
                'rating' => 4.7,
            ],
            [
                'judul' => 'Rich Dad Poor Dad',
                'penulis' => 'Robert Kiyosaki',
                'deskripsi' => 'Edukasi keuangan pribadi dan investasi dasar',
                'stok' => 9,
                'kategori' => 'Keuangan',
                'cover_url' => 'https://via.placeholder.com/200x300/f59e0b/ffffff?text=Rich+Dad',
                'rating' => 4.6,
            ],
            [
                'judul' => 'Mindset',
                'penulis' => 'Carol S. Dweck',
                'deskripsi' => 'Perbedaan fixed mindset dan growth mindset',
                'stok' => 11,
                'kategori' => 'Psikologi',
                'cover_url' => 'https://via.placeholder.com/200x300/ec4899/ffffff?text=Mindset',
                'rating' => 4.7,
            ],
            [
                'judul' => 'Sapiens',
                'penulis' => 'Yuval Noah Harari',
                'deskripsi' => 'Sejarah singkat umat manusia',
                'stok' => 6,
                'kategori' => 'Sejarah',
                'cover_url' => 'https://via.placeholder.com/200x300/8b5cf6/ffffff?text=Sapiens',
                'rating' => 4.8,
            ],
            [
                'judul' => 'Basis Data Lanjut',
                'penulis' => 'Fathansyah',
                'deskripsi' => 'Konsep relasional, normalisasi, dan optimasi query',
                'stok' => 13,
                'kategori' => 'Teknologi',
                'cover_url' => 'https://via.placeholder.com/200x300/06b6d4/ffffff?text=Basis+Data',
                'rating' => 4.5,
            ],
            [
                'judul' => 'Digital Marketing',
                'penulis' => 'Nugroho J. Setiadi',
                'deskripsi' => 'Strategi pemasaran di era digital dan e-commerce',
                'stok' => 8,
                'kategori' => 'Bisnis',
                'cover_url' => 'https://via.placeholder.com/200x300/f97316/ffffff?text=Digital+Marketing',
                'rating' => 4.5,
            ],
            [
                'judul' => 'Public Speaking',
                'penulis' => 'Devie Rosa',
                'deskripsi' => 'Teknik presentasi efektif dan mengatasi grogi',
                'stok' => 10,
                'kategori' => 'Pengembangan Diri',
                'cover_url' => 'https://via.placeholder.com/200x300/6366f1/ffffff?text=Public+Speaking',
                'rating' => 4.6,
            ],
            [
                'judul' => 'Jaringan Komputer',
                'penulis' => 'Abdul Kadir',
                'deskripsi' => 'Fundamental jaringan, TCP/IP, dan keamanan jaringan',
                'stok' => 12,
                'kategori' => 'Teknologi',
                'cover_url' => 'https://via.placeholder.com/200x300/14b8a6/ffffff?text=Jaringan',
                'rating' => 4.6,
            ],
            [
                'judul' => 'Sejarah Indonesia Modern',
                'penulis' => 'M.C. Ricklefs',
                'deskripsi' => 'Jejak perjalanan bangsa dari kolonial hingga reformasi',
                'stok' => 5,
                'kategori' => 'Sejarah',
                'cover_url' => 'https://via.placeholder.com/200x300/84cc16/ffffff?text=Sejarah+ID',
                'rating' => 4.5,
            ],
            [
                'judul' => 'Matematika Diskrit',
                'penulis' => 'Rinaldi Munir',
                'deskripsi' => 'Logika, himpunan, relasi, dan teori graf',
                'stok' => 16,
                'kategori' => 'Pendidikan',
                'cover_url' => 'https://via.placeholder.com/200x300/a855f7/ffffff?text=Matematika',
                'rating' => 4.4,
            ],
            [
                'judul' => 'Psikologi Umum',
                'penulis' => 'Abu Ahmadi',
                'deskripsi' => 'Dasar-dasar perilaku manusia dan proses mental',
                'stok' => 9,
                'kategori' => 'Psikologi',
                'cover_url' => 'https://via.placeholder.com/200x300/f43f5e/ffffff?text=Psikologi',
                'rating' => 4.3,
            ],
            [
                'judul' => 'Statistika Terapan',
                'penulis' => 'Sudjana',
                'deskripsi' => 'Metode statistik untuk penelitian dan analisis data',
                'stok' => 11,
                'kategori' => 'Pendidikan',
                'cover_url' => 'https://via.placeholder.com/200x300/64748b/ffffff?text=Statistika',
                'rating' => 4.5,
            ],
            [
                'judul' => 'Laut Bercerita',
                'penulis' => 'Leila S. Chudori',
                'deskripsi' => 'Kisah tentang persahabatan dan perjuangan',
                'stok' => 7,
                'kategori' => 'Fiksi',
                'cover_url' => 'https://www.gramedia.com/blog/content/images/2020/08/laut-bercerita-leila-s-chudori_gramedia.jpg',
                'rating' => 4.6,
            ],
            [
                'judul' => 'Bintang',
                'penulis' => 'Tere Liye',
                'deskripsi' => 'Kisah inspiratif tentang mimpi dan perjuangan',
                'stok' => 10,
                'kategori' => 'Fiksi',
                'cover_url' => 'https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/ccmq4kges6gstnsrrtxabw.jpg',
                'rating' => 4.8,
            ],
        ];

        foreach ($books as $book) {
            DB::table('tblbuku')->insert($book);
        }
    }
}