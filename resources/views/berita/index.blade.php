@extends('layouts.app')

@section('title', 'Berita | HMPSIF')

@section('content')
<main class="section">
    <div class="container">
        <header class="page-intro">
            <div class="eyebrow">Kabar dari kami</div>
            <h1 class="section-title">Cerita terbaru HMPSIF.</h1>
        </header>

        @if($articles->count())
            <div class="row g-4">
                @foreach($articles as $article)
                    <div class="col-md-6 col-lg-4">
                        <article class="card card-modern overflow-hidden">
                            <img src="{{ asset($article->thumbnail ?: 'assets/img/placeholder.svg') }}" class="news-img" alt="{{ $article->judul }}">
                            <div class="card-body p-4">
                                <h2 class="h5 fw-bold mt-3">{{ $article->judul }}</h2>
                                <p class="text-muted">{{ $article->ringkasan }}</p>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state"><h2 class="h5 fw-bold">Belum ada berita</h2></div>
        @endif
    </div>
</main>
@endsection