<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use App\Models\ProgramKerja;
use App\Models\Kegiatan;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $counts = [
            'anggota' => DB::table('pendaftaran')->count(),
            'program_kerja' => ProgramKerja::count(),
            'kegiatan' => Kegiatan::count(),
            'divisi' => Pengurus::whereNotNull('divisi')->where('divisi', '<>', '')->distinct('divisi')->count('divisi'),
        ];

        $programs = ProgramKerja::orderBy('tahun', 'desc')->orderBy('id', 'desc')->take(3)->get();
        $events = Kegiatan::where('tanggal', '>=', now()->toDateString())->orderBy('tanggal', 'asc')->orderBy('id', 'desc')->take(3)->get();
        $news = Berita::orderBy('tanggal', 'desc')->orderBy('id', 'desc')->take(3)->get();

        return view('home', compact('counts', 'programs', 'events', 'news'));
    }
}