@extends('layout.main')

@section('judul','Halaman Awal Sistem' )

@section('container')

<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Halaman Data Matakuliah</h5>
        <p class="card-text">Berisikan data-data Matakuliah.</p>
        <a href="/matakuliah" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Halaman Data Kurikulum</h5>
        <p class="card-text">Berisikan data-data kurikulum.</p>
        <a href="/kurikulum" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Halaman Data Dosen</h5>
        <p class="card-text">Berisikan data-data dosen.</p>
        <a href="/dosen" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Halaman Data Program Studi</h5>
        <p class="card-text">Berisikan data-data Program Studi.</p>
        <a href="/prodi" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Halaman Data Mahasiswa</h5>
        <p class="card-text">Berisikan data-data Mahasiswa.</p>
        <a href="/mahasiswa" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Halaman Data KRS</h5>
        <p class="card-text">Berisikan data-data KRS Mahasiswa.</p>
        <a href="/krs" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Halaman Data Penawaran Matakuliah</h5>
        <p class="card-text">Berisikan data-data Penawaran Matakuliah.</p>
        <a href="/penawaran_mk" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Halaman Data Pengampu</h5>
        <p class="card-text">Berisikan data-data Pengampu.</p>
        <a href="/pengampu" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection  