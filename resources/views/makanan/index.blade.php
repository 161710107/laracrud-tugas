@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-success">
    <div class="panel-heading">Data Makanan
    	<div class="panel-title pull-right"><a  class="btn btn-success" href="{{ route('makanans.create') }}">Tambah</a>
    	</div>
    </div>
    <div class="panel-body">
    	<div class ="table-responsive">
    		<table class="table">
    			<thead>
    			<tr>
    			<th>No</th>
    			<th>nama_makanan</th>
    			<th>ingredients</th>
                <th>kode_produksi</th>
    			<th colspan="2"><center>Action</center></th>
    		</tr>
    		</thead>
    			<tbody>
    				@php $no = 1 ; @endphp
    				@foreach($makanans as $data)
    				<tr>
    					<td>{{ $no++ }}</td>
    					<td>{{ $data->nama_makanan }}</td>
    					<td><p>{{ $data->ingredients }}</p></td>
                        <td><p>{{ $data->kode_produksi }}</p></td>
    					<td>
    						<a class="btn btn-warning" href="{{ route('makanans.edit',$data->id) }}">Edit</a>
    					</td>
    					<td>
    						<form method="post" action="{{ route('makanans.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
    					</td>
    					<td>
    						<a class="btn btn-success" href="{{ route('makanans.show',$data->id) }} " >Show</a>
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