@extends('layouts.app')

@section('title', $program->nama . ' | HMPSIF')

@section('content')
<main class="section">
    <div class="container">
        <a class="card-link mb-4" href="{{ route('program.index') }}">← Kembali ke program kerja</a>
        <img src="{{ asset($program->banner ?: 'assets/img/placeholder.svg') }}" class="detail-banner w-100 rounded-4 mb-4" alt="{{ $program->nama }}">
        <div class="row g-4 align-items-start">
            <div class="col-lg-8">
                <span class="badge-soft">{{ $program->status ?: 'Program kerja' }}</span>
                <h1 class="section-title mt-3">{{ $program->nama }}</h1>
                <p class="lead text-muted">{{ $program->deskripsi }}</p>
                <article class="card card-modern p-4 p-lg-5 mt-4">
                    <h2 class="h4 fw-bold">Tentang program</h2>
                    <div class="text-muted mb-0">{!! nl2br(e($program->detail ?: $program->deskripsi)) !!}</div>
                </article>
            </div>
            <aside class="col-lg-4">
                <div class="card card-modern p-4">
                    <h2 class="h5 fw-bold mb-3">Informasi program</h2>
                    <dl class="detail-list mb-4">
                        <div><dt>Divisi</dt><dd>{{ $program->divisi ?: '—' }}</dd></div>
                        <div><dt>Tahun</dt><dd>{{ $program->tahun ?: '—' }}</dd></div>
                        <div><dt>Waktu</dt><dd>{{ $program->waktu ?: 'Informasi menyusul' }}</dd></div>
                        <div><dt>Tempat</dt><dd>{{ $program->tempat ?: 'Informasi menyusul' }}</dd></div>
                    </dl>
                    <a href="{{ route('gabung.create') }}" class="btn btn-primary w-100">Gabung dengan HMPSIF →</a>
                </div>
            </aside>
        </div>
    </div>
</main>
@endsection