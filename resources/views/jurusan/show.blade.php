@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-danger">
			  <div class="panel-heading">Show Data Jurusan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<form action="{{ route('jurusans.store') }}" method="post">
    		{{ csrf_field()}}
    		<div class="form-group">
    			<label class="control-label">nama_jurusan</label>
    			<input type="text" name="nama_jurusan" class="form-control" value="{{ $jurusans->nama_jurusan }}" readonly>
    		</div>
            <div class="form-group ">
                <label class="control-label">nilai_lulus</label>
                <input type="text" name="nilai_lulus" class="form-control" value="{{ $jurusans->nilai_lulus }}" readonly>
            </div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection