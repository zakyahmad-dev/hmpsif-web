<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $q = trim($request->input('q', ''));
        $query = Kegiatan::query();

        if ($q !== '') {
            $query->where('nama', 'like', "%{$q}%")
                  ->orWhere('deskripsi', 'like', "%{$q}%")
                  ->orWhere('lokasi', 'like', "%{$q}%");
        }

        $activities = $query->orderBy('tanggal', 'desc')->get();

        return view('kegiatan.index', compact('activities', 'q'));
    }
}