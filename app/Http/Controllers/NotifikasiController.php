<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;

class NotifikasiController extends Controller
{
    public function baca(Notifikasi $notifikasi)
    {
        $userId = session('user_id');

        if (!$userId) {
            abort(403);
        }

        if ($notifikasi->user_id !== null && (int) $notifikasi->user_id !== (int) $userId) {
            abort(403);
        }

        $notifikasi->update([
            'status' => 'dibaca',
        ]);

        return back();
    }
}
