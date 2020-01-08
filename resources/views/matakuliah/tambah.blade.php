@extends('layout.main')

@section('judul','Form tambah data Matakuliah' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Tambah Data Matakuliah</h1>
       
                    <form method="POST" action="/matakuliah/tambah">
                        @csrf
                        <div class="form-group">
                            <label for="kode_matakuliah">Kode Matakuliah</label>
                            <input type="text" class="form-control @error('kode_matakuliah') is-invalid @enderror" id="kode_matakuliah" placeholder="input Kode Matakuliah" name="kode_matakuliah">
                            @error('kode_matakuliah')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="nama_matakuliah">Nama Matakuliah</label>
                            <input type="text" class="form-control @error('nama_matakuliah') is-invalid @enderror" id="nama_matakuliah" placeholder="input nama Matakuliah" name="nama_matakuliah">
                            @error('nama_matakuliah')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <input type="text" class="form-control" id="sks" placeholder="input Satuan Kredit Semester" name="sks">
                        </div>

                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control" id="semester" placeholder="input Tingkat Semester" name="semester">
                        </div>

                        <div class="form-group">
                            <label for="id_kurikulum">Id Kurikulum</label>
                            <select class="form-control" name="id_kurikulum">
                                <option value="">Pilih </option>
                                @foreach($kurikulum as $kur)
                                <option value="{{ $kur->id }}">{{ $kur->nama_kurikulum}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_dosen">Id Dosen</label>
                            <select class="form-control" name="id_dosen">
                            <option value="">Pilih </option>
                                @foreach($dosen as $dos)
                                <option value="{{ $dos->id}}">{{ $dos->nama_dosen}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_prodi">Id Program Studi</label>
                            <select class="form-control" name="id_prodi">
                            <option value="">Pilih </option>
                                @foreach($prodi as $pro)
                                <option value="{{ $pro->id }}">{{ $pro->nama_prodi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <p>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </p>
                        <p>
                        <a href="/matakuliah" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  