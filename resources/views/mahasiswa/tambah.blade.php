@extends('layout.main')

@section('judul','Form tambah data Mahasiswa' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Tambah Data Mahasiswa</h1>
       
                    <form method="POST" action="/mahasiswa/tambah">
                        @csrf
                        <div class="form-group">
                            <label for="id_prodi">Id Program Studi</label>
                            <select class="form-control" name="id_prodi">
                            <option value="">Pilih </option>
                                @foreach($prodi as $pro)
                                <option value="{{ $pro->id_prodi }}">{{ $pro->nama_prodi}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nim">Nomor Induk Mahasiswa</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="input nim" name="nim">
                            @error('nim')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="input nama lengkap" name="nama">
                            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat Tempat Tinggal</label>
                            <input type="text" class="form-control" id="alamat" placeholder="input Alamat Tempat Tinggal Sekarang" name="alamat">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="input Email Aktif" name="email">
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" placeholder="input Tempat Kelahiran Anda" name="tempat_lahir">
                        </div>
                       
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="tanggal_lahir" placeholder="input Tanggal Kelahiran Anda" name="tanggal_lahir">
                        </div>

                        <div class="form-group">
                            <label for="id_pa">Pembimbing Akademik</label>
                            <select class="form-control" name="id_pa">
                            <option value="">Pilih </option>
                                @foreach($dosen as $dos)
                                <option value="{{ $dos->id_dosen }}">{{ $dos->nama_dosen}}</option>
                                @endforeach
                            </select>
                        </div>
                       
                        <p>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </p>
                        <p>
                        <a href="/mahasiswa" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  