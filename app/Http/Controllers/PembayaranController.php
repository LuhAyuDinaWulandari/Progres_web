<?php

namespace App\Http\Controllers;

use App\Pembayaran;
use Illuminate\Http\Request;

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
        $pembayaran=Pembayaran::paginate(10);
        return view('admin.pembayaran', compact('title', 'pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Home | CP';
        return view('admin.pembayaran', compact('title'));
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
            'id_pembayaran'        => '',
            'jenis_pembayaran'  => '',
            'keterangan'        => '',
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
        Pembayaran::whereid_pembayaran($id)->update($validasi);
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
        Pembayaran::whereid_pembayaran($id)->delete();
        return redirect('pembeli')->with('success', 'Data berhasil di Hapus');
    }
}
