@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-danger">
			  <div class="panel-heading">Edit Data Jurusan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('jurusans.update',$jurusans->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  	<div class="form-group {{ $errors->has('nama_jurusans') ? ' has-error' : '' }}">
			  			<label class="control-label">nama_jurusans</label>	
			  			<input type="text" name="nama_jurusan" class="form-control" value="{{ $jurusans->nama_jurusan }}"  required>
			  			@if ($errors->has('nama_jurusans'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_jurusans') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	<div class="form-group {{ $errors->has('nilai_lulus') ? ' has-error' : '' }}">
			  			<label class="control-label">nilai_lulus</label>	
			  			<input type="text" name="nilai_lulus" class="form-control" value="{{ $jurusans->nilai_lulus }}"  required>
			  			@if ($errors->has('nilai_lulus'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nilai_lulus') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection