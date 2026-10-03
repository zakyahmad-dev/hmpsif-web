@extends('layouts.app')

@section('title', 'Struktur Pengurus | HMPSIF UNISNU')

@section('content')
<main class="py-5">
    <div class="container">
        <header class="text-center max-w-2xl mx-auto mb-5">
            <span class="eyebrow mb-2">Kabinet & Struktur</span>
            <h1 class="fw-extrabold display-5 text-slate-900 mb-3">Penggerak HMPSIF</h1>
            <p class="text-muted lead">Para mahasiswa yang mendedikasikan waktu dan gagasan untuk memajukan komunitas Informatika UNISNU Jepara.</p>
        </header>

        @if(empty($divisiTampil))
            <div class="alert alert-info rounded-4 text-center py-4">Belum ada data pengurus yang dimasukkan.</div>
        @else
            @foreach($divisiTampil as $namaDivisi => $anggota)
                <section class="mb-5">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <h2 class="h4 fw-bold m-0 text-primary">{{ $namaDivisi }}</h2>
                        <div class="flex-grow-1 border-bottom border-2 border-primary-light"></div>
                    </div>
                    <div class="row g-4">
                        @foreach($anggota as $r)
                            <div class="col-6 col-md-4 col-lg-3">
                                <article class="card card-modern h-100 p-3 text-center">
                                    <div class="position-relative overflow-hidden rounded-4 mb-3" style="aspect-ratio: 1/1; background: var(--primary-light);">
                                        <img src="{{ asset($r->foto ?: 'assets/img/avatar.svg') }}" alt="{{ $r->nama }}" class="w-100 h-100 object-fit-cover">
                                    </div>
                                    <h3 class="h6 fw-bold mb-1 text-slate-900">{{ $r->nama }}</h3>
                                    <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1 fw-semibold mb-2" style="font-size: 0.75rem;">{{ $r->jabatan }}</span>
                                    @if($r->deskripsi)
                                        <p class="small text-muted mb-0 clamp-3">{{ $r->deskripsi }}</p>
                                    @endif
                                </article>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endforeach
        @endif
    </div>
</main>
@endsection