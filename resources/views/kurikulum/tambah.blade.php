@extends('layout.main')

@section('judul','Form tambah data Kurikulum' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Tambah Data Kurikulum</h1>
       
                    <form method="POST" action="/kurikulum/tambah">
                        @csrf
                        <div class="form-group">
                            <label for="id">ID Kurikulum</label>
                            <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" placeholder="input ID Kurikulum" name="id">
                            @error('id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label>Id Program Studi</label>
                            <select class="form-control" name="id_prodi">
                            <option value="">Pilih </option>
                                @foreach($prodi as $pro)
                                <option value="{{ $pro->id_prodi }}">{{ $pro->nama_prodi}}</option>
                                @endforeach
                            </select>
                        </div>
                            
                        <div class="form-group">
                            <label for="nama_kurikulum">Nama Kurikulum</label>
                            <input type="text" class="form-control @error('nama_kurikulum') is-invalid @enderror" id="nama_kurikulum" placeholder="input Nama Kurikulum" name="nama_kurikulum">
                            @error('nama_kurikulum')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" class="form-control" id="tahun" placeholder="input Tahun" name="tahun">
                        </div>
                       
                        <p>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </p>
                        <p>
                        <a href="/kurikulum" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  