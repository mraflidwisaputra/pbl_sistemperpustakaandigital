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
            ->join('anggota', 'peminjaman.id_anggota', '=', 'anggota.id_anggota')
            ->join('buku', 'peminjaman.id_buku', '=', 'buku.id_buku')
            ->leftJoin('laporan', 'peminjaman.id_peminjaman', '=', 'laporan.id_peminjaman')
            ->select(
                'peminjaman.id_peminjaman',
                'peminjaman.tanggal_pinjam',
                'peminjaman.tanggal_kembali',
                'peminjaman.status',
                'anggota.nama_anggota',
                'buku.judul_buku',
                DB::raw('COALESCE(laporan.denda, 0) as denda'),
                'laporan.keterangan'
            );

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('anggota.nama_anggota', 'like', '%' . $request->search . '%')
                    ->orWhere('buku.judul_buku', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->status) {
            $query->where('peminjaman.status', $request->status);
        }

        $isCetakMingguan = false;
        $tanggalAwalMinggu = null;
        $tanggalAkhirMinggu = null;

        if ($request->cetak == 'mingguan') {
            $isCetakMingguan = true;

            $tanggalAwalMinggu = Carbon::now()->startOfWeek()->format('Y-m-d');
            $tanggalAkhirMinggu = Carbon::now()->endOfWeek()->format('Y-m-d');

            $query->whereBetween('peminjaman.tanggal_pinjam', [
                $tanggalAwalMinggu,
                $tanggalAkhirMinggu
            ]);
        }

        $laporan = $query
            ->orderBy('peminjaman.tanggal_pinjam', 'desc')
            ->get();

        $totalPeminjaman = $laporan->count();
        $bukuDikembalikan = $laporan->where('status', 'Selesai')->count();
        $terlambat = $laporan->where('status', 'Terlambat')->count();
        $totalDenda = $laporan->sum('denda');

        return view('laporan', compact(
            'laporan',
            'totalPeminjaman',
            'bukuDikembalikan',
            'terlambat',
            'totalDenda',
            'isCetakMingguan',
            'tanggalAwalMinggu',
            'tanggalAkhirMinggu'
        ));
    }
}