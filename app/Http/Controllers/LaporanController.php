<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('peminjaman')
            ->join('users', 'peminjaman.user_id', '=', 'users.id')
            ->join('buku', 'peminjaman.buku_id', '=', 'buku.id')
            ->select(
                'peminjaman.id', 'peminjaman.tanggal_peminjaman as tanggal_pinjam', 'peminjaman.tanggal_kembali',
                'peminjaman.status', 'peminjaman.denda', 'users.name as nama_anggota', 'buku.judul as judul_buku',
                DB::raw("'-' as keterangan")
            );

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('users.name', 'like', '%' . $request->search . '%')
                  ->orWhere('buku.judul', 'like', '%' . $request->search . '%');
            });
        }
        if ($request->status) $query->where('peminjaman.status', $request->status);

        // LOGIKA CETAK BULANAN
        $isCetakBulanan = false;
        $tanggalAwal = null;
        $tanggalAkhir = null;

        if ($request->cetak == 'bulanan') {
            $isCetakBulanan = true;
            $tanggalAwal = Carbon::now()->startOfMonth()->format('Y-m-d');
            $tanggalAkhir = Carbon::now()->endOfMonth()->format('Y-m-d');
            $query->whereBetween('peminjaman.tanggal_peminjaman', [$tanggalAwal, $tanggalAkhir]);
        }

        $laporan = $query->orderBy('peminjaman.tanggal_peminjaman', 'desc')->get();

        $totalPeminjaman = $laporan->count();
        $bukuDikembalikan = $laporan->filter(fn($item) => strtolower(trim($item->status)) == 'selesai')->count();
        $terlambat = $laporan->filter(fn($item) => strtolower(trim($item->status)) == 'terlambat')->count();
        $bukuHilang = $laporan->filter(fn($item) => strtolower(trim($item->status)) == 'buku hilang')->count();
        $totalDenda = $laporan->sum('denda');

        return view('laporan', compact(
            'laporan', 'totalPeminjaman', 'bukuDikembalikan', 'terlambat', 'bukuHilang',
            'totalDenda', 'isCetakBulanan', 'tanggalAwal', 'tanggalAkhir'
        ));
    }
}