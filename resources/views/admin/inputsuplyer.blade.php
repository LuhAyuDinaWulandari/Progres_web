@extends('layout.inputtemp')
@section('content')

<div class="content">
        <div class="panel panel-flat border-top-primary"></div>
        <form action="{{(isset($suplyer))?route('suplyer.update',$suplyer->id_suplyer):route('suplyer.store')}}" method="POST">
        @csrf
        @if(isset($suplyer))?@method('PUT')
        @endif
        <div class="panel-body">
            <h1>Input suplyer</h1>
              <div class="form-group">
                <label class="control-label col-lg-12">Nama suplyer</label>
                <div class="col-lg-10">
                <input type="text" value="{{(isset($suplyer))?$suplyer->nama_suplyer:old('nama_suplyer')}}" name="nama_suplyer" class="form-control">
                @error('nama_suplyer') <small style="color:red">{{$massage}}</small>@enderror
              </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-12">Alamat Suplyer</label>
                <div class="col-lg-10">
                <input type="text" value="{{(isset($suplyer))?$suplyer->alamat_suplyer:old('alamat_suplyer')}}" name="alamat_suplyer" class="form-control">
                @error('alamat_suplyer') <small style="color:red">{{$massage}}</small>@enderror
              </div>
              </div>

              
              <div class="form-group">
                <label class="control-label col-lg-12">No. Handphone</label>
                <div class="col-lg-10">
                <input type="text" value="{{(isset($suplyer))?$suplyer->no_hp:old('no_hp')}}" name="no_hp" class="form-control" >
                @error('no_hp') <small style="color:red">{{$massage}}</small>@enderror
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