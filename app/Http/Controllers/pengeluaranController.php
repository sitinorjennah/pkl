<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengeluaran;
use App\kategoripengeluaran;

class pengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluaran = pengeluaran::with('kategoripengeluaran')->get();
        return view('Maincontent.Pengeluaran',compact('pengeluaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoripengeluaran = kategoripengeluaran::all();
        return view('Maincontent.create-pengeluaran', compact('kategoripengeluaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pengeluaran::create([
            'id'=> $request->id,
            'tanggal'=>$request->tanggal,
            'jenis_id'=>$request->jenis_id,
            'nama_brng'=>$request->nama_brng,
            'jumlah_brng'=> $request->jumlah_brng,
            'satuan_brng'=> $request->satuan_brng,
            'harga_brng'=> $request->harga_brng,
            'ket'=>$request->ket,
            //masukan field yang akan dihitung
            //cari perhitungan
        ]);

        return redirect('pengeluaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
