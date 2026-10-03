<footer class="site-footer py-5 mt-5">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-5">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <span class="badge bg-primary text-white rounded-3 px-2 py-1 fw-bold">IF</span>
                    <span class="h5 fw-bold text-white mb-0">HMPSIF UNISNU</span>
                </div>
                <p class="small me-lg-5">Himpunan Mahasiswa Program Studi Informatika, Universitas Islam Nahdlatul Ulama Jepara. Wadah resmi pengembangan potensi akademik dan organisasi.</p>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="mb-3">Navigasi</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 small">
                    <li><a href="{{ route('tentang') }}" class="footer-link">Tentang Kami</a></li>
                    <li><a href="{{ route('pengurus.index') }}" class="footer-link">Pengurus</a></li>
                    <li><a href="{{ route('program.index') }}" class="footer-link">Program Kerja</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="mb-3">Aktivitas</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 small">
                    <li><a href="{{ route('kegiatan.index') }}" class="footer-link">Kegiatan</a></li>
                    <li><a href="{{ route('berita.index') }}" class="footer-link">Berita</a></li>
                    <li><a href="{{ route('galeri.index') }}" class="footer-link">Galeri</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6 class="mb-3">Kontak Resmi</h6>
                <p class="small mb-1"><i class="fa-regular fa-envelope me-2 text-primary"></i>hmpsif@unisnu.ac.id</p>
                <p class="small"><i class="fa-solid fa-location-dot me-2 text-primary"></i>Gedung Fakultas Sains & Teknologi UNISNU Jepara</p>
            </div>
        </div>
        <div class="pt-4 border-top border-secondary border-opacity-25 text-center small">
            <p class="m-0">© {{ date('Y') }} HMPSIF UNISNU Jepara. Built with Laravel 13 & Bootstrap 5.</p>
        </div>
    </div>
</footer>