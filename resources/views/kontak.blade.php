@extends('layouts.app')

@section('title', 'Kontak | HMPSIF')

@section('content')
<main class="section">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5">
                <h1 class="section-title">Mari mulai percakapan.</h1>
                <p>Punya pertanyaan atau ide kolaborasi? Hubungi kami.</p>
            </div>
            <div class="col-lg-7">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="card card-modern p-4 p-md-5">
                    <form method="post" action="{{ route('kontak.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6"><input required name="nama" class="form-control" placeholder="Nama"></div>
                            <div class="col-md-6"><input required type="email" name="email" class="form-control" placeholder="Email"></div>
                            <div class="col-12"><input required name="subjek" class="form-control" placeholder="Subjek"></div>
                            <div class="col-12"><textarea required name="pesan" class="form-control" rows="5" placeholder="Pesan"></textarea></div>
                            <div class="col-12"><button class="btn btn-primary px-4" type="submit">Kirim pesan →</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection