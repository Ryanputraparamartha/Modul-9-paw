@extends('portofolio.layout')

@section('title', 'Profil')

@section('konten')
  <!-- Main -->
  <div class="bg-body-tertiary mt-5" id="main">
    <div class="container py-5 px-4">
      <h1 class="display-4 fw-bold">Profil</h1>
      <p class="fs-5 mt-3 mb-0">Saya mahasiswa Telkom University Surabaya yang memiliki ambisi untuk terus melangkah ke depan dan meraih kesuksesan.</p>
    </div>
  </div>

  <!-- Detail Profil -->
  <div id="detail">
    <div class="container py-5 px-4">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="mb-3"><i class="bi bi-mortarboard-fill fs-2 bg-warning py-2 px-3 rounded-3 text-white"></i></div>
          <h2 class="h3">Pendidikan</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent">Telkom University Surabaya, S1 Sistem Informasi (masuk 2025)</li>
            <li class="list-group-item bg-transparent">SMAN 4 Denpasar (lulus 2025)</li>
          </ul>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="mb-3"><i class="bi bi-code-slash fs-2 bg-info py-2 px-3 rounded-3 text-white"></i></div>
          <h2 class="h3">Keahlian</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent">Membuat website dengan HTML, CSS, dan JavaScript</li>
            <li class="list-group-item bg-transparent">Merancang desain UI/UX</li>
            <li class="list-group-item bg-transparent">Membuat desain interior</li>
          </ul>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="mb-3"><i class="bi bi-lightbulb-fill fs-2 bg-success py-2 px-3 rounded-3 text-white"></i></div>
          <h2 class="h3">Minat</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent">Perancangan website</li>
            <li class="list-group-item bg-transparent">Bisnis</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
