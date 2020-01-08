<?php

namespace App\Http\Controllers;

use App\dosen;
use App\prodi;
use App\matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = dosen::all();
         return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = prodi::all();
        
        return view('dosen.tambah',compact('prodi'));
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
            'id' => 'required',
            'nip_dosen' => 'required',
            'nama_dosen' => 'required',
        ]);
        $dosen = new dosen;
        $dosen->id = $request->id;
        $dosen->id_prodi = $request->id_prodi;
        $dosen->nip_dosen = $request->nip_dosen;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->save();
        return redirect('/dosen')->with('status','Data Berhasil Ditambahkan Cokk!!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(dosen $dosen)
    {
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen=dosen::find($id);
        $prodi=prodi::all();
        return view('dosen.edit', compact('dosen','prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dosen =dosen::find($id);
        $dosen->id = $request->id;
        $dosen->id_prodi = $request->id_prodi;
        $dosen->nip_dosen = $request->nip_dosen;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->save();
        
        //matakuliah::update($request->all());
        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        DB::table('tb_dosen')->where('id',$id)->delete();
        // alihkan halaman ke halaman awal
        return redirect()->back();
    }
}
