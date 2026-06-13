<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RiwayatPeminjamanController extends Controller
{
    public function index(Request $request)
    {
        $query = Peminjaman::with('buku.kategori');

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('kode_booking', 'like', "%{$search}%")
                  ->orWhereHas('buku', function ($bukuQuery) use ($search) {
                      $bukuQuery->where('judul', 'like', "%{$search}%")
                                ->orWhere('penulis', 'like', "%{$search}%");
                  });
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $riwayat = $query->latest()->get();

        foreach ($riwayat as $item) {
            if (
                $item->status == 'dipinjam' &&
                $item->tanggal_pengembalian &&
                Carbon::now()->gt(Carbon::parse($item->tanggal_pengembalian))
            ) {
                $hariTerlambat = Carbon::parse($item->tanggal_pengembalian)
                    ->diffInDays(Carbon::now());

                $item->update([
                    'status' => 'terlambat',
                    'denda' => $hariTerlambat * 2000,
                ]);
            }
        }

        $totalPeminjaman = Peminjaman::count();
        $sedangDipinjam = Peminjaman::where('status', 'dipinjam')->count();
        $terlambat = Peminjaman::where('status', 'terlambat')->count();
        $totalDenda = Peminjaman::sum('denda');

        return view('riwayat-peminjaman', compact(
            'riwayat',
            'totalPeminjaman',
            'sedangDipinjam',
            'terlambat',
            'totalDenda'
        ));
    }
}