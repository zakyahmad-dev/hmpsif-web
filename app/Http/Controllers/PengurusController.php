<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurusList = Pengurus::all();

        $urutanJabatan = [
            'KETUA'          => 1,
            'KETUA HIMPUNAN' => 1,
            'SEKRETARIS I'   => 1,
            'BENDAHARA I'    => 1,
            'SEKRETARIS II'  => 1,
            'BENDAHARA II'   => 1,
            'KETUA DIVISI'   => 1,
            'CO'             => 2,
        ];

        $urutanDivisi = [
            'BPH'       => 1,
            'INTERNAL'  => 2,
            'EKSTERNAL' => 3,
            'KOMINFO'   => 4
        ];

        $sortedList = $pengurusList->sort(function ($a, $b) use ($urutanJabatan, $urutanDivisi) {
            $jabatanA = strtoupper(trim($a->jabatan ?? ''));
            $jabatanB = strtoupper(trim($b->jabatan ?? ''));
            $divisiA  = strtoupper(trim($a->divisi ?? ''));
            $divisiB  = strtoupper(trim($b->divisi ?? ''));

            $ja = $urutanJabatan[$jabatanA] ?? 99;
            $jb = $urutanJabatan[$jabatanB] ?? 99;
            if ($ja !== $jb) return $ja <=> $jb;

            $da = $urutanDivisi[$divisiA] ?? 99;
            $db = $urutanDivisi[$divisiB] ?? 99;
            if ($da !== $db) return $da <=> $db;

            return $a->id <=> $b->id;
        });

        $divisiTampil = [];
        foreach ($sortedList as $item) {
            $div = strtoupper(trim($item->divisi ?? 'LAINNYA')) ?: 'LAINNYA';
            $divisiTampil[$div][] = $item;
        }

        return view('pengurus.index', compact('divisiTampil'));
    }
}