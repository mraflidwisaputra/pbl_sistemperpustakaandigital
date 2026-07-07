<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        DB::table('peminjaman')
            ->where('status', 'menunggu konfirmasi')
            ->whereNotNull('batas_pengambilan')
            ->where('batas_pengambilan', '<', now())
            ->update(['status' => 'dibatalkan', 'updated_at' => now()]);

        $peminjamanDipinjam = DB::table('peminjaman')->where('status', 'dipinjam')->get();
        foreach ($peminjamanDipinjam as $item) {
            if ($item->tanggal_pengembalian && now()->gt(Carbon::parse($item->tanggal_pengembalian))) {
                $hariTerlambat = Carbon::parse($item->tanggal_pengembalian)->diffInDays(now());
                DB::table('peminjaman')->where('id', $item->id)->update([
                    'status' => 'terlambat',
                    'denda' => $hariTerlambat * 2000,
                    'updated_at' => now(),
                ]);
            }
        }

        $query = DB::table('peminjaman')
            ->join('users', 'peminjaman.user_id', '=', 'users.id')
            ->join('buku', 'peminjaman.buku_id', '=', 'buku.id')
            ->leftJoin('kategori', 'buku.kategori_id', '=', 'kategori.id')
            ->select(
                'peminjaman.id', 'peminjaman.kode_booking', 'peminjaman.tanggal_peminjaman',
                'peminjaman.tanggal_pengembalian', 'peminjaman.batas_pengambilan', 'peminjaman.status',
                'peminjaman.denda', 'users.name as nama_anggota', 'users.nim', 'buku.judul',
                'buku.penulis', 'buku.penerbit', 'buku.isbn', 'buku.tahun_terbit', 'kategori.nama_kategori'
            );

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('peminjaman.kode_booking', 'like', '%' . $search . '%')
                  ->orWhere('users.name', 'like', '%' . $search . '%')
                  ->orWhere('buku.judul', 'like', '%' . $search . '%');
            });
        }

        if ($request->filled('status')) $query->where('peminjaman.status', $request->status);

        $peminjaman = $query->orderBy('peminjaman.id', 'desc')->get();

        return view('peminjaman', compact('peminjaman'));
    }

    public function konfirmasi($id)
    {
        $peminjaman = DB::table('peminjaman')->where('id', $id)->first();
        if (!$peminjaman) return redirect('/peminjaman')->with('error', 'Data peminjaman tidak ditemukan.');
        if (strtolower(trim($peminjaman->status)) !== 'menunggu konfirmasi') return redirect('/peminjaman')->with('error', 'Peminjaman sudah diproses.');

        if ($peminjaman->batas_pengambilan && now()->gt($peminjaman->batas_pengambilan)) {
            DB::table('peminjaman')->where('id', $peminjaman->id)->update(['status' => 'dibatalkan', 'updated_at' => now()]);
            return redirect('/peminjaman')->with('error', 'Peminjaman dibatalkan otomatis karena melewati batas 24 jam.');
        }

        $buku = DB::table('buku')->where('id', $peminjaman->buku_id)->first();
        if (!$buku || $buku->stok <= 0) return redirect('/peminjaman')->with('error', 'Stok buku habis.');

        DB::transaction(function () use ($peminjaman, $buku) {
            DB::table('buku')->where('id', $peminjaman->buku_id)->update([
                'stok' => $buku->stok - 1,
                'status' => ($buku->stok - 1) <= 0 ? 'Dipinjam' : 'Tersedia',
                'updated_at' => now(),
            ]);

            DB::table('peminjaman')->where('id', $peminjaman->id)->update([
                'status' => 'dipinjam', 'updated_at' => now()
            ]);

            DB::table('notifikasi')->insert([
                'user_id' => $peminjaman->user_id,
                'judul' => 'Peminjaman Diterima',
                'pesan' => 'Peminjaman Anda untuk buku "' . $buku->judul . '" (Booking: ' . $peminjaman->kode_booking . ') telah diterima.',
                'status' => 'belum_dibaca',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        return redirect('/peminjaman')->with('success', 'Peminjaman berhasil diterima.');
    }

    // LOGIKA BARU PENGEMBALIAN BUKU
    public function pengembalian($id)
    {
        $peminjaman = DB::table('peminjaman')->where('id', $id)->first();
        if (!$peminjaman) return redirect('/peminjaman')->with('error', 'Data peminjaman tidak ditemukan.');

        $status = strtolower(trim($peminjaman->status));
        if (!in_array($status, ['dipinjam', 'terlambat', 'buku hilang'])) return redirect('/peminjaman')->with('error', 'Buku ini tidak sedang dipinjam atau dilaporkan hilang.');

        $buku = DB::table('buku')->where('id', $peminjaman->buku_id)->first();

        DB::transaction(function () use ($peminjaman, $buku, $status) {
            // Jika status bukan hilang, kembalikan stok buku ke perpustakaan. 
            // Namun jika hilang, stok TIDAK bertambah karena fisik buku tidak ada.
            if ($buku && $status !== 'buku hilang') {
                DB::table('buku')->where('id', $peminjaman->buku_id)->update([
                    'stok' => $buku->stok + 1, 'status' => 'Tersedia', 'updated_at' => now(),
                ]);
            }
            
            DB::table('peminjaman')->where('id', $peminjaman->id)->update([
                'status' => 'selesai', 'tanggal_kembali' => now()->toDateString(), 'updated_at' => now(),
            ]);
        });

        return redirect('/peminjaman')->with('success', 'Transaksi diselesaikan. Denda (jika ada) dianggap telah dibayar.');
    }
}