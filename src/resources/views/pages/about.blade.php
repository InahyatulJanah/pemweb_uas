@extends('layouts.app')
@section('title', 'Tentang Aplikasi')

@section('content')

<div class="section about-us" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                Apa itu Aplikasi Manajemen Siswa?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Sistem ini memudahkan pengelolaan data siswa, absensi, dan informasi lainnya secara real-time berbasis web.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                Siapa yang dapat mengakses?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Admin dapat menambah, mengubah, dan menghapus data siswa, sedangkan pengguna umum hanya dapat melihat data.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 align-self-center">
        <div class="section-heading">
          <h6>Tentang</h6>
          <h2>Sistem Manajemen Data Siswa</h2>
          <p>Aplikasi berbasis Laravel + Livewire ini dirancang untuk kemudahan pengelolaan informasi siswa di lingkungan pendidikan.</p>
          <div class="main-button">
            <a href="{{ url('/contact') }}">Hubungi Kami</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
