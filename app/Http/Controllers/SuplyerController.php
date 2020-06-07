<?php

namespace App\Http\Controllers;

use\App\Suplyer;
use Illuminate\Http\Request;

class SuplyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Suplyer | CP';
        $suplyer=Suplyer::all();
        //dd($suplyer);
        return view('admin.suplyer', compact('title', 'suplyer'));
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
        $messages = [
            'required'  => 'Kolom:atribute harus lengkap',
            'date'      => 'Kolom:atribute harus Lengkap',
            'numeric'   => 'Kolom:atribute harus Lengkap',
        ];
        $validasi = $request->validate([
            'nama_suplyer'      => 'required',
            'alamat_suplyer'    => '',
            'no_hp'             => '',
        ],$messages);
        Suplyer::create($validasi);
        return redirect('suplyer')->with('success', 'Data berhasil di update');
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
        $title='Input Suplyer | CP';
        $suplyer=Suplyer::find($id);
        return view('admin.inputsuplyer', compact('title','suplyers'));
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
        $messages = [
            'required'  => 'Kolom:atribute harus lengkap',
            'date'      => 'Kolom:atribute harus Lengkap',
            'numeric'   => 'Kolom:atribute harus Lengkap',
        ];
        $validasi = $request->validate([
            'nama_suplyer'      => 'required',
            'alamat_suplyer'    => '',
            'no_hp'             => '',
        ],$messages);
        Suplyer::whereid_suplyer($id)->update($validasi);
        return redirect('suplyer')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Suplyer::whereid_suplyer($id)->delete();
        return redirect('suplyer')->with('success', 'Data berhasil di Hapus');
    }
}
