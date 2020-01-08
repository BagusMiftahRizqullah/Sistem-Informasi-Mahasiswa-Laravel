@extends('layout.main')

@section('judul','Form Edit Data Dosen' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Edit Data Dosen</h1>
       
                    <form method="POST" action="/dosen/update/{{$dosen->id}}">
                        @csrf
                        @method('PUT')
                            
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{$dosen->id}}">
                        </div>

                        <div class="form-group">
                            <label>Id Program Studi</label>
                            <select class="form-control" id="id_prodi">
                            <option value="">Pilih </option>
                                @foreach($prodi as $pro)
                                <option value="{{ $pro->id_prodi }}">{{ $pro->nama_prodi}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nip_dosen">Nip Dosen</label>
                            <input type="text" class="form-control" id="nip_dosen" name="nip_dosen" value="{{$dosen->nip_dosen}}">
                        </div>

                        <div class="form-group">
                            <label for="nama_dosen">Nama Dosen</label>
                            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="{{$dosen->nama_dosen}}">
                        </div>


                        
                        <p>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        </p>
                        <p>
                        <a href="/dosen" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  