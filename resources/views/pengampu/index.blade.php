@extends('layout.main')

@section('judul','Data Pengampu Matakuliah' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8"></div>
        <h1 class="mt-4">Data Pengampu Matakuliah</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">id_penawaran_mk</th>
                    <th scope="col">id_dosen</th>
                    <th scope="col">order</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pengampu as $peng)
                    <tr>
                        <td>{{ $peng->id }}</td>
                        <td>{{ $peng->id_penawaran_mk}}</td>
                        <td>{{ $peng->id_dosen}}</td>
                        <td>{{ $peng->order}}</td>
                        <td>
                            <a href="/pengampu/edit/{{ $peng->id }}" class="badge badge-success">Edit</a>
                            <a href="/pengampu/hapus/{{ $peng->id }}" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
        </table>
        <a href="/pengampu/tambah" class="badge badge-info label">Tambah</a>
        <a href="/" class="badge badge-warning label">Kembali</a>
        
        </div>
    </div>
</div>
@endsection  