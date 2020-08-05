<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoripengeluaran;


class kategoripengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoripengeluaran = kategoripengeluaran::all();
        return view('Maincontent.Kategori-Pengeluaran',compact('kategoripengeluaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Maincontent.create-kp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kategoripengeluaran::create([
            'id'=> $request->id,
            'nama_kp'=> $request->nama_kp,
        ]);

        return redirect('Kategori-Pengeluaran');
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
        $editkategori = kategoripengeluaran::findorfail($id);
        return view('Maincontent.Edit-Kp', compact('editkategori'));
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
        $editkategori = kategoripengeluaran::findorfail($id);
        $editkategori->update($request->all());

        return redirect('Kategori-Pengeluaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editkategori = kategoripengeluaran::findorfail($id);
        $editkategori->delete();
        return back();
    }
}
