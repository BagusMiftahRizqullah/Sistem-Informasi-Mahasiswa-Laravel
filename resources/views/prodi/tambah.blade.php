@extends('layout.main')

@section('judul','Form tambah data Program Studi' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Tambah Data Program Studi</h1>
       
                    <form method="POST" action="/prodi/tambah">
                        @csrf
                        <div class="form-group">
                            <label for="id">ID Program Studi</label>
                            <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" placeholder="input ID Program Studi" name="id">
                            @error('id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                            
                        <div class="form-group">
                            <label for="nama_prodi">Nama Program Studi</label>
                            <input type="text" class="form-control @error('nama_prodi') is-invalid @enderror" id="nama_prodi" placeholder="input Nama Prodi name="nama_prodi">
                            @error('nip_dosen')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    
                        <p>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </p>
                        <p>
                        <a href="/prodi" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  