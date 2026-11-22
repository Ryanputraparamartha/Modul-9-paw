@extends('portofolio.layout')

@section('title', 'Beranda')

@section('konten')
  <!-- Main -->
  <div class="bg-body-tertiary mt-5" id="main">
    <!-- Container -->
    <div class="container py-5 px-4">
      <div class="row align-items-center">
        <div class="col-md-5 order-md-2 text-center mb-4 mb-md-0">
          <img class="avatar img-fluid rounded-circle" src="{{ asset('img/avatar.jpg') }}" alt="Foto MADE RYAN PUTRA PARAMARTHA">
        </div>
        <div class="col-md-7 order-md-1">
          <h1 class="mt-4 display-4 fw-bold">MADE RYAN PUTRA PARAMARTHA</h1>
          <p class="fs-5 mt-3">Saya mahasiswa S1 Sistem Informasi dan sangat menyukai jurusan ini. Sistem Informasi berbeda dengan prodi lain karena menuntut kita menggabungkan seluruh unsur pembelajaran yang ada.</p>
          <p class="fs-5">Saat ini saya mempelajari Web Server dan DNS Server (Rocky Linux) pada mata kuliah Sistem Operasi.</p>
          <div class="row">
            <div class="d-flex flex-column flex-md-row">
              <a href="{{ route('portofolio.proyek') }}" class="btn bg-theme text-white btn-lg mb-3 me-md-3 px-4 py-3">Lihat Portofolio</a>
              <a href="{{ route('portofolio.kontak') }}" class="btn btn-outline-secondary btn-lg mb-3 px-4 py-3">Hubungi Saya</a>
            </div>
          </div>
          <div class="text-body-secondary">
            NIM <strong>108052500009</strong> · S1 Sistem Informasi · <a href="{{ route('portofolio.profil') }}">Telkom University Surabaya</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Profil -->
  <div id="profil">
    <!-- Container -->
    <div class="container py-5 px-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="mb-3">
            <i class="bi bi-person-fill fs-2 bg-warning py-2 px-3 rounded-3 text-white"></i>
          </div>
          <h2 class="display-5 mb-3">Kenali saya lewat<br/>halaman Profil</h2>
          <p class="fs-5">Saya mahasiswa Telkom University Surabaya yang memiliki ambisi untuk terus melangkah ke depan dan meraih kesuksesan. Saya menekuni pembuatan website dengan HTML, CSS, dan JavaScript, desain UI/UX, serta desain interior.</p>
          <a class="icon-link icon-link-hover lead fw-semibold mb-5" href="{{ route('portofolio.profil') }}">
            Lihat profil lengkap
            <i class="bi bi-arrow-right mb-2"></i>
          </a>
        </div>
        <div class="col-lg-6">
          <div class="card card-accent mb-3"><div class="card-body">
            <h3 class="h5 card-title"><i class="bi bi-mortarboard-fill me-2 text-accent"></i>Pendidikan</h3>
            <p class="card-text mb-1">Telkom University Surabaya, S1 Sistem Informasi (masuk 2025)</p>
            <p class="card-text mb-0">SMAN 4 Denpasar (lulus 2025)</p>
          </div></div>
          <div class="card card-accent"><div class="card-body">
            <h3 class="h5 card-title"><i class="bi bi-lightbulb-fill me-2 text-accent"></i>Minat</h3>
            <p class="card-text mb-0">Perancangan website dan bisnis</p>
          </div></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portofolio -->
  <div id="portofolio">
    <!-- Container -->
    <div class="container py-5 px-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="mb-3 mt-5">
            <i class="bi bi-folder-fill fs-2 bg-info py-2 px-3 rounded-3 text-white"></i>
          </div>
          <h2 class="display-5">Proyek dan tugas kuliah yang saya kerjakan</h2>
          <p class="fs-5">Mulai dari desain aplikasi di Figma, clone website Nike Indonesia, sampai proyek UTS Web Server dan DNS Server di Rocky Linux.</p>
          <a class="icon-link icon-link-hover lead fw-semibold mb-5" href="{{ route('portofolio.proyek') }}">
            Lihat semua proyek
            <i class="bi bi-arrow-right mb-2"></i>
          </a>
        </div>
        <div class="col-lg-6 mt-lg-5">
          <div class="card card-accent mb-3"><div class="card-body"><h3 class="h5 card-title">Desain Aplikasi Sampah</h3><p class="card-text text-body-secondary mb-0">Dirancang berkelompok menggunakan Figma.</p></div></div>
          <div class="card card-accent mb-3"><div class="card-body"><h3 class="h5 card-title">Clone Website Nike Indonesia</h3><p class="card-text text-body-secondary mb-0">HTML, CSS, dan JavaScript.</p></div></div>
          <div class="card card-accent mb-3"><div class="card-body"><h3 class="h5 card-title">Web Server dan DNS Server</h3><p class="card-text text-body-secondary mb-0">Nginx dan BIND di Rocky Linux.</p></div></div>
        </div>
      </div>
    </div>
  </div>
@endsection 
