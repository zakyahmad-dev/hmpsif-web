@extends('layouts.app')

@section('title', 'Galeri | HMPSIF')

@section('content')
<main class="section">
    <div class="container">
        <header class="page-intro">
            <div class="eyebrow">Potongan cerita</div>
            <h1 class="section-title">Momen bersama HMPSIF.</h1>
        </header>

        @if($photos->count())
            <div class="row g-3">
                @foreach($photos as $photo)
                    <div class="col-6 col-lg-4">
                        <figure class="gallery-figure m-0 h-100">
                            <img src="{{ asset($photo->foto) }}" class="gallery-img rounded-3" alt="{{ $photo->judul }}">
                        </figure>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state"><h2 class="h5 fw-bold">Galeri sedang disiapkan</h2></div>
        @endif
    </div>
</main>
@endsection