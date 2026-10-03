<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function create()
    {
        $departments = ["PSDM", "Pendidikan", "Kominfo", "Humas", "Minat dan Bakat"];
        return view('gabung', compact('departments'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:120',
            'nim' => 'required|string|max:40',
            'semester' => 'required|integer|min:1|max:14',
            'kelas' => 'required|string|max:30',
            'whatsapp' => 'required|string|max:30',
            'email' => 'required|email|max:120',
            'divisi' => 'required|string|max:80',
            'alasan' => 'required|string',
            'agree' => 'required|accepted',
        ]);

        $validated['agree'] = true;
        $validated['status'] = 'Pending';

        Pendaftaran::create($validated);

        return back()->with('success', 'Pendaftaran berhasil dikirim. Terima kasih sudah ingin bertumbuh bersama HMPSIF.');
    }
}