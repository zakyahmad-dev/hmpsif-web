@extends('layouts.app')

@section('title', 'Pendaftaran Anggota | HMPSIF')

@section('content')
<main class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <span class="eyebrow mb-3">Open Recruitment</span>
                <h1 class="fw-extrabold display-5 mb-4">Mari Bertumbuh Bersama HMPSIF</h1>
                <p class="text-muted lead mb-4">Dapatkan pengalaman berorganisasi, koneksi relasi lintas angkatan, serta portofolio kegiatan nyata selama berkuliah di UNISNU Jepara.</p>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-blue-subtle text-primary p-3 d-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <div>
                            <h2 class="h6 fw-bold mb-0">Eksplorasi Skil</h2>
                            <small class="text-muted">Asah kemampuan teknis & manajerial</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card card-modern p-4 p-md-5 shadow-lg">
                    <h2 class="h4 fw-bold mb-4">Formulir Pendaftaran</h2>
                    @if(session('success'))
                        <div class="alert alert-success rounded-3 mb-4" role="status">{{ session('success') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger rounded-3 mb-4" role="alert">
                            <p class="fw-bold mb-1">Periksa kembali data yang diisi:</p>
                            <ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                        </div>
                    @endif
                    <form action="{{ route('gabung.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control rounded-3 py-2" value="{{ old('nama') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">NIM</label>
                                <input type="text" name="nim" class="form-control rounded-3 py-2" value="{{ old('nim') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Semester</label>
                                <input type="number" name="semester" min="1" max="14" step="1" class="form-control rounded-3 py-2" value="{{ old('semester') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Kelas</label>
                                <input type="text" name="kelas" class="form-control rounded-3 py-2" value="{{ old('kelas') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">No. WhatsApp</label>
                                <input type="text" name="whatsapp" class="form-control rounded-3 py-2" value="{{ old('whatsapp') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Email UNISNU</label>
                                <input type="email" name="email" class="form-control rounded-3 py-2" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold">Pilihan Divisi</label>
                                <select name="divisi" class="form-select rounded-3 py-2" required>
                                    @foreach($departments as $dept)
                                        <option value="{{ $dept }}" {{ old('divisi') === $dept ? 'selected' : '' }}>{{ $dept }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold">Alasan Ingin Bergabung</label>
                                <textarea name="alasan" rows="3" class="form-control rounded-3" required>{{ old('alasan') }}</textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input type="checkbox" name="agree" id="agree" class="form-check-input" value="1" {{ old('agree') ? 'checked' : '' }} required>
                                    <label for="agree" class="form-check-label small text-muted">Saya menyatakan data yang diisi adalah benar.</label>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-blue-primary w-100 py-3 rounded-3">Kirim Pendaftaran</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection