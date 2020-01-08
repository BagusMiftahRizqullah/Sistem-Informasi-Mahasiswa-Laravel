<?php

namespace App\Http\Controllers;

use App\matakuliah;
use App\kurikulum;
use App\dosen;
use App\prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mahasiswa = DB::table('data')->get();
       /* $prodi = prodi::all();
        $dosen = dosen::all();
        $kurikulum = kurikulum::all();
        */
        $matakuliah = matakuliah::all();
        return view('matakuliah.index', compact('matakuliah','kurikulum','prodi','dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kurikulum = kurikulum::all();
        $dosen = dosen::all();
        $prodi = prodi::all();
        
        return view('matakuliah.tambah',compact('kurikulum','dosen','prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required',
            'nama_matakuliah' => 'required',
        ]);
       /*
        *$matakuliah = new matakuliah;
        *$matakuliah->kode_matakuliah = $request->kode_matakuliah;
        *$matakuliah->nama_matakuliah = $request->nama_matakuliah;
        *$matakuliah->sks = $request->sks;
        *$matakuliah->semester = $request->semester;
        *$matakuliah->id_kurikulum = $request->id_kurikulum;
        *$matakuliah->id_dosen = $request->id_dosen;
        *$matakuliah->id_prodi = $request->id_prodi;
        *$matakuliah->save();
        */
        matakuliah::create($request->all());
        return redirect('/matakuliah')->with('status','Data Berhasil Ditambahkan Cokk!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(matakuliah $matakuliah)
    {
        return view('matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matakuliah=matakuliah::find($id);
        $kurikulum=kurikulum::all();
        $dosen=dosen::all();
        $prodi=prodi::all();
        return view('matakuliah.edit', compact('matakuliah','kurikulum','dosen','prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $matakuliah =matakuliah::find($id);
        $matakuliah->kode_matakuliah = $request->kode_matakuliah;
        $matakuliah->nama_matakuliah = $request->nama_matakuliah;
        $matakuliah->sks = $request->sks;
        $matakuliah->semester = $request->semester;
        $matakuliah->id_kurikulum = $request->kurikulum;
        $matakuliah->id_dosen = $request->id_dosen;
        $matakuliah->id_prodi = $request->id_prodi;
        $matakuliah->save();
        
        //matakuliah::update($request->all());
        return redirect('/matakuliah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        DB::table('tb_matakuliah')->where('id',$id)->delete();
        // alihkan halaman ke halaman awal
        return redirect()->back();
    }

   
}
