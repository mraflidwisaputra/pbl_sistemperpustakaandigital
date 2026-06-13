<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $anggota = DB::table('anggota')
            ->when($search, function ($query) use ($search) {
                return $query->where('nama_anggota', 'like', '%' . $search . '%')
                             ->orWhere('nim', 'like', '%' . $search . '%')
                             ->orWhere('email', 'like', '%' . $search . '%');
            })
            ->orderBy('id_anggota', 'desc')
            ->get();

        return view('keloladata', compact('anggota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_anggota' => 'required|string|max:255',
            'nim' => 'required|string|max:30|unique:anggota,nim',
            'email' => 'required|email|max:255|unique:anggota,email',
            'tanggal_daftar' => 'required|date',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ], [
            'nama_anggota.required' => 'Nama lengkap wajib diisi.',
            'nim.required' => 'NIM wajib diisi.',
            'nim.unique' => 'NIM sudah terdaftar.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'tanggal_daftar.required' => 'Tanggal daftar wajib diisi.',
            'tanggal_daftar.date' => 'Tanggal daftar tidak valid.',
            'status.required' => 'Status wajib dipilih.',
        ]);

        DB::table('anggota')->insert([
            'nama_anggota' => $request->nama_anggota,
            'nim' => $request->nim,
            'email' => $request->email,
            'tanggal_daftar' => $request->tanggal_daftar,
            'status' => $request->status,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/keloladata')->with('success', 'Anggota berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_anggota' => 'required|string|max:255',
            'nim' => 'required|string|max:30|unique:anggota,nim,' . $id . ',id_anggota',
            'email' => 'required|email|max:255|unique:anggota,email,' . $id . ',id_anggota',
            'tanggal_daftar' => 'required|date',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ], [
            'nama_anggota.required' => 'Nama lengkap wajib diisi.',
            'nim.required' => 'NIM wajib diisi.',
            'nim.unique' => 'NIM sudah terdaftar.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'tanggal_daftar.required' => 'Tanggal daftar wajib diisi.',
            'tanggal_daftar.date' => 'Tanggal daftar tidak valid.',
            'status.required' => 'Status wajib dipilih.',
        ]);

        DB::table('anggota')
            ->where('id_anggota', $id)
            ->update([
                'nama_anggota' => $request->nama_anggota,
                'nim' => $request->nim,
                'email' => $request->email,
                'tanggal_daftar' => $request->tanggal_daftar,
                'status' => $request->status,
                'updated_at' => now()
            ]);

        return redirect('/keloladata')->with('success', 'Anggota berhasil diperbarui');
    }

    public function destroy($id)
    {
        DB::table('anggota')->where('id_anggota', $id)->delete();

        return redirect('/keloladata')->with('success', 'Anggota berhasil dihapus');
    }
}