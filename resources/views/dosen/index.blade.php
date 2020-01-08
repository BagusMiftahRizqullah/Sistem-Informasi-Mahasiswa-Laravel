@extends('layout.main')

@section('judul','Data Dosen' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8"></div>
        <h1 class="mt-4">Data Dosen</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">id Prodi</th>
                    <th scope="col">NIP Dosen</th>
                    <th scope="col">Nama Dosen</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dosen as $dos)
                    <tr>
                        <td>{{ $dos->id }}</td>
                        <td>{{ $dos->id_prodi}}</td>                       
                        <td>{{ $dos->nip_dosen}}</td>
                        <td>{{ $dos->nama_dosen}}</td>
                        <td>
                            <a href="/dosen/edit/{{ $dos->id }}" class="badge badge-success">Edit</a>
                            <a href="/dosen/hapus/{{ $dos->id }}" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
        </table>
        <a href="/dosen/tambah" class="badge badge-info label">Tambah</a>
        <a href="/" class="badge badge-warning label">Kembali</a>
        
        </div>
    </div>
</div>
@endsection  