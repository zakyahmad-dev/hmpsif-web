<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'HMPSIF UNISNU' }}</title>

    <!-- 1. Bootstrap CSS & FontAwesome CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- 2. CSS Custom Lokal Kamu (Sesuaikan path file CSS di public/) -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="bg-light">

    <!-- Header & Navbar (sticky-top agar menempel tanpa menimpa konten) -->
    <header class="sticky-top px-3 px-md-4 pt-3 bg-light">
        <nav class="navbar navbar-expand-lg rounded-4 custom-navbar shadow-sm bg-white">
            <div class="container-fluid px-2 px-md-3">
                <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ route('home') }}" style="color: var(--dark-slate);">
                    <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo HMPSIF" style="height: 38px;">
                    <div class="d-flex flex-column" style="line-height: 1.1;">
                        <span style="font-size: 1.1rem; letter-spacing: -0.02em;">HMPSIF</span>
                        <small class="text-muted fw-normal" style="font-size: 0.72rem;">UNISNU Jepara</small>
                    </div>
                </a>

                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav mx-auto gap-lg-1 my-3 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-3 rounded-3 nav-link-blue {{ request()->routeIs('home') ? 'active-blue' : '' }}" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 rounded-3 nav-link-blue {{ request()->routeIs('tentang') ? 'active-blue' : '' }}" href="{{ route('tentang') }}">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 rounded-3 nav-link-blue {{ request()->routeIs('pengurus.*') ? 'active-blue' : '' }}" href="{{ route('pengurus.index') }}">Organisasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 rounded-3 nav-link-blue {{ request()->routeIs('program.*') ? 'active-blue' : '' }}" href="{{ route('program.index') }}">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 rounded-3 nav-link-blue {{ request()->routeIs('kegiatan.*') ? 'active-blue' : '' }}" href="{{ route('kegiatan.index') }}">Kegiatan</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-3 rounded-3 nav-link-blue {{ request()->routeIs('berita.*', 'galeri.*', 'kontak.*', 'about') ? 'active-blue' : '' }}" href="#" id="exploreMenu" data-bs-toggle="dropdown">Jelajahi</a>
                            <ul class="dropdown-menu border-0 shadow-lg rounded-4 p-2 mt-2">
                                <li><a class="dropdown-item rounded-3 py-2 px-3 fw-medium" href="{{ route('berita.index') }}"><i class="fa-regular fa-newspaper me-2 text-primary"></i>Berita Terbaru</a></li>
                                <li><a class="dropdown-item rounded-3 py-2 px-3 fw-medium" href="{{ route('galeri.index') }}"><i class="fa-regular fa-images me-2 text-primary"></i>Galeri Kegiatan</a></li>
                                <li><a class="dropdown-item rounded-3 py-2 px-3 fw-medium" href="{{ route('kontak.create') }}"><i class="fa-regular fa-envelope me-2 text-primary"></i>Kontak Kami</a></li>
                                <li><hr class="dropdown-divider opacity-10"></li>
                                <li><a class="dropdown-item rounded-3 py-2 px-3 fw-medium" href="{{ route('about') }}"><i class="fa-solid fa-code me-2 text-primary"></i>Tentang Pembuat</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="d-flex align-items-center gap-2">
                        <a class="btn btn-blue-primary rounded-pill px-4 py-2" href="{{ route('gabung.create') }}">
                            Gabung HMPSIF <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Pembungkus Utama Konten -->
    <main class="container-fluid px-3 px-md-4 pt-4 pb-5">
        @yield('content')
    </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>