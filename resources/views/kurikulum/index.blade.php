@extends('layout.main')

@section('judul','Data Kurikulum' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8"></div>
        <h1 class="mt-4">Data Kurikulum</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">id Prodi</th>
                    <th scope="col">Nama Kurikulum</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($kurikulum as $kur)
                    <tr>
                        <td>{{ $kur->id }}</td>
                        <td>{{ $kur->id_prodi}}</td>                       
                        <td>{{ $kur->nama_kurikulum}}</td>
                        <td>{{ $kur->tahun}}</td>
                        <td>
                            <a href="/kurikulum/edit/{{ $kur->id }}" class="badge badge-success">Edit</a>
                            <a href="/kurikulum/hapus/{{ $kur->id }}" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
        </table>
        <a href="/kurikulum/tambah" class="badge badge-info label">Tambah</a>
        <a href="/" class="badge badge-warning label">Kembali</a>
        
        </div>
    </div>
</div>
@endsection  