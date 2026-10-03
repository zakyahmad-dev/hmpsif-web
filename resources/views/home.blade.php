@extends('layouts.app')

@section('title', 'HMPSIF — Tumbuh Bersama, Berdampak Nyata')

@section('content')
<main>
    <!-- Hero Section Clean & Modern -->
    <header class="py-5 my-4">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <span class="eyebrow mb-3">Himpunan Mahasiswa Informatika · UNISNU Jepara</span>
                    <h1 class="fw-extrabold display-4 my-3 text-slate-900">Belajar Bareng.<br><span class="text-primary">Berkarya Lebih Luas.</span></h1>
                    <p class="text-muted lead mb-4">Ruang kolaborasi mahasiswa Informatika untuk mengasah kemampuan, menemukan teman seperjalanan, dan menghadirkan karya yang bermanfaat.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a class="btn btn-blue-primary rounded-pill px-4 py-2" href="{{ route('tentang') }}">Kenali HMPSIF <i class="fa-solid fa-arrow-right ms-1"></i></a>
                        <a class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold" href="{{ route('program.index') }}">Jelajahi Program</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <div class="card card-modern overflow-hidden p-2 shadow-lg">
                            <img class="w-100 rounded-4 object-fit-cover" style="max-height: 400px;" src="{{ asset('assets/img/semnas.jpeg') }}" alt="Kebersamaan HMPSIF">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Ringkasan Metric -->
    <section class="py-5" style="background: var(--primary-light);">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold text-primary display-6 mb-0">{{ number_format($counts['anggota'], 0, ',', '.') }}</h3>
                    <small class="text-muted fw-semibold">Anggota Terdata</small>
                </div>
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold text-primary display-6 mb-0">{{ number_format($counts['divisi'], 0, ',', '.') }}</h3>
                    <small class="text-muted fw-semibold">Divisi Kepengurusan</small>
                </div>
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold text-primary display-6 mb-0">{{ number_format($counts['program_kerja'], 0, ',', '.') }}</h3>
                    <small class="text-muted fw-semibold">Program Kerja</small>
                </div>
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold text-primary display-6 mb-0">{{ number_format($counts['kegiatan'], 0, ',', '.') }}</h3>
                    <small class="text-muted fw-semibold">Kegiatan Tercatat</small>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Kerja Utama -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div>
                    <span class="eyebrow mb-2">Dari Ide Jadi Aksi</span>
                    <h2 class="h3 fw-bold m-0">Program Kerja Unggulan</h2>
                </div>
                <a href="{{ route('program.index') }}" class="text-primary fw-bold text-decoration-none">Lihat Semua →</a>
            </div>

            @if($programs->count())
                <div class="row g-4">
                    @foreach($programs as $index => $program)
                        <div class="col-md-6 col-lg-4">
                            <article class="card card-modern h-100 p-3">
                                <img src="{{ asset($program->banner ?: 'assets/img/workshop.jpeg') }}" class="w-100 rounded-3 mb-3 object-fit-cover" style="height: 180px;" alt="{{ $program->nama }}">
                                <span class="badge bg-primary-subtle text-primary rounded-pill w-auto align-self-start px-3 py-1 mb-2">{{ $program->status ?: 'Program' }}</span>
                                <h3 class="h5 fw-bold mb-2">{{ $program->nama }}</h3>
                                <p class="text-muted small clamp-3 mb-3">{{ $program->deskripsi }}</p>
                                <a href="{{ route('program.show', $program->id) }}" class="fw-bold text-primary text-decoration-none mt-auto">Detail Program →</a>
                            </article>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</main>
@endsection