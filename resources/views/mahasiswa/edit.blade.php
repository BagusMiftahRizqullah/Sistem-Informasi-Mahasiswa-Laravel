@extends('layout.main')

@section('judul','Form Edit Data Mahasiswa' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Edit Data Mahasiswa</h1>
       
                    <form method="POST" action="/mahasiswa/update/{{$mahasiswa->id}}">
                        @csrf
                        @method('PUT')
                            
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
                            <label for="nim">Nomor Induk Mahasiswa</label>
                            <input type="text" class="form-control  id="nim" placeholder="input nim" name="nim" value="{{$mahasiswa->nim}}">
                           
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$mahasiswa->nama}}">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{$mahasiswa->alamat}}">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$mahasiswa->email}}">
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir </label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{$mahasiswa->tempat_lahir}}">
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir </label>
                            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}">
                        </div>

                        <div class="form-group">
                            <label>Id Dosen</label>
                            <select class="form-control" id="id_pa">
                            <option value="">Pilih </option>
                                @foreach($dosen as $dos)
                                <option value="{{ $dos->id_dosen }}">{{ $dos->nama_dosen}}</option>
                                @endforeach
                            </select>
                        </div>

                        
                        <p>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        </p>
                        <p>
                        <a href="/mahasiswa" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  