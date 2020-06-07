@extends('layout.inputtemp')

@section('content')

<div class="panel">
    <div class="content">
        <form action="{{(isset($penjual))?route('penjual.update',$penjual->id_penjual):route('penjual.store')}}" method="POST"> 
    <div class="box">
    <h1>Tambah Data Penjual</h1>
    <h4>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4> 
        <div class="panel panel-flat-border-top border-top-primary">
            @csrf
            @if(isset($penjual))?@method('PUT')@endif
            <div class="panel-body">
                    <form>
                      <div class="form-group">
                       
                        <label class="form-control-label col-lg-2">Id Pembeli</label>
                        <div class="col-lg-10"></div> 
                        <input type="text" value="{{(isset($penjual))?$penjual->id_penjual:old('id_penjual')}}" name="id_penjual" class="form-control"></div>
                        @error('id_penjual')<small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group"> 
                        <label class="control-label col-lg-2">Nama Pembeli</label>
                        <div class="col-lg-10"></div>
                        <input type="text" value="{{(isset($penjual))?$penjual->nama_penjual:old('nama_penjual')}}" name="nama_penjual" class="form-control"></div>
                        @error('nama_penjual') <small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group">   
                        <label class="control-label col-lg-2">Alamat </label>
                        <div class="col-lg-10"></div>  
                        <input type="text" value="{{(isset($penjual))?$penjual->alamat_penjual:old('alamat_penjual')}}" name="alamat_penjual" class="form-control"></div>
                        @error('alamat_penjual') <small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group">     
                        <label class="control-label col-lg-2">No Hp</label>
                        <div class="col-lg-10"></div>    
                        <input type="text" value="{{(isset($penjual))?$penjual->no_hp:old('no_hp')}}" name="no_hp" class="form-control"></div>
                        @error('no_hp') <small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group">     
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