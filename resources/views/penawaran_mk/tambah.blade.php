@extends('layout.main')

@section('judul','Form tambah data Penawaran Matakuliah' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Tambah Data Penawaran Matakuliah</h1>
       
                    <form method="POST" action="/penawaran_mk/tambah">
                        @csrf
                        <div class="form-group">
                            <label for="tahun_ajaran">Tahun Ajaran</label>
                            <input type="text" class="form-control @error('tahun_ajaran') is-invalid @enderror" id="tahun_ajaran" placeholder="input Tahun Ajaran" name="tahun_ajaran">
                            @error('tahun_ajaran')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                            
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control @error('semester') is-invalid @enderror" id="semester" placeholder="input Semester" name="semester">
                            @error('semester')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>


                        <div class="form-group">
                            <label for="id_prodi">Program Studi</label>
                            <select class="form-control" name="id_prodi">
                                <option value="">Pilih </option>
                                @foreach($prodi as $prod)
                                <option value="{{ $prod->id }}">{{ $prod->nama_prodi}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_matakuliah">Matakuliah</label>
                            <select class="form-control" name="id_matakuliah">
                                <option value="">Pilih </option>
                                @foreach($matakuliah as $mat)
                                <option value="{{ $mat->id }}">{{ $mat->nama_matakuliah}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas" placeholder="input Kelas" name="kelas">
                        </div>
                    
                        <p>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </p>
                        <p>
                        <a href="/penawaran_mk" class="badge badge-warning label">Kembali</a>
                        </p>                                                                   
                    </form>
       
                </div>
            </div>
        </div>
@endsection  