@extends('layout.main')

@section('judul','Data Matakuliah' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8"></div>
        <h1 class="mt-4">Data Matakuliah</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Matakuliah</th>
                    <th scope="col">Nama Matakuliah</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Id Kurikulum</th>
                    <th scope="col">Id Dosen</th>
                    <th scope="col">Id Program Studi</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($matakuliah as $mtk)
                    <tr>
                        <td>{{ $mtk->id }}</td>
                        <td>{{ $mtk->kode_matakuliah}}</td>                       
                        <td>{{ $mtk->nama_matakuliah}}</td>
                        <td>{{ $mtk->sks}}</td>
                        <td>{{ $mtk->semester}}</td>
                        <td>{{ $mtk->id_kurikulum}}</td>
                        <td>{{ $mtk->id_dosen}}</td>
                        <td>{{ $mtk->id_prodi}}</td>
                        <td>
                            <a href="/matakuliah/edit/{{ $mtk->id }}" class="badge badge-success">Edit</a>
                            <a href="/matakuliah/hapus/{{ $mtk->id }}" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
        </table>
        <a href="/matakuliah/tambah" class="badge badge-info label">Tambah</a>
        <a href="/" class="badge badge-warning label">Kembali</a>
        
        </div>
    </div>
</div>
@endsection  