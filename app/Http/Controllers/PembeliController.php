<?php

namespace App\Http\Controllers;

use App\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Pembeli | CP';
        $pembeli=Pembeli::paginate(10);
        return view('admin.pembeli', compact('title', 'pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Pembeli | CP';
        return view('admin.inputpembeli', compact('title'));
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
            'nama_penjual' => 'required',
            'no_hp'        => '',
            'saldo'        => '',
            'id_transaksi' => 'required',
        ],$messages);
        Pembeli::create($validasi);
        return redirect('pembeli')->with('success', 'Data berhasil di update');
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
        $pembeli=Pembeli::find($id);
        return view('admin.inputpembeli', compact('title','pembeli'));
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
            'nama_pembeli' => 'required',
            'no_hp'        => '',
            'saldo'        => '',
            'id_transaksi' => 'required',
        ],$messages);
        Pembeli::whereid_pembeli($id)->update($validasi);
        return redirect('pembeli')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pembeli::whereid_pembeli($id)->delete();
        return redirect('pembeli')->with('success', 'Data berhasil di Hapus');
    }
}
