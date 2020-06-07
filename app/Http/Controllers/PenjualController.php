<?php

namespace App\Http\Controllers;


use App\Penjual;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $title='Home | CP';
        $penjual=Penjual::paginate(5);
        return view('admin.penjual', compact('title', 'penjual'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Pembeli | CP';
        return view('admin.inputpenjual', compact('title'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages=[
            'required'  => 'Kolom:atribute harus lengkap',
            'date'      => 'Kolom:atribute harus Lengkap',
            'numeric'   => 'Kolom:atribute harus Lengkap',
        ];
        $validasi=$request->validate([
            'id_penjual'        => 'required',
            'nama_penjual'      => '',
            'alamat_penjual'    => '',
            'no_hp'             => '',
        ],$messages);
        Penjual::create($validasi);
        return redirect('penjual')->with('succses','Data berhasil diupdate'); 
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
        $title='Input Pembeli | CP';
        $penjual=Penjual::find(id);
        return view('admin.inputpenjual', compact('title'));

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
