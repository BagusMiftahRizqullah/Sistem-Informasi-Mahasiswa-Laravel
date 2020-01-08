@extends('layout.main')

@section('judul','Form Edit Data KRS' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Edit Data KRS</h1>
       
                    <form method="POST" action="/krs/update/{{$krs->id}}">
                        @csrf
                        @method('PUT')
                        

                        <div class="form-group">
                            <label>Mahasiswa</label>
                            <select class="form-control" name="id_mahasiswa">
                            <option value="">Pilih </option>
                                @foreach($mahasiswa as $mas)
                                <option value="{{ $mas->id }}">{{ $mas->nama }}</option>
                                @endforeach
                            </select>
                        </div>

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
                            <label for="nilai_huruf">Nilai Huruf</label>
                            <input type="text" class="form-control @error('nilai_huruf') is-invalid @enderror" id="nilai_huruf" placeholder="input nilai" name="nilai_huruf"  value="{{$krs->nilai_huruf}}">
                            @error('nilai_huruf')<div class="invalid-feedback">{{ $message }}</div>@enderror
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