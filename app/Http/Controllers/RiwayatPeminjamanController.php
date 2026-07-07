<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RiwayatPeminjamanController extends Controller
{
    public function index(Request $request)
    {
        if (!session('user_id')) return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        
        $userId = session('user_id');
        $query = Peminjaman::with('buku.kategori')->where('user_id', $userId);

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('kode_booking', 'like', "%{$search}%")
                  ->orWhereHas('buku', function ($bukuQuery) use ($search) {
                      $bukuQuery->where('judul', 'like', "%{$search}%")->orWhere('penulis', 'like', "%{$search}%");
                  });
            });
        }
        
        if ($request->filled('status')) $query->where('status', $request->status);

        $riwayat = $query->latest()->get();

        foreach ($riwayat as $item) {
            if ($item->status == 'dipinjam' && $item->tanggal_pengembalian && Carbon::now()->gt(Carbon::parse($item->tanggal_pengembalian))) {
                $hariTerlambat = Carbon::parse($item->tanggal_pengembalian)->diffInDays(Carbon::now());
                $item->update(['status' => 'terlambat', 'denda' => $hariTerlambat * 2000]);
            }
        }

        $totalPeminjaman = Peminjaman::where('user_id', $userId)->count();
        $sedangDipinjam = Peminjaman::where('user_id', $userId)->where('status', 'dipinjam')->count();
        $terlambat = Peminjaman::where('user_id', $userId)->where('status', 'terlambat')->count();
        $bukuHilang = Peminjaman::where('user_id', $userId)->where('status', 'buku hilang')->count();
        
        // LOGIKA BARU: Hanya jumlahkan denda yang statusnya BELUM 'selesai'
        $totalDenda = Peminjaman::where('user_id', $userId)
            ->whereIn('status', ['terlambat', 'buku hilang'])
            ->sum('denda');

        return view('riwayat-peminjaman', compact('riwayat', 'totalPeminjaman', 'sedangDipinjam', 'terlambat', 'totalDenda', 'bukuHilang'));
    }

    public function laporkanHilang($id)
    {
        $userId = session('user_id');
        if (!$userId) return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');

        $peminjaman = Peminjaman::where('id', $id)->where('user_id', $userId)->first();
        if (!$peminjaman) return redirect()->back()->with('error', 'Data peminjaman tidak ditemukan.');

        if (!in_array(strtolower(trim($peminjaman->status)), ['dipinjam', 'terlambat'])) {
            return redirect()->back()->with('error', 'Hanya buku yang sedang dipinjam atau terlambat yang bisa dilaporkan hilang.');
        }

        $buku = Buku::find($peminjaman->buku_id);
        $dendaHilang = $buku->denda_hilang ?? $buku->harga_ganti ?? 50000;
        $dendaTotal = $peminjaman->denda + $dendaHilang;

        $peminjaman->update(['status' => 'buku hilang', 'denda' => $dendaTotal]);

        return redirect()->back()->with('success', 'Buku berhasil dilaporkan hilang. Hubungi admin untuk melunasi denda.');
    }
}