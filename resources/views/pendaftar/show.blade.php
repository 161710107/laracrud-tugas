@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-danger">
			  <div class="panel-heading">Show Data Pendaftar
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<form action="{{ route('pendaftars.store') }}" method="post">
    		{{ csrf_field()}}
    		<div class="form-group">
    			<label class="control-label">nama_pendaftar</label>
    			<input type="text" name="nama_pendaftar" class="form-control" value="{{ $pendaftars->nama_pendaftar }}" readonly>
    		</div>

            <div class="form-group ">
                <label class="control-label">tempat_lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" value="{{ $pendaftars->tempat_lahir }}" readonly>
            </div>

            <div class="form-group ">
                <label class="control-label">tanggal_lahir</label>
                <input type="text" name="tanggal_lahir" class="form-control" value="{{ $pendaftars->tanggal_lahir }}" readonly>
            </div>

             <div class="form-group ">
                <label class="control-label">jk</label>
                <input type="text" name="jk" class="form-control" value="{{ $pendaftars->jk }}" readonly>
            </div>

             <div class="form-group ">
                <label class="control-label">agama</label>
                <input type="text" name="agama" class="form-control" value="{{ $pendaftars->agama }}" readonly>
            </div>

            <div class="form-group ">
                <label class="control-label">phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $pendaftars->phone }}" readonly>
            </div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection