<?php

namespace App\Http\Controllers;

use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $photos = Galeri::orderBy('tahun', 'desc')->orderBy('id', 'desc')->get();
        return view('galeri.index', compact('photos'));
    }
}