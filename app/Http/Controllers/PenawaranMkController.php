<?php

namespace App\Http\Controllers;

use App\penawaran_mk;
use App\prodi;
use App\matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenawaranMkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       $penawaran_mk = penawaran_mk::all();
       return view('penawaran_mk.index', compact('penawaran_mk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = prodi::all();
        $matakuliah = matakuliah::all();
        
        return view('penawaran_mk.tambah',compact('prodi','matakuliah'));
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
            'tahun_ajaran' => 'required',
            'semester' => 'required'
        ]);
        $penawaran_mk = new penawaran_mk;
        $penawaran_mk->tahun_ajaran = $request->tahun_ajaran;
        $penawaran_mk->semester = $request->semester;
        $penawaran_mk->id_prodi = $request->id_prodi;
        $penawaran_mk->id_matakuliah = $request->id_matakuliah;
        $penawaran_mk->kelas = $request->kelas;
        $penawaran_mk->save();
        return redirect('/penawaran_mk')->with('status','Data Berhasil Ditambahkan Cokk!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\penawaran_mk  $penawaran_mk
     * @return \Illuminate\Http\Response
     */
    public function show(penawaran_mk $penawaran_mk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\penawaran_mk  $penawaran_mk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penawaran_mk=penawaran_mk::find($id);
        $prodi=prodi::all();
        $matakuliah=matakuliah::all();
        
        return view('penawaran_mk.edit', compact('penawaran_mk','prodi','matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\penawaran_mk  $penawaran_mk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penawaran_mk=penawaran_mk::find($id);
        $penawaran_mk->tahun_ajaran = $request->tahun_ajaran;
        $penawaran_mk->semester = $request->semester;
        $penawaran_mk->id_prodi = $request->id_prodi;
        $penawaran_mk->id_matakuliah = $request->id_matakuliah;
        $penawaran_mk->kelas = $request->kelas;
        $penawaran_mk->save();
        
        //matakuliah::update($request->all());
        return redirect('/penawaran_mk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\penawaran_mk  $penawaran_mk
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        DB::table('tb_penawaran_mk')->where('id',$id)->delete();
        // alihkan halaman ke halaman awal
        return redirect()->back();
    }
}
