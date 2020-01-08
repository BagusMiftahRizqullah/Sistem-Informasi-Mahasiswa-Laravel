@extends('layout.main')

@section('judul','Data Mahasiswa' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8"></div>
        <h1 class="mt-4">Data Mahasiswa</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">id Prodi</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>\
                    <th scope="col">Id Pembimbing Akademik</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mahasiswa as $mas)
                    <tr>
                        <td>{{ $mas->id }}</td>
                        <td>{{ $mas->id_prodi}}</td>                       
                        <td>{{ $mas->nim}}</td>
                        <td>{{ $mas->nama}}</td>
                        <td>{{ $mas->alamat}}</td>
                        <td>{{ $mas->email}}</td>
                        <td>{{ $mas->tempat_lahir}}</td>
                        <td>{{ $mas->tanggal_lahir}}</td>
                        <td>{{ $mas->id_pa}}</td>
                        <td>
                            <a href="/mahasiswa/edit/{{ $mas->id }}" class="badge badge-success">Edit</a>
                            <a href="/mahasiswa/hapus/{{ $mas->id }}" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
        </table>
        <a href="/mahasiswa/tambah" class="badge badge-info label">Tambah</a>
        <a href="/" class="badge badge-warning label">Kembali</a>
        
        </div>
    </div>
</div>
@endsection  