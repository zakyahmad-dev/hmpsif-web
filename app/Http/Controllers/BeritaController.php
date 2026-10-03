<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $articles = Berita::orderBy('tanggal', 'desc')->get();
        return view('berita.index', compact('articles'));
    }
}