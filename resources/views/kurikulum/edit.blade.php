@extends('layout.main')

@section('judul','Form Edit Data Kurikulum' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Edit Data Kurikulum</h1>
       
                    <form method="POST" action="/kurikulum/update/{{$kurikulum->id}}">
                        @csrf
                        @method('PUT')
                            
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{$kurikulum->id}}">
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
                            <label for="nama_kurikulum">Nama Kurikulum</label>
                            <input type="text" class="form-control" id="nama_kurikulum" name="nama_kurikulum" value="{{$kurikulum->nama_kurikulum}}">
                        </div>

                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" value="{{$kurikulum->tahun}}">
                        </div>


                        
                        <p>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        </p>
                        <p>
                        <a href="/kurikulum" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  