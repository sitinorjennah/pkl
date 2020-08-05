<?php

namespace App\Http\Controllers;

use App\kategoripemasukan;
use Illuminate\Http\Request;

class KategoriPemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoripemasukan = kategoripemasukan::all();
        return view('Maincontent.Kategori-Pemasukan',compact('kategoripemasukan')); //nama file data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Maincontent.Create-Kategori'); //create data
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kategoripemasukan::create([
            'id'=> $request->id,
            'nama_kategori'=> $request->nama_kategori,
        ]);

        return redirect('Kategori-Pemasukan');
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
        $editkategori = kategoripemasukan::findorfail($id);
        return view('Maincontent.Edit-Kategori', compact('editkategori'));
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
        $editkategori = kategoripemasukan::findorfail($id);
        $editkategori->update($request->all());

        return redirect('Kategori-Pemasukan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editkategori = kategoripemasukan::findorfail($id);
        $editkategori->delete();
        return back();
    }
}
