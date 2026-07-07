<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $role = $request->role;

        if ($role == 'admin') {
            $request->validate([
                'nip' => 'required',
                'password' => 'required',
            ]);

            $user = DB::table('users')
                ->where('nip', $request->nip)
                ->where('role', 'admin')
                ->first();
        } else {
            $request->validate([
                'nim' => 'required',
                'password' => 'required',
            ]);

            $user = DB::table('users')
                ->where('nim', $request->nim)
                ->where('role', 'anggota')
                ->first();
        }

        if (!$user) {
            return back()->withInput()->with('error', 'NIM/NIP tidak ditemukan.');
        }

        if ($user->role == 'admin') {
            if ($request->password !== $user->password) {
                return back()->withInput()->with('error', 'Password salah.');
            }
        } else {
            if (!Hash::check($request->password, $user->password)) {
                return back()->withInput()->with('error', 'Password salah.');
            }
        }

        session([
            'user_id' => $user->id,
            'name' => $user->name,
            'role' => $user->role,
            'nim' => $user->nim ?? null,
            'nip' => $user->nip ?? null,
        ]);

        if ($user->role == 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('home');
    }

    public function profil()
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
        ]);

        DB::table('users')
            ->where('id', session('user_id'))
            ->update([
                'password' => Hash::make($request->password_baru),
                'updated_at' => now(),
            ]);

        return back()->with('success', 'Password berhasil diperbarui.');
    }

    public function logout()
    {
        session()->flush();

        return redirect()->route('login');
    }
}