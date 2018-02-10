@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-danger">
			  <div class="panel-heading">Show Data Penguji
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<form action="{{ route('pengujis.store') }}" method="post">
    		{{ csrf_field()}}
    		<div class="form-group">
    			<label class="control-label">nama</label>
    			<input type="text" name="nama" class="form-control" value="{{ $pengujis->nama }}" readonly>
    		</div>
            <div class="form-group ">
                <label class="control-label">jabatan</label>
                <input type="text" name="jabatan" class="form-control" value="{{ $pengujis->jabatan }}" readonly>
            </div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection