<?php

namespace App\Http\Controllers;

use App\dosen;
use App\penawaran_mk;
use App\pengampu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengampuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengampu = pengampu::all();
        return view('pengampu.index', compact('pengampu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penawaran_mk = penawaran_mk::all();
        $dosen= dosen::all();
        
        return view('pengampu.tambah',compact('penawaran_mk','dosen'));
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
            'order' => 'required',
            
        ]);
        $pengampu = new pengampu;
        $pengampu->id_penawaran_mk = $request->id_penawaran_mk;
        $pengampu->id_dosen = $request->id_dosen;
        $pengampu->order = $request->order;
  
        $pengampu->save();
        return redirect('/pengampu')->with('status','Data Berhasil Ditambahkan Cokk!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pengampu  $pengampu
     * @return \Illuminate\Http\Response
     */
    public function show(pengampu $pengampu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pengampu  $pengampu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengampu=pengampu::find($id);
        $penawaran_mk = penawaran_mk::all();
        $dosen= dosen::all();
        
        return view('pengampu.edit', compact('pengampu','penawaran_mk','dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pengampu  $pengampu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengampu=pengampu::find($id);
        $pengampu->id_penawaran_mk = $request->id_penawaran_mk;
        $pengampu->id_dosen = $request->id_dosen;
        $pengampu->order = $request->order;
        $pengampu->save();
        
    
        return redirect('/pengampu');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pengampu  $pengampu
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        DB::table('tb_pengampu')->where('id',$id)->delete();
        // alihkan halaman ke halaman awal
        return redirect()->back();
    }
}
