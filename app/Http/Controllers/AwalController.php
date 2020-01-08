<?php

namespace App\Http\Controllers;

use App\awal;
use Illuminate\Http\Request;

class AwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$mahasiswa = DB::table('data')->get();
         return view('awal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function show(awal $awal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function edit(awal $awal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, awal $awal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function destroy(awal $awal)
    {
        //
    }
}
