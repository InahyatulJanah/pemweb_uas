@extends('layouts.app')
@section('title', 'Beranda')

@section('content')

{{-- Carousel --}}
<div class="main-banner" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-carousel owl-banner">
          @include('partials.carousel')
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Tentang Aplikasi --}}
@include('partials.about')

{{-- Daftar Siswa --}}
<section class="section">
  <div class="container">
    <div class="section-heading text-center">
      <h6>Data Siswa</h6>
      <h2>Daftar Seluruh Siswa Terdaftar</h2>
    </div>
    <div class="row">
      @foreach($siswaList as $siswa)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="events_item">
            <div class="thumb">
              <span class="category">Kelas {{ $siswa->kelas }}</span>
              <span class="price"><h6>NIS: {{ $siswa->nis }}</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Nama:</span>
              <h4>{{ $siswa->nama }}</h4>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endsection