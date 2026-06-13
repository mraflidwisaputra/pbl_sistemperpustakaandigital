<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('peminjaman')
            ->join('anggota', 'peminjaman.id_anggota', '=', 'anggota.id_anggota')
            ->join('buku', 'peminjaman.id_buku', '=', 'buku.id_buku')
            ->leftJoin('kategori', 'buku.id_kategori', '=', 'kategori.id_kategori')
            ->select(
                'peminjaman.id_peminjaman',
                'peminjaman.code_booking',
                'peminjaman.tanggal_pinjam',
                'peminjaman.tanggal_kembali',
                'peminjaman.status',
                'anggota.nama_anggota',
                'anggota.email',
                'buku.judul_buku',
                'buku.tahun_rilis',
                'buku.penerbit',
                'buku.isbn',
                'kategori.nama_kategori'
            );

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('anggota.nama_anggota', 'like', '%' . $request->search . '%')
                    ->orWhere('anggota.email', 'like', '%' . $request->search . '%')
                    ->orWhere('buku.judul_buku', 'like', '%' . $request->search . '%')
                    ->orWhere('buku.penerbit', 'like', '%' . $request->search . '%')
                    ->orWhere('buku.isbn', 'like', '%' . $request->search . '%')
                    ->orWhere('peminjaman.code_booking', 'like', '%' . $request->search . '%')
                    ->orWhere('kategori.nama_kategori', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->status) {
            $query->where('peminjaman.status', $request->status);
        }

        $peminjaman = $query->orderBy('peminjaman.id_peminjaman', 'desc')->get();

        return view('peminjaman', compact('peminjaman'));
    }

    public function konfirmasi($id)
    {
        $peminjaman = DB::table('peminjaman')
            ->where('id_peminjaman', $id)
            ->first();

        if (!$peminjaman) {
            return redirect('/peminjaman')->with('error', 'Data peminjaman tidak ditemukan.');
        }

        if ($peminjaman->status !== 'Menunggu Konfirmasi') {
            return redirect('/peminjaman')->with('error', 'Peminjaman ini sudah dikonfirmasi.');
        }

        $buku = DB::table('buku')->where('id_buku', $peminjaman->id_buku)->first();

        if (!$buku || $buku->stok <= 0) {
            return redirect('/peminjaman')->with('error', 'Stok buku tidak tersedia.');
        }

        DB::table('buku')
            ->where('id_buku', $peminjaman->id_buku)
            ->update([
                'stok' => $buku->stok - 1,
                'updated_at' => now(),
            ]);

        DB::table('peminjaman')
            ->where('id_peminjaman', $id)
            ->update([
                'status' => 'Dipinjam',
                'updated_at' => now(),
            ]);

        return redirect('/peminjaman')->with('success', 'Peminjaman berhasil dikonfirmasi dan stok buku berkurang.');
    }
}