<?php

namespace App\Http\Controllers;


use App\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $title='Home | CP';
        $pembayaran=Pembayaran::paginate(5);
        return view('admin.pembayaran', compact('title', 'pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Pembeli | CP';
        return view('admin.inputpembayaran', compact('title'));

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
        $validasi = $request->validate([
            'id_penjual'        => 'required',
            'id_pembeli'        => 'required',
            'jenis_pembayaran'  => 'required',
            'keterangan'        => 'required',
        ],$messages);
        Pembayaran::create($validasi);
        return redirect('pembayaran')->with('succses','Data berhasil diupdate'); 
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
        $pembayaran=Pembayaran::find($id);
        return view('admin.inputpembayaran', compact('title'));

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
        $messages=[
            'required'  => 'Kolom:atribute harus lengkap',
            'date'      => 'Kolom:atribute harus Lengkap',
            'numeric'   => 'Kolom:atribute harus Lengkap',
        ];
        $validasi = $request->validate([
            'id_penjual'        => 'required',
            'id_pembeli'        => 'required',
            'jenis_pembayaran'  => 'required',
            'keterangan'        => 'required',
        ],$messages);
        Pembayaran::whereid_pembayaran($id)->update($validasi);
        return redirect('pembayaran')->with('succses','Data berhasil diupdate'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pembayaran::whereid_pembayaran($id)->delete();
        return redirect('pembayaran')->with('succses','Data berhasil didelete'); 
    }
}
