<?php

namespace App\Http\Controllers;

use App\krs;
use App\penawaran_mk;
use App\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $krs = krs::all();
         return view('krs.index', compact('krs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = mahasiswa::all();
        $penawaran_mk = penawaran_mk::all();
        
        return view('krs.tambah',compact('mahasiswa','penawaran_mk'));
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
            'nilai_huruf' => 'required',
        ]);
        $krs = new krs;
        $krs->id_mahasiswa= $request->id_mahasiswa;
        $krs->id_penawaran_mk = $request->id_penawaran_mk;
        $krs->nilai_huruf = $request->nilai_huruf;
        $krs->save();
        return redirect('/krs')->with('status','Data Berhasil Ditambahkan Cokk!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function show(krs $krs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $krs=krs::find($id);
        $mahasiswa=mahasiswa::all();
        $penawaran_mk = penawaran_mk::all();
        return view('krs.edit', compact('krs','mahasiswa','penawaran_mk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $krs =krs::find($id);
        $krs->id_mahasiswa = $request->id_mahasiswa;
        $krs->id_penawaran_mk = $request->id_penawaran_mk;
        $krs->nilai_huruf = $request->nilai_huruf;
        $krs->save();
        
        //matakuliah::update($request->all());
        return redirect('/krs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        DB::table('tb_krs')->where('id',$id)->delete();
        // alihkan halaman ke halaman awal
        return redirect()->back();
    }
}
