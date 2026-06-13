<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarBukuController extends Controller
{
    public function index(Request $request)
    {
        $kategori = Kategori::all();

        $buku = Buku::with('kategori')
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where(function ($q) use ($request) {
                    $q->where('judul', 'like', '%' . $request->search . '%')
                      ->orWhere('penulis', 'like', '%' . $request->search . '%');
                });
            })
            ->when($request->filled('kategori'), function ($query) use ($request) {
                $query->where('kategori_id', $request->kategori);
            })
            ->latest()
            ->get();

        return view('daftarbuku', compact('buku', 'kategori'));
    }

    public function pinjam(Request $request)
    {
        $request->validate([
            'buku_id' => 'required|exists:buku,id',
        ]);

        try {
            $kodeBooking = strtoupper(substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5));

            DB::transaction(function () use ($request, $kodeBooking) {
                $buku = Buku::lockForUpdate()->findOrFail($request->buku_id);

                if ($buku->stok <= 0) {
                    throw new \Exception('Buku tidak tersedia.');
                }

                Peminjaman::create([
                    'buku_id' => $buku->id,
                    'nama_peminjam' => 'Sigma',
                    'kode_booking' => $kodeBooking,
                    'tanggal_peminjaman' => now()->format('Y-m-d'),
                    'tanggal_pengembalian' => now()->addDays(7)->format('Y-m-d'),
                    'tanggal_kembali' => null,
                    'denda' => 0,
                    'status' => 'menunggu konfirmasi',
                ]);

                $buku->decrement('stok');
            });

            return redirect()
                ->route('riwayat.peminjaman')
                ->with('success', 'Peminjaman berhasil. Kode booking Anda: ' . $kodeBooking);

        } catch (\Exception $e) {
            return redirect()
                ->route('daftar.buku')
                ->with('error', $e->getMessage());
        }
    }
}