<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';

    protected $fillable = [
    'kategori_id',
    'judul',
    'penulis',
    'penerbit',
    'isbn',
    'tahun_terbit',
    'cover',
    'rating',
    'jumlah_ulasan',
    'stok',
    'status',
    'is_rekomendasi',
];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}