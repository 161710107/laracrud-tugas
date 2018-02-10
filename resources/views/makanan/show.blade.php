@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-success">
			  <div class="panel-heading">Show Data Makanan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<form action="{{ route('makanans.store') }}" method="post">
    		{{ csrf_field()}}
    		<div class="form-group">
    			<label class="control-label">nama_makanan</label>
    			<input type="text" name="nama_makanan" class="form-control" value="{{ $makanans->nama_makanan }}" readonly>
    		</div>
    		<div class="form-group">
    			<label class="control-label">ingredients</label>
    			<textarea name="ingredients" class="form-control" rows="10" readonly>{{ $makanans->ingredients }}</textarea>
    		</div>
            <div class="form-group ">
                <label class="control-label">kode_produksi</label>
                <input type="text" name="kode_produksi" class="form-control" value="{{ $makanans->kode_produksi }}" readonly>
            </div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection