<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function create()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:120',
            'email' => 'required|email|max:120',
            'subjek' => 'required|string|max:160',
            'pesan' => 'required|string',
        ]);

        Kontak::create($validated);

        return back()->with('success', 'Pesan Anda berhasil disimpan. Terima kasih!');
    }
}
