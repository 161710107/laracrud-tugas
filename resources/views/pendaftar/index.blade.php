@extends('layouts.app')
@section('content')
<div class="row">
    <div class="container">
    <div class="col-md-12">
    <div class="panel panel-success">
    <div class="panel-heading">Data Pendaftar
        <div class="panel-title pull-right"><a  class="btn btn-success" href="{{ route('pendaftars.create') }}">Tambah</a>
        </div>
    </div>
    <div class="panel-body">
        <div class ="table-responsive">
            <table class="table">
                <thead>
                <tr>
                <th>No</th>
                <th>nama_pendaftar</th>
                <th>tempat_lahir</th>
                <th>tanggal_lahir</th>
                <th>jk</th>
                <th>agama</th>
                <th>phone</th>
                <th colspan="2"><center>Action</center></th>
            </tr>
            </thead>
                <tbody>
                    @php $no = 1 ; @endphp
                    @foreach($pendaftars as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama_pendaftar }}</td>
                        <td><p>{{ $data->tempat_lahir }}</p></td>
                        <td><p>{{ $data->tanggal_lahir }}</p></td>
                        <td><p>{{ $data->jk }}</p></td>
                        <td><p>{{ $data->agama}}</p></td>
                        <td><p>{{ $data->phone}}</p></td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('pendaftars.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('pendaftars.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('pendaftars.show',$data->id) }} " >Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
    </div>
    </div>
@endsection