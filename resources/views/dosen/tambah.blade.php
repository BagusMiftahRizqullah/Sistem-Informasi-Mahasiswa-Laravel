@extends('layout.main')

@section('judul','Form tambah data Dosen' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Tambah Data Dosen</h1>
       
                    <form method="POST" action="/dosen/tambah">
                        @csrf
                        <div class="form-group">
                            <label for="id">ID Dosen</label>
                            <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" placeholder="input ID Dosen" name="id">
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
                            <label for="nip_dosen">NIP Dosen</label>
                            <input type="text" class="form-control @error('nip_dosen') is-invalid @enderror" id="nip_dosen" placeholder="input NIP Dosen" name="nip_dosen">
                            @error('nip_dosen')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label for="nama_dosen">Nama Dosen</label>
                            <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror" id="nama_dosen" placeholder="input Nama Dosen" name="nama_dosen">
                            @error('nama_dosen')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                       
                        <p>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </p>
                        <p>
                        <a href="/dosen" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  