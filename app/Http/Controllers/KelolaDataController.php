<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KelolaDataController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $users = DB::table('users')
            ->where('role', 'anggota')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%')
                      ->orWhere('nim', 'like', '%' . $search . '%')
                      ->orWhere('nip', 'like', '%' . $search . '%');
                });
            })
            ->orderBy('id', 'desc')
            ->get();

        return view('keloladata', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:50|unique:users,nim',
            'password' => 'required|string|min:6',
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'nim' => $request->nim,
            'nip' => null,
            'role' => 'anggota',
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/keloladata')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:50|unique:users,nim,' . $id,
            'password' => 'nullable|string|min:6',
        ]);

        $data = [
            'name' => $request->name,
            'nim' => $request->nim,
            'role' => 'anggota',
            'updated_at' => now(),
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        DB::table('users')
            ->where('id', $id)
            ->where('role', 'anggota')
            ->update($data);

        return redirect('/keloladata')->with('success', 'Anggota berhasil diperbarui.');
    }

    public function resetPassword($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->where('role', 'anggota')
            ->first();

        if (!$user) {
            return redirect('/keloladata')->with('error', 'Anggota tidak ditemukan.');
        }

        if (empty($user->nim)) {
            return redirect('/keloladata')->with('error', 'NIM anggota belum tersedia.');
        }

        DB::table('users')
            ->where('id', $id)
            ->where('role', 'anggota')
            ->update([
                'password' => Hash::make($user->nim),
                'updated_at' => now(),
            ]);

        return redirect('/keloladata')->with('success', 'Password berhasil direset menjadi NIM anggota.');
    }

    public function destroy($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->where('role', 'anggota')
            ->delete();

        return redirect('/keloladata')->with('success', 'Anggota berhasil dihapus.');
    }
}