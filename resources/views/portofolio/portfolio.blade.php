@extends('portofolio.layout')

@section('title', 'Portofolio')

@section('konten')
  <!-- Main -->
  <div class="bg-body-tertiary mt-5" id="main">
    <div class="container py-5 px-4">
      <h1 class="display-4 fw-bold">Portofolio</h1>
      <p class="fs-5 mt-3 mb-0">Proyek dan tugas kuliah yang pernah saya kerjakan.</p>
    </div>
  </div>

  <!-- Proyek -->
  <div id="proyek">
    <div class="container py-5 px-4">
      <div class="mb-3"><i class="bi bi-folder-fill fs-2 bg-info py-2 px-3 rounded-3 text-white"></i></div>
      <h2 class="mb-4">Proyek</h2>
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col"><div class="card card-accent h-100"><div class="card-body"><h3 class="h5 card-title">Desain Aplikasi Sampah</h3><p class="card-text text-body-secondary mb-0">Merancang desain aplikasi sampah secara berkelompok menggunakan Figma.</p></div></div></div>
        <div class="col"><div class="card card-accent h-100"><div class="card-body"><h3 class="h5 card-title">Clone Website Nike Indonesia</h3><p class="card-text text-body-secondary mb-0">Membuat ulang tampilan awal website Nike Indonesia menggunakan HTML, CSS, dan JavaScript.</p></div></div></div>
        <div class="col"><div class="card card-accent h-100"><div class="card-body"><h3 class="h5 card-title">Website HTML dan CSS</h3><p class="card-text text-body-secondary mb-0">Membuat website menggunakan HTML dan CSS.</p></div></div></div>
      </div>
    </div>
  </div>

  <!-- Proyek UTS -->
  <div id="uts">
    <div class="container pb-5 px-4">
      <div class="mb-3"><i class="bi bi-hdd-network-fill fs-2 bg-warning py-2 px-3 rounded-3 text-white"></i></div>
      <h2 class="mb-4">Proyek UTS ini</h2>
      <div class="card card-accent mb-3"><div class="card-body"><h3 class="h5 card-title">Web Server dan DNS Server di Rocky Linux</h3><p class="card-text text-body-secondary mb-0">Nginx dan BIND pada satu VM, diakses lewat domain lokal ryanputra.lab dan ryanputra.sisjarlab.io.</p></div></div>
    </div>
  </div>
@endsection
