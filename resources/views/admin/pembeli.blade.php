@extends('layout.template')
@section('content')

<div class="content">
<div class="panel">
<div class="box">
    <h1>Tabel Data Pembeli</h1>
    <h4>
        <small>Data Pembeli</small>
        <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="{{route('pembeli.create')}}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus">Tambah Data Pembeli</i></a>
        </div>
    </h4>
    <div style="margin-bottom: 20px;">
        <form class="form-inline" action="" method="post">
            <div class="form-group">
                <input type="text" name="pencarian" class="form-control" placeholder="Pencarian"></input>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"> </span>

                </button>
            </div>
        </form>
    </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Nomor</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">No. Handphone</th>
                        <th class="text-center">Jumlah Saldo</th>
                        <th class="text-center">Kode Transaksi</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pembeli as $in=>$val)     
                <tr>
                    <td class="text-center">{{$in+1}}</td>
                    <td class="text-center">{{$val->nama_pembeli}}</td>
                    <td class="text-center">{{$val->no_hp}}</td>
                    <td class="text-center">{{$val->saldo}}</td>
                    <td class="text-center">{{$val->id_transaksi}}</td>
                    <td class="text-center">
                        <a href="{{route('pembeli.edit',$val->id_pembeli)}}" class="btn btn-warning btn-xs">Update</a>
                        <form action="{{route('pembeli.destroy',$val->id_pembeli)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{$pembeli->links()}}
        </div>
        
</div>
</div>


 @endsection