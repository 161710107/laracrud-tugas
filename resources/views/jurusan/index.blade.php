@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-danger">
    <div class="panel-heading"><font color="magenta">Data Jurusan</font>
    	<div class="panel-title pull-right"><a  class="btn btn-success" href="{{ route('jurusans.create') }}">Tambah</a>
    	</div>
    </div>
    <div class="panel-body">
    	<div class ="table-responsive">
    		<table class="table">
    			<thead>
    			<tr>
    			<th>No</th>
    			<th>nama_jurusan</th>
    			<th>nilai_lulus</th>
    			<th colspan="2"><center>Action</center></th>
    		</tr>
    		</thead>
    			<tbody>
    				@php $no = 1 ; @endphp
    				@foreach($jurusans as $data)
    				<tr>
    					<td>{{ $no++ }}</td>
    					<td>{{ $data->nama_jurusan }}</td>
    					<td><p>{{ $data->nilai_lulus }}</p></td>
    					<td>
    						<a class="btn btn-warning" href="{{ route('jurusans.edit',$data->id) }}">Edit</a>
    					</td>
    					<td>
    						<form method="post" action="{{ route('jurusans.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
    					</td>
    					<td>
    						<a class="btn btn-success" href="{{ route('jurusans.show',$data->id) }} " >Show</a>
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