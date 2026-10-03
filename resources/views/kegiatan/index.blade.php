@extends('layouts.app')

@section('title', 'Kegiatan | HMPSIF')

@section('content')
<main class="section">
    <div class="container">
        <header class="page-intro">
            <div class="eyebrow">Aktivitas mahasiswa</div>
            <h1 class="section-title">Belajar tak hanya di kelas.</h1>
        </header>

        <form class="filter-panel" method="get">
            <div class="input-group">
                <input name="q" value="{{ $q }}" class="form-control" placeholder="Cari kegiatan...">
                <button class="btn btn-primary px-4" type="submit">Cari</button>
            </div>
        </form>

        @if($activities->count())
            <div class="row g-4 mt-2">
                @foreach($activities as $activity)
                    <div class="col-md-6 col-lg-4">
                        <article class="card card-modern overflow-hidden">
                            <img src="{{ asset($activity->poster ?: 'assets/img/placeholder.svg') }}" class="program-img" alt="{{ $activity->nama }}">
                            <div class="card-body p-4">
                                <div class="card-meta mb-2"><span>{{ $activity->tanggal }}</span> · <span>{{ $activity->lokasi ?: 'Lokasi menyusul' }}</span></div>
                                <h2 class="h5 fw-bold mt-2">{{ $activity->nama }}</h2>
                                <p class="text-muted">{{ $activity->deskripsi }}</p>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state mt-4"><h2 class="h5 fw-bold">Kegiatan belum ditemukan</h2></div>
        @endif
    </div>
</main>
@endsection