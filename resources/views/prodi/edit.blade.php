@extends('layout.main')

@section('judul','Form Edit Data Prodi' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Edit Data Prodi</h1>
       
                    <form method="POST" action="/prodi/update/{{$prodi->id}}">
                        @csrf
                        @method('PUT')
                            
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{$prodi->id}}">
                        </div>

                        <div class="form-group">
                            <label for="nama_prodi">Nama Program Studi</label>
                            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="{{$prodi->nama_prodi}}">
                        </div>
                        
                        <p>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        </p>
                        <p>
                        <a href="/prodi" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  