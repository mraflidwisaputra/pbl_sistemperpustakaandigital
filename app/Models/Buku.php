<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
<<<<<<< HEAD

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
=======
    protected $primaryKey = 'id_buku';

    protected $fillable = [
        'judul_buku',
        'penulis',
        'tahun_rilis',
        'penerbit',
        'isbn',
        'id_kategori',
        'stok',
        'cover',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    public function scopeCari($query, $search)
    {
        if ($search) {
            return $query->where(function ($q) use ($search) {
                $q->where('judul_buku', 'like', '%' . $search . '%')
                  ->orWhere('penulis', 'like', '%' . $search . '%')
                  ->orWhere('penerbit', 'like', '%' . $search . '%')
                  ->orWhere('isbn', 'like', '%' . $search . '%')
                  ->orWhere('tahun_rilis', 'like', '%' . $search . '%');
            });
        }

        return $query;
    }

    public function scopeKategoriFilter($query, $kategori)
    {
        if ($kategori) {
            return $query->where('id_kategori', $kategori);
        }

        return $query;
    }

    public function isTersedia()
    {
        return $this->stok > 0;
>>>>>>> 2dd4a82683bcb78480bad5d83caf5cdd3378ca47
    }
}