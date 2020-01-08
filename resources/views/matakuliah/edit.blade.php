@extends('layout.main')

@section('judul','Form Edit Data Matakuliah' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Edit Data Matakuliah</h1>
       
                    <form method="POST" action="/matakuliah/update/{{$matakuliah->id}}">
                        @csrf
                        @method('PUT')
                            
                        <div class="form-group">
                            <label for="kode_matakuliah">Kode Matakuliah</label>
                            <input type="text" class="form-control" id="kode_matakuliah" name="kode_matakuliah" value="{{$matakuliah->kode_matakuliah}}">
                        </div>

                        <div class="form-group">
                            <label for="nama_matakuliah">Nama Matakuliah</label>
                            <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" value="{{$matakuliah->nama_matakuliah}}">
                        </div>

                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <input type="text" class="form-control" id="sks" name="sks" value="{{$matakuliah->sks}}">
                        </div>

                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control" id="semester" name="semester" value="{{$matakuliah->semester}}">
                        </div>

                        <div class="form-group">
                        
                            <label>Id Kurikulum</label>
                            <select class="form-control" id="id_kurikulum">
                                <option value="">Pilih </option>
                                @foreach($kurikulum as $kur)
                                <option value="{{ $kur->id }}">{{ $kur->nama_kurikulum}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Id Dosen</label>
                            <select class="form-control" id="id_dosen">
                            <option value="">Pilih </option>
                                @foreach($dosen as $dos)
                                <option value="{{ $dos->id }}">{{ $dos->nama_dosen}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Id Program Studi</label>
                            <select class="form-control" id="id_prodi">
                            <option value="">Pilih </option>
                                @foreach($prodi as $pro)
                                <option value="{{ $pro->id }}">{{ $pro->nama_prodi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <p>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        </p>
                        <p>
                        <a href="/matakuliah" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  