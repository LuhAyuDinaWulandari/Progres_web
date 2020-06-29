@extends('layout.template')
@section('content')
<h1>Tabel Data Suplyer</h1>
    <h4>
        <small>Data Suplyer</small>
        <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="{{route('suplyer.create')}}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus">Tambah Data Suplyer</i></a>
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
                    <th class="text-center">Nama</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">No. Hp</th>
                    <th class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($suplyer as $in=>$val)
               <tr>
                   <td class="text-center">{{($in+1)}}</td>
                   <td class="text-center">{{$val->nama_suplyer}}</td>
                   <td class="text-center">{{$val->alamat_suplyer}}</td>
                   <td class="text-center">{{$val->no_hp}}</td>
                   <td>
                        <a href="{{route('suplyer.edit',$val->id_suplyer)}}" class="btn btn-warning btn-xs">Update</a>
                        <form action="{{route('suplyer.destroy',$val->id_suplyer)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{$suplyer->links()}}
        </div>

</div>
</div>

 @endsection