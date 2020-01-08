@extends('layout.main')

@section('judul','Data Program Studi' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8"></div>
        <h1 class="mt-4">Data Program Studi</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Program Studi</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($prodi as $prod)
                    <tr>
                        <td>{{ $prod->id }}</td>
                        <td>{{ $prod->nama_prodi}}</td>
                        <td>
                            <a href="/prodi/edit/{{ $prod->id }}" class="badge badge-success">Edit</a>
                            <a href="/prodi/hapus/{{ $prod->id }}" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
        </table>
        <a href="/prodi/tambah" class="badge badge-info label">Tambah</a>
        <a href="/" class="badge badge-warning label">Kembali</a>
        
        </div>
    </div>
</div>
@endsection  