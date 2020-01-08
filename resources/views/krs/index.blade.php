@extends('layout.main')

@section('judul','Data KRS' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8"></div>
        <h1 class="mt-4">Data KRS</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">id Mahasiswa</th>
                    <th scope="col">id Penawaran Matakuliah</th>
                    <th scope="col">Nilai Huruf</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($krs as $krs)
                    <tr>
                        <td>{{ $krs->id }}</td>
                        <td>{{ $krs->id_mahasiswa}}</td>                       
                        <td>{{ $krs->id_penawaran_mk}}</td>
                        <td>{{ $krs->nilai_huruf}}</td>
                        <td>
                            <a href="/krs/edit/{{ $krs->id }}" class="badge badge-success">Edit</a>
                            <a href="/krs/hapus/{{ $krs->id }}" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
        </table>
        <a href="/krs/tambah" class="badge badge-info label">Tambah</a>
        <a href="/" class="badge badge-warning label">Kembali</a>
        
        </div>
    </div>
</div>
@endsection  