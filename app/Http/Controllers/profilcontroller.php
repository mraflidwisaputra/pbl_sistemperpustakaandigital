<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
    {
        if (!session('user_id')) {
            return redirect()->route('login');
        }

        $user = DB::table('users')
            ->where('id', session('user_id'))
            ->first();

        return view('profil', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        if (!session('user_id')) {
            return redirect()->route('login');
        }

        $request->validate([
            'password_baru' => 'required|min:6',
            'konfirmasi_password' => 'required|same:password_baru',
        ], [
            'password_baru.required' => 'Password baru wajib diisi.',
            'password_baru.min' => 'Password minimal 6 karakter.',
            'konfirmasi_password.required' => 'Konfirmasi password wajib diisi.',
            'konfirmasi_password.same' => 'Konfirmasi password tidak sama.',
        ]);

        DB::table('users')
            ->where('id', session('user_id'))
            ->update([
                'password' => Hash::make($request->password_baru),
                'updated_at' => now(),
            ]);

        return back()->with('success', 'Password berhasil diperbarui.');
    }
}