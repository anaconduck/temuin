<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $item = Barang::all();
        return view ('layouts.item', compact('item'));
    }

    public function index2()
    { 
        $item = Barang::all();
        return view ('layouts.edit', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('layouts.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request -> validate([
            'name'=>'required',
            'nomor'=>'required',
            'alamat'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required|mimes:jpg,png,jpeg|file' 
        ]);

        $validasi['foto']=$request->file('foto')->store('foto');
        // dd($validasi);
        Barang::create($validasi);
        return redirect('/terimakasih');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang, $id)
    {
        $item = Barang::find($id);
        return view('layouts.modifikasi',['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $item = Barang::find($request->id);
        $item->name = $request->name;
        $item->nomor = $request->nomor;
        $item->alamat = $request->alamat;
        $item->deskripsi = $request->deskripsi;
        $item->foto = $request->foto;
        $item -> save();
        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang, $id)
    {
        $delete = Barang::find($id);
        $delete -> delete();
        return redirect('/items');
    }
}
