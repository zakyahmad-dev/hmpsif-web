<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'HMPSIF UNISNU Jepara')</title>
    
    <!-- Font & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Modern CSS -->
    <link href="{{ asset('assets/css/style_modern.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Include Partial Navbar -->
    @include('partials.navbar')

    <!-- Dynamic Content -->
    <div class="flex-grow-1">
        @yield('content')
    </div>

    <!-- Include Partial Footer -->
    @include('partials.footer')

    <!-- Bootstrap 5.3 JS Bundle (Termasuk PopperJS untuk Dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Inisialisasi Otomatis Dropdown Bootstrap -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
            var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
                return new bootstrap.Dropdown(dropdownToggleEl);
            });
        });
    </script>
</body>
</html>