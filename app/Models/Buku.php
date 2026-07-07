<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Peminjaman;

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
        'denda_hilang',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'buku_id');
    }

    public function getRatingOtomatisAttribute()
    {
        $total = $this->total_dipinjam ?? 0;

        if ($total >= 20) {
            return 5.0;
        } elseif ($total >= 10) {
            return 4.8;
        } elseif ($total >= 5) {
            return 4.5;
        } elseif ($total >= 1) {
            return 4.0;
        }

        return 0.0;
    }
}