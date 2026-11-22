<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - MADE RYAN PUTRA PARAMARTHA</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <script src="{{ asset('js/theme.js') }}"></script>
  @vite('resources/sass/app.scss')
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg bg-theme" data-bs-theme="dark">
    <!-- Container -->
    <div class="container py-2 px-4">
      <!-- Navbar Brand -->
      <a href="{{ route('portofolio.beranda') }}" class="navbar-brand mb-0 h1 d-flex align-items-center">
        <img class="rounded-circle me-2" src="{{ asset('img/avatar.jpg') }}" alt="Foto profil" style="width: 40px; height: 40px; object-fit: cover; object-position: center 20%;">
        <span class="fs-6 fw-bold">MADE RYAN PUTRA PARAMARTHA</span>
      </a>

      <!-- Navbar Toggler -->
      <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Buka menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Offcanvas -->
      <div class="offcanvas offcanvas-end bg-theme" id="offcanvasNavbar" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
        <!-- Offcanvas Header -->
        <div class="offcanvas-header pb-0 px-4">
          <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Tutup"></button>
        </div>

        <!-- Offcanvas Body -->
        <div class="offcanvas-body pt-0 px-4">
          <hr class="d-lg-none text-white-50"> <!-- Horizontal Line -->

          <!-- Top Menu -->
          <ul class="navbar-nav flex-row flex-wrap">
            <li class="nav-item col-6 col-md-auto"><a href="{{ route('portofolio.beranda') }}" class="nav-link {{ request()->routeIs('portofolio.beranda') ? 'active' : '' }}">Beranda</a></li>
            <li class="nav-item col-6 col-md-auto"><a href="{{ route('portofolio.profil') }}" class="nav-link {{ request()->routeIs('portofolio.profil') ? 'active' : '' }}">Profil</a></li>
            <li class="nav-item col-6 col-md-auto"><a href="{{ route('portofolio.proyek') }}" class="nav-link {{ request()->routeIs('portofolio.proyek') ? 'active' : '' }}">Portofolio</a></li>
            <li class="nav-item col-6 col-md-auto"><a href="{{ route('portofolio.kontak') }}" class="nav-link {{ request()->routeIs('portofolio.kontak') ? 'active' : '' }}">Kontak</a></li>
          </ul>

          <hr class="d-lg-none text-white-50"> <!-- Horizontal Line -->

          <!-- Sosial Media -->
          <ul class="navbar-nav flex-row flex-wrap ms-lg-auto">
            <li class="nav-item col-6 col-lg-auto">
              <a href="https://github.com/Ryanputraparamartha" class="nav-link"><i class="bi-github"></i><small class="ms-2 d-lg-none">GitHub</small></a>
            </li>
            <li class="nav-item col-6 col-lg-auto">
              <a href="https://www.linkedin.com/in/made-ryan-putra-paramartha-949601417" class="nav-link"><i class="bi-linkedin"></i><small class="ms-2 d-lg-none">LinkedIn</small></a>
            </li>
            <li class="nav-item col-6 col-lg-auto">
              <a href="mailto:maderyanputra@student.telkomuniversity.ac.id" class="nav-link"><i class="bi-envelope-fill"></i><small class="ms-2 d-lg-none">Email</small></a>
            </li>
            <li class="nav-item col-12 col-lg-auto">
              <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
              <hr class="d-lg-none my-2 text-white-50">
            </li>
            <li class="nav-item">
              <!-- Dropdown Tema -->
              <div class="dropdown" data-bs-theme="light">
                <button type="button" class="btn nav-link text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi-circle-half"></i><span class="d-lg-none ms-2">Ganti tema</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><button class="dropdown-item" type="button" data-theme-value="light"><small><i class="bi-brightness-high-fill me-2"></i>Terang</small></button></li>
                  <li><button class="dropdown-item" type="button" data-theme-value="dark"><small><i class="bi-moon-stars-fill me-2"></i>Gelap</small></button></li>
                  <li><button class="dropdown-item" type="button" data-theme-value="auto"><small><i class="bi-circle-half me-2"></i>Otomatis</small></button></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  @yield('konten')

  <!-- Footer -->
  <div id="footer" class="bg-body-tertiary py-5">
    <!-- Container -->
    <div class="container py-5 px-4">
      <div class="row">
        <div class="col-lg-4 mb-5">
          <a href="{{ route('portofolio.beranda') }}" class="logo text-decoration-none">
            <div class="d-flex align-items-center">
              <img class="rounded-circle" src="{{ asset('img/avatar.jpg') }}" alt="Foto profil" style="width: 40px; height: 40px; object-fit: cover; object-position: center 20%;">
              <div class="fs-5 ms-2">Made Ryan</div>
            </div>
          </a>
          <div class="mt-2 text-body-secondary"><small>MADE RYAN PUTRA PARAMARTHA_108052500009</small></div>
          <div class="mt-2 text-body-secondary"><small>Mahasiswa S1 Sistem Informasi, Telkom University Surabaya.</small></div>
          <div class="mt-2 text-body-secondary"><small>Hosted on ryanputra.lab — Nginx on Rocky Linux</small></div>
        </div>
        <div class="col-6 col-lg-2 offset-lg-1 mb-5">
          <h5>Halaman</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="{{ route('portofolio.beranda') }}">Beranda</a></li>
            <li class="mb-2"><a href="{{ route('portofolio.profil') }}">Profil</a></li>
            <li class="mb-2"><a href="{{ route('portofolio.proyek') }}">Portofolio</a></li>
            <li class="mb-2"><a href="{{ route('portofolio.kontak') }}">Kontak</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-5">
          <h5>Proyek</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="{{ route('portofolio.proyek') }}">Aplikasi Sampah</a></li>
            <li class="mb-2"><a href="{{ route('portofolio.proyek') }}">Clone Nike</a></li>
            <li class="mb-2"><a href="{{ route('portofolio.proyek') }}">Web HTML &amp; CSS</a></li>
            <li class="mb-2"><a href="{{ route('portofolio.proyek') }}">Web &amp; DNS Server</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-5">
          <h5>Kontak</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="mailto:maderyanputra@student.telkomuniversity.ac.id">Email</a></li>
            <li class="mb-2"><a href="https://www.linkedin.com/in/made-ryan-putra-paramartha-949601417">LinkedIn</a></li>
            <li class="mb-2"><a href="https://github.com/Ryanputraparamartha">GitHub</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  @vite('resources/js/app.js')
</body>
</html>
