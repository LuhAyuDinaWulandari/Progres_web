@extends('layout.template')
@section('content')

<div class="panel">
    <div class="content">
        <form action="{{(isset($pem))?beli('pembeli.update',$pembeli->id_pembeli):route('pembeli.store')}}" method="POST"> 
    <div class="box">
    <h1>Tambah Data Pembeli</h1>
    <h4>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4> 
        <div class="panel panel-flat-border-top border-top-primary">
            @csrf
            @if(isset($pembeli))?@method('PUT')@endif
            <div class="panel-body">
                    <form>
                      <div class="form-group"> 
                        <label class="control-label col-lg-2">Nama Pembeli</label>
                        <div class="col-lg-10"></div>
                        <input type="text" value="{{(isset($pembeli))?$pembeli->nama_pembeli:old('nama_pembeli')}}" name="nama_pembeli" class="form-control"></div>
                        @error('nama_pembeli') <small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group">   
                        <label class="control-label col-lg-2">No Hp </label>
                        <div class="col-lg-10"></div>  
                        <input type="text" value="{{(isset($pembeli))?$pembeli->no_hp:old('no_hp')}}" name="no_hp" class="form-control"></div>
                        @error('no_hp')<small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group">     
                        <label class="control-label col-lg-2">Saldo</label>
                        <div class="col-lg-10"></div>    
                        <input type="text" value="{{(isset($pembeli))?$pembeli->saldo:old('saldo')}}" name="saldo" class="form-control"></div>
                        @error('saldo') <small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-control-label col-lg-2">Id Transaksi</label>
                        <div class="col-lg-10"></div> 
                        <input type="text" value="{{(isset($pembeli))?$pembeli->id_transaksi:old('id_transaksi')}}" name="id_transaksi" class="form-control"></div>
                        @error('id_transaksi')<small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group"> 
                      <div class="col-lg-12"></div>      
                         <input type="submit" value="Submit" class="btn btn-primary">
                      </div>
                      
                    </form>
                  </div>
                </div> 
            </div>
        </div>
        </form>
    </div>

@endsection