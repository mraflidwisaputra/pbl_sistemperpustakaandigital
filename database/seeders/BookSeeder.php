<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['Nebula', 'Tere Liye', 'Fiksi', 'nebula.jpg', 4.8, 120, 2020],
            ['Laut Bercerita', 'Leila S. Chudori', 'Sejarah', 'laut.jpg', 4.6, 98, 2017],
            ['Brianna Dan Bottomwise', 'Andrea Hirata', 'Fiksi', 'brianna.jpg', 4.9, 150, 2022],
            ['Bintang', 'Tere Liye', 'Fiksi', 'bintang.jpg', 4.8, 110, 2017],
            ['The Midnight Library', 'Matt Haig', 'Fiksi', 'midnight.jpg', 4.9, 198, 2020],
            ['Etika Bisnis', 'Budi Karyanto', 'Non-Fiksi', 'etika.jpg', 4.8, 67, 2021],
            ['Muros', 'Surya Putra', 'Teknologi', 'muros.jpg', 4.7, 120, 2023],
            ['Lofarsa', 'Rofensa', 'Pengembangan Diri', 'lofarsa.jpg', 4.9, 140, 2023],
        ];

        foreach ($books as $book) {
            Book::create([
                'title' => $book[0],
                'author' => $book[1],
                'category' => $book[2],
                'cover' => $book[3],
                'rating' => $book[4],
                'review_count' => $book[5],
                'year' => $book[6],
                'status' => 'Tersedia',
            ]);
        }
    }
}
