<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;

class ProgramKerjaController extends Controller
{
    public function index(Request $request)
    {
        $q = trim($request->input('q', ''));
        $div = trim($request->input('divisi', ''));
        $status = trim($request->input('status', ''));

        $query = ProgramKerja::query();

        if ($q !== '') {
            $query->where(function ($sub) use ($q) {
                $sub->where('nama', 'like', "%{$q}%")
                    ->orWhere('deskripsi', 'like', "%{$q}%")
                    ->orWhere('divisi', 'like', "%{$q}%");
            });
        }

        if ($div !== '') {
            $query->where('divisi', $div);
        }

        if ($status !== '') {
            $query->where('status', $status);
        }

        $programs = $query->orderBy('tahun', 'desc')->orderBy('id', 'desc')->get();

        $divisions = ProgramKerja::whereNotNull('divisi')
            ->where('divisi', '<>', '')
            ->distinct()
            ->pluck('divisi');

        $statuses = ProgramKerja::whereNotNull('status')
            ->where('status', '<>', '')
            ->distinct()
            ->pluck('status');

        return view('program.index', compact('programs', 'divisions', 'statuses', 'q', 'div', 'status'));
    }

    public function show($id)
    {
        $program = ProgramKerja::findOrFail($id);

        return view('program.show', compact('program'));
    }
}