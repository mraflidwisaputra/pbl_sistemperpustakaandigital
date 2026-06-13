<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'buku_id',
        'nama_peminjam',
        'kode_booking',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'tanggal_kembali',
        'denda',
        'status',
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }
}