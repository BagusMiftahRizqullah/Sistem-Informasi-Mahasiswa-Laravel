@extends('layout.main')

@section('judul','Data Penawaran Matakuliah' )

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8"></div>
        <h1 class="mt-4">Data Penawaran Matakuliah</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tahun Ajaran</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Id Program Studi</th>
                    <th scope="col">Id Matakuliah</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($penawaran_mk as $pemk)
                    <tr>
                        <td>{{ $pemk->id }}</td>
                        <td>{{ $pemk->tahun_ajaran}}</td>
                        <td>{{ $pemk->semester}}</td>
                        <td>{{ $pemk->id_prodi}}</td>
                        <td>{{ $pemk->id_matakuliah}}</td>
                        <td>{{ $pemk->kelas}}</td>
                        <td>
                            <a href="/penawaran_mk/edit/{{ $pemk->id }}" class="badge badge-success">Edit</a>
                            <a href="/penawaran_mk/hapus/{{ $pemk->id }}" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
        </table>
        <a href="/penawaran_mk/tambah" class="badge badge-info label">Tambah</a>
        <a href="/" class="badge badge-warning label">Kembali</a>
        
        </div>
    </div>
</div>
@endsection  