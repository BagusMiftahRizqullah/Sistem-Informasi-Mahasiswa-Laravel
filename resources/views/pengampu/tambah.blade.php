@extends('layout.main')

@section('judul','Form tambah data Pengampu' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Tambah Data Pengampu</h1>
       
                    <form method="POST" action="/pengampu/tambah">
                        @csrf
                        <div class="form-group">
                            <label>Penawaran Matakuliah</label>
                            <select class="form-control" name="id_penawaran_mk">
                            <option value="">Pilih </option>
                                @foreach($penawaran_mk as $pmk)
                                <option value="{{ $pmk->id }}">{{ $pmk->id}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_dosen">Dosen</label>
                            <select class="form-control" name="id_dosen">
                                <option value="">Pilih </option>
                                @foreach($dosen as $dos)
                                <option value="{{ $dos->id }}">{{ $dos->nama_dosen}}</option>
                                @endforeach
                            </select>
                        </div>
                            
                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="text" class="form-control @error('order') is-invalid @enderror" id="order" placeholder="input Jumlah Order" name="order">
                            @error('order')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    
                        <p>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </p>
                        <p>
                        <a href="/pengampu" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  