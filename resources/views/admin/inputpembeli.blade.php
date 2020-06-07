@extends('layout.inputtemp')
@section('content')

<div class="content">
        <div class="panel panel-flat border-top-primary"></div>
        <form action="{{(isset($pembeli))?route('pembeli.update',$pembeli->id_pembeli):route('pembeli.store')}}" method="POST">
        @csrf
        @if(isset($pembeli))?@method('PUT')
        @endif
        <div class="panel-body">
            <h1>Input Pembeli</h1>
              <div class="form-group">
                <label class="control-label col-lg-12">Nama Pembeli</label>
                <div class="col-lg-10">
                <input type="text" value="{{(isset($pembeli))?$pembeli->nama_pembeli:old('nama_pembeli')}}" name="nama_pembeli" class="form-control">
                @error('nama_pembeli') <small style="color:red">{{$massage}}</small>@enderror
              </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-12">No. Handphone</label>
                <div class="col-lg-10">
                <input type="text" value="{{(isset($pembeli))?$pembeli->no_hp:old('no_hp')}}" name="no_hp" class="form-control" >
                @error('no_hp') <small style="color:red">{{$massage}}</small>@enderror
              </div>
              </div>
 
              <div class="form-group">
                <label class="control-label col-lg-12">Jumlah Saldo</label>
                <div class="col-lg-10">
                <input type="text" value="{{(isset($pembeli))?$pembeli->saldo:old('saldo')}}" name="saldo" class="form-control" >
                @error('saldo') <small style="color:red">{{$massage}}</small>@enderror
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-12">Kode Transaksi </label>
                <div class="col-lg-10">
                <input type="text" value="{{(isset($pembeli))?$pembeli->id_transaksi:old('id_transaksi')}}" name="id_transaksi" class="form-control">
                @error('id_transaksi') <small style="color:red">{{$massage}}</small>@enderror
              </div>
              </div>

              <div class="form-group">
                <button type="submit">Simpan</button>
              </div>
            </form>
            <p>For complete documentation, please visit <a href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a>.</p>
            </div>
        </div>
     </div>
</div>
 @endsection