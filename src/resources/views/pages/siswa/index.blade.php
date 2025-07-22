@extends('layouts.app')
@section('title', 'Data Siswa')

@section('content')
<div class="container pt-5 mt-5">
<div class="container" style="padding-top: 100px;">
  <h2>Data Siswa</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
      </tr>
    </thead>
    <tbody>
      @foreach($siswaList as $siswa)
      <tr>
        <td>{{ $siswa->nis }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->kelas }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection