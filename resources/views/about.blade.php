@extends('layouts.app')

@section('title', 'Tentang Pembuat | HMPSIF')

@section('content')
<main class="section">
    <div class="container">
        <div class="text-center mb-5">
            <div class="eyebrow">Tim pengembang</div>
            <h2 class="section-title">Kenalan dengan pembuatnya.</h2>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-md-6 col-lg-5">
                <article class="about-card card card-modern p-4 text-center">
                    <img src="{{ asset('assets/img/foto-pengurus/nauval.JPG') }}" alt="Nauval" class="creator-photo rounded-circle mx-auto mb-3" style="width:120px;height:120px;object-fit:cover;">
                    <h3 class="h5 fw-bold mb-1">Nauval Hibrizi Hakim</h3>
                    <p class="text-primary fw-semibold mb-3">UI/UX & Frontend Developer</p>
                </article>
            </div>
            <div class="col-md-6 col-lg-5">
                <article class="about-card card card-modern p-4 text-center">
                    <img src="{{ asset('assets/img/foto-pengurus/zaky.JPG') }}" alt="Zaky" class="creator-photo rounded-circle mx-auto mb-3" style="width:120px;height:120px;object-fit:cover;">
                    <h3 class="h5 fw-bold mb-1">Zaky Ahmad Alkam Mushoffa</h3>
                    <p class="text-primary fw-semibold mb-3">Web & Backend Developer</p>
                </article>
            </div>
        </div>
    </div>
</main>
@endsection