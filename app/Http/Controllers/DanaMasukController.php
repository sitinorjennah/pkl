<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\danamasuk;
use App\kategoripemasukan;


class DanaMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danamasuk = danamasuk::with('kategoripemasukan')->get(); //kalau lebih dari satu relasi pakai , bisa
     
        return view('Maincontent.Pemasukan',compact('danamasuk' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoripemasukan = kategoripemasukan::all();
        return view('Maincontent.create-pemasukan', compact('kategoripemasukan')); //create data

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DanaMasuk::create([
            'id_dana'=> $request->id_dana,
            'kategoripemasukan_id'=> $request->kategoripemasukan_id,
            'jumlah_dana'=> $request->jumlah_dana,
            'pengeluaran'=> $request->pengeluaran,
            
            

        ]);

        return redirect('danamasuk');
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
