<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Kontak;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'pesan' => 'required|string',
        ]);

        Contact::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        return redirect()
            ->route('contact')
            ->with('success', 'Pesan berhasil dikirim.');
    }
}