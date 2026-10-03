@extends('layouts.app')

@section('title', 'Program Kerja | HMPSIF UNISNU')

@section('content')
<main class="py-5">
    <div class="container">
        <header class="mb-5">
            <span class="eyebrow mb-2">Inisiatif & Karya</span>
            <h1 class="fw-extrabold display-5 mb-3">Program Kerja HMPSIF</h1>
            <p class="text-muted lead">Rangkaian program berorientasi pada pengembangan skil teknis, softskill, dan pengabdian.</p>
        </header>

        <form method="GET" class="card card-modern p-3 mb-5 shadow-sm">
            <div class="row g-2">
                <div class="col-12 col-md-5">
                    <input type="text" name="q" class="form-control border-0 bg-light rounded-3 py-2 px-3" placeholder="Cari nama program..." value="{{ request('q') }}">
                </div>
                <div class="col-6 col-md-3">
                    <select name="divisi" class="form-select border-0 bg-light rounded-3 py-2">
                        <option value="">Semua Divisi</option>
                        <option value="PSDM">PSDM</option>
                        <option value="Kominfo">Kominfo</option>
                        <option value="Pendidikan">Pendidikan</option>
                    </select>
                </div>
                <div class="col-6 col-md-4">
                    <button type="submit" class="btn btn-blue-primary rounded-3 w-100 py-2">Filter Program</button>
                </div>
            </div>
        </form>

        <div class="row g-4">
            @forelse($programs as $program)
                <div class="col-md-6 col-lg-4">
                    <article class="card card-modern h-100 overflow-hidden d-flex flex-column">
                        <div class="position-relative" style="height: 200px; background: #E2E8F0;">
                            <img src="{{ asset($program->banner ?: 'assets/img/placeholder.svg') }}" alt="{{ $program->nama }}" class="w-100 h-100 object-fit-cover">
                            <span class="position-absolute top-0 end-0 m-3 badge bg-white text-primary shadow-sm rounded-pill px-3 py-2 fw-bold" style="font-size: 0.75rem;">
                                {{ $program->status ?: 'Aktif' }}
                            </span>
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <small class="text-primary fw-bold mb-2">{{ $program->divisi ?: 'HMPSIF' }} • {{ $program->tahun }}</small>
                            <h2 class="h5 fw-bold mb-2 text-slate-900">{{ $program->nama }}</h2>
                            <p class="text-muted small clamp-3 mb-4 flex-grow-1">{{ $program->deskripsi }}</p>
                            <a href="{{ route('program.show', $program->id) }}" class="fw-bold text-primary text-decoration-none mt-auto">
                                Detail Selengkapnya <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">Tidak ada program kerja yang ditemukan.</p>
                </div>
            @endforelse
        </div>
    </div>
</main>
@endsection