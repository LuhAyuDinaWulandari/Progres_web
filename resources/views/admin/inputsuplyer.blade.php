@extends('layout.template')
@section('content')

<div class="panel">
    <div class="content">
        <form action="{{(isset($suplyer))?route('suplyer.update',$suplyer->id_suplyer):route('suplyer.store')}}" method="POST"> 
    <div class="box">
    <h1>Tambah Data Suplyer</h1>
    <h4>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4> 
        <div class="panel panel-flat-border-top border-top-primary">
            @csrf
            @if(isset($suplyer))?@method('PUT')@endif
            <div class="panel-body">
                    <form>
                      <div class="form-group"> 
                        <label class="control-label col-lg-2">Nama Suplyer </label>
                        <div class="col-lg-10"></div>
                        <input type="text" value="{{(isset($suplyer))?$suplyer->nama_suplyer:old('nama_suplyer')}}" name="nama_suplyer" class="form-control"></div>
                        @error('nama_suplyer') <small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group">   
                        <label class="control-label col-lg-2">Alamat Suplyer</label>
                        <div class="col-lg-10"></div>  
                        <input type="text" value="{{(isset($suplyer))?$suplyer->alamat_suplyer:old('alamat_suplyer')}}" name="alamat_suplyer" class="form-control"></div>
                        @error('alamat_suplyer')<small style="color:red">{{$message}}</small> @enderror
                      </div>
                      <div class="form-group">     
                        <label class="control-label col-lg-2">No Hp</label>
                        <div class="col-lg-10"></div>    
                        <input type="text" value="{{(isset($suplyer))?$suplyer->no_hp:old('no_hp')}}" name="no_hp" class="form-control"></div>
                        @error('no_hp') <small style="color:red">{{$message}}</small> @enderror
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