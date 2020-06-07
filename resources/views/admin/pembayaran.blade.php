@extends('layout.template')
@section('content')

<div class="content">
<div class="panel">
<div class="box">
    <h1>Tabel Data Suplyer</h1>
    <h4>
        <small>Data Suplyer</small>
        <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="{{route('suplyer.create')}}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus">Tambah Data suplyer</i></a>
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
    <div class="col-lg-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Nomor</th>
                        <th class="text-center">Kode Penjual</th>
                        <th class="text-center">Kode Pembeli</th>
                        <th class="text-center">Jenis Pembayaran</th>
                        <th class="text-center">Keterangan</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pembayaran as $in=>$val)     
                    <tr>
                        <td class="text-center">{{$in+1}}</td>
                        <td class="text-center">{{$val->id_penjual}}</td>
                        <td class="text-center">{{$val->id_pembeli}}</td>
                        <td class="text-center">{{$val->jenis_pembayaran}}</td>
                        <td class="text-center">{{$val->keterangan}}</td>
                        <td class="text-center">
                            <a href="{{route('pembayaran.edit',$val->id_pembayaran)}}" class="btn btn-warning btn-xs">Update</a>
                            <form action="{{route('pembayaran.destroy',$val->id_pembayaran)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$pembayaran->links()}}
        </div>
    </div>
</div>
</div>


 @endsection