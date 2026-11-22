@extends('portofolio.layout')

@section('title', 'Kontak')

@section('konten')
  <!-- Main -->
  <div class="bg-body-tertiary mt-5" id="main">
    <div class="container py-5 px-4">
      <h1 class="display-4 fw-bold">Kontak</h1>
      <p class="fs-5 mt-3 mb-0">Hubungi saya lewat kanal berikut.</p>
    </div>
  </div>

  <!-- Daftar Kontak -->
  <div id="kontak">
    <div class="container py-5 px-4">
      <div class="list-group">
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="mailto:maderyanputra@student.telkomuniversity.ac.id">
          <i class="bi bi-envelope-fill fs-4 me-3 text-accent"></i>
          <span><strong class="d-block">Email kampus</strong>maderyanputra@student.telkomuniversity.ac.id</span>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="https://www.linkedin.com/in/made-ryan-putra-paramartha-949601417">
          <i class="bi bi-linkedin fs-4 me-3 text-accent"></i>
          <span><strong class="d-block">LinkedIn</strong>linkedin.com/in/made-ryan-putra-paramartha-949601417</span>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="https://github.com/Ryanputraparamartha">
          <i class="bi bi-github fs-4 me-3 text-accent"></i>
          <span><strong class="d-block">GitHub</strong>github.com/Ryanputraparamartha</span>
        </a>
      </div>
    </div>
  </div>
@endsection
