@extends('layout.template')
@section('content')

<div class="panel">
    <div class="content">
        <form action="{{(isset($pembayaran))?route('pembayaran.update',$pembayaran->id_pembayaran):route('pembayaran.store')}}" method="POST"> 
    <div class="box">
    <h1>Tambah Data Pembayaran</h1>
    <h4>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4> 
        <div class="panel panel-flat-border-top border-top-primary">
            @csrf
            @if(isset($pembayaran))?@method('PUT')@endif
            <div class="panel-body">
                    <form>
                      <div class="form-group"> 
                        <label class="control-label col-lg-2">Id Penjual</label>
                        <div class="col-lg-10"></div>
                        <input type="text" value="{{(isset($pembayaran))?$pembayaran->id_penjual:old('id_penjual')}}" name="id_penjual" class="form-control"></div>
                        @error('id_penjual') <small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group">   
                        <label class="control-label col-lg-2">Id Pembeli </label>
                        <div class="col-lg-10"></div>  
                        <input type="text" value="{{(isset($pembayaran))?$pembayaran->id_pembeli:old('id_pembeli')}}" name="id_pembeli" class="form-control"></div>
                        @error('id_pembeli')<small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group">     
                        <label class="control-label col-lg-2">Jenis Pembayaran</label>
                        <div class="col-lg-10"></div>    
                        <input type="text" value="{{(isset($pembayaran))?$pembayaran->jenis_pembayaran:old('jenis_pembayaran')}}" name="jenis_pembayaran" class="form-control"></div>
                        @error('jenis_pembayaran') <small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-control-label col-lg-2">Keterangan</label>
                        <div class="col-lg-10"></div> 
                        <input type="text" value="{{(isset($pembayaran))?$pembayaran->keterangan:old('keterangan')}}" name="keterangan" class="form-control"></div>
                        @error('keterangan')<small style="color:red">{{$message}}</small> @enderror
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