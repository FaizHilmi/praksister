<?php

namespace App\Http\Controllers;

use App\Models\DataMobil;
use Illuminate\Http\Request;

class DataMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataMobil::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $mobil = new DataMobil();
        $mobil->tipe = $request->tipe;
        $mobil->jumlah = $request->jumlah;
        $mobil->harga = $request->harga;
        $mobil->save();

        return "Data Mobil Berhasil di Tambah";
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
     * @param  \App\Models\DataMobil  $DataMobil
     * @return \Illuminate\Http\Response
     */
    public function show(DataMobil $DataMobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataMobil  $DataMobil
     * @return \Illuminate\Http\Response
     */
    public function edit(DataMobil $DataMobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataMobil  $DataMobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $tipe = $request->tipe;
        $jumlah = $request->jumlah;
        $harga = $request->harga;

        $mobil = DataMobil::find($id);
        $mobil->tipe = $tipe;
        $mobil->jumlah = $jumlah;
        $mobil->harga = $harga;
        $mobil->save();

        return "Data Berhasil Di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataMobil  $DataMobil
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $mobil = DataMobil::find($id);
        $mobil->delete();
    }
}
