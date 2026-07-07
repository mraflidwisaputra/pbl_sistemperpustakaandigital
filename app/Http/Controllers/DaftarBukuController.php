<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\Notifikasi;
use App\Models\User;
use Illuminate\Http\Request;

class DaftarBukuController extends Controller
{
    public function index(Request $request)
    {
        $kategori = Kategori::all();

        $hitungPeminjaman = [
            'peminjaman as total_dipinjam' => function ($query) {
                $query->whereIn('status', ['dipinjam', 'selesai', 'terlambat', 'buku hilang']);
            }
        ];

        $buku = Buku::with('kategori')
            ->withCount($hitungPeminjaman)
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

        $kategoriPopuler = Buku::with('kategori')
            ->withCount($hitungPeminjaman)
            ->orderByDesc('total_dipinjam')
            ->latest()
            ->take(10)
            ->get();

        $rekomendasi = Buku::with('kategori')
            ->withCount($hitungPeminjaman)
            ->inRandomOrder()
            ->take(10)
            ->get();

        $bukuTerbaru = Buku::with('kategori')
            ->withCount($hitungPeminjaman)
            ->latest()
            ->take(10)
            ->get();

        return view('daftarbuku', compact('buku', 'kategori', 'kategoriPopuler', 'rekomendasi', 'bukuTerbaru'));
    }

    public function pinjam(Request $request)
    {
        $request->validate(['buku_id' => 'required|exists:buku,id']);
        $userId = session('user_id');

        if (!$userId) return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');

        $buku = Buku::findOrFail($request->buku_id);

        if ($buku->stok <= 0) return redirect()->route('daftar.buku')->with('error', 'Stok buku tidak tersedia.');

        $kodeBooking = strtoupper(substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5));

        Peminjaman::create([
            'user_id' => $userId,
            'buku_id' => $buku->id,
            'nama_peminjam' => session('name') ?? 'Anggota',
            'kode_booking' => $kodeBooking,
            'tanggal_peminjaman' => now(),
            'tanggal_pengembalian' => now()->addDays(7),
            'batas_pengambilan' => now()->addHours(24),
            'tanggal_kembali' => null,
            'denda' => 0,
            'status' => 'menunggu konfirmasi',
        ]);

        // NOTIFIKASI OTOMATIS KE ADMIN
        $admin = User::where('role', 'admin')->first();
        if ($admin) {
            Notifikasi::create([
                'user_id' => $admin->id,
                'judul' => 'Permintaan Peminjaman Baru',
                'pesan' => 'Anggota ' . session('name') . ' ingin meminjam buku "' . $buku->judul . '". Kode Booking: ' . $kodeBooking,
                'status' => 'belum_dibaca'
            ]);
        }

        return redirect()->route('riwayat.peminjaman')
            ->with('success', 'Peminjaman berhasil diajukan. Ambil buku maksimal 24 jam. Kode booking Anda: ' . $kodeBooking);
    }
}