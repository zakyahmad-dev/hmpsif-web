<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengurus;

class PengurusSeeder extends Seeder
{
    public function run(): void
    {
        // Kosongkan tabel pengurus terlebih dahulu agar tidak duplikat
        Pengurus::truncate();

        $dataPengurus = [
            [
                'nama' => 'Akmal Mustofa',
                'jabatan' => 'Ketua',
                'divisi' => 'BPH',
                'deskripsi' => 'Mengkoordinasikan arah organisasi.',
                'foto' => 'assets/img/avatar.svg',
            ],
            [
                'nama' => 'Naufal',
                'jabatan' => 'Wakil Ketua',
                'divisi' => 'BPH',
                'deskripsi' => 'Mendampingi ketua dan koordinasi internal.',
                'foto' => 'assets/img/avatar.svg',
            ],
            [
                'nama' => 'Zufar',
                'jabatan' => 'Sekretaris',
                'divisi' => 'BPH',
                'deskripsi' => 'Administrasi dan dokumentasi organisasi.',
                'foto' => 'assets/img/avatar.svg',
            ],
            [
                'nama' => 'Rizal',
                'jabatan' => 'Bendahara',
                'divisi' => 'BPH',
                'deskripsi' => 'Mengelola administrasi keuangan.',
                'foto' => 'assets/img/avatar.svg',
            ],
            [
                'nama' => 'Sinta',
                'jabatan' => 'Koordinator',
                'divisi' => 'PSDM',
                'deskripsi' => 'Pengembangan sumber daya mahasiswa.',
                'foto' => 'assets/img/avatar.svg',
            ],
            [
                'nama' => 'Dimas',
                'jabatan' => 'Koordinator',
                'divisi' => 'Pendidikan',
                'deskripsi' => 'Program akademik dan teknologi.',
                'foto' => 'assets/img/avatar.svg',
            ],
            [
                'nama' => 'Alya',
                'jabatan' => 'Koordinator',
                'divisi' => 'Kominfo',
                'deskripsi' => 'Media dan informasi digital.',
                'foto' => 'assets/img/avatar.svg',
            ],
            [
                'nama' => 'Fajar',
                'jabatan' => 'Koordinator',
                'divisi' => 'Humas',
                'deskripsi' => 'Relasi dan kerja sama.',
                'foto' => 'assets/img/avatar.svg',
            ],
        ];

        foreach ($dataPengurus as $pengurus) {
            Pengurus::create($pengurus);
        }
    }
}