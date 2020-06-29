@extends('layout.template')
@section('content')
<h1>Tabel Data Penjual</h1>
    <h4>
        <small>Data Penjual</small>
        <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="{{route('penjual.create')}}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus">Tambah Data Penjual</i></a>
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
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">ID Penjual</th>
                    <th class="text-center">ID Transaksi</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">No. Hp</th>
                    <th class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($penjual as $in=>$val)
               <tr>
                   <td class="text-center">{{($in+1)}}</td>
                   <td class="text-center">{{$val->id_penjual}}</td>
                   <td class="text-center">{{$val->id_transaksi}}</td>
                   <td class="text-center">{{$val->nama_penjual}}</td>
                   <td class="text-center">{{$val->alamat_penjual}}</td>
                   <td class="text-center">{{$val->no_hp}}</td>
                   <td>
                        <a href="{{route('penjual.edit',$val->id_penjual)}}" class="btn btn-warning btn-xs">Update</a>
                        <form action="{{route('penjual.destroy',$val->id_penjual)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{$penjual->links()}}
        </div>

</div>
</div>

 @endsection