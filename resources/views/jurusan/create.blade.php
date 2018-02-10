@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-danger">
    <div class="panel-heading">Data Jurusan
    	<div class="panel-title pull-right"><a  class="btn btn-success" href="{{ url()->previous() }}">kembali</a>
    	</div>
    </div>
    <div class="panel-body">
    	<form action="{{ route('jurusans.store') }}" method="post">
    		{{ csrf_field()}}
    		<div class="form-group {{ $errors->has('nama_jurusan') ? ' has-error':'' }}">
    			<label class="control-label">nama_jurusan</label>
    			<input type="text" name="nama_jurusan" required>
    			@if ($errors->has('nama_jurusan'))
    			<span class="help-block">
    				<strong>{{ $errors->first('nama_jurusan') }}</strong>
    			</span>
    			@endif
    		</div>
            <div class="form-group {{ $errors->has('nilai_lulus') ? ' has-error':'' }}">
                <label class="control-label">nilai_lulus</label>
                <input type="text" name="nilai_lulus" required>
                @if ($errors->has('nilai_lulus'))
                <span class="help-block">
                    <strong>{{ $errors->first('nilai_lulus') }}</strong>
                </span>
                @endif
            </div>
    		<div class="form-group">
    			<button type="submit" class="btn btn-primary">tambah</button>
    		</div>
    	</form>
    </div>
</div>
</div>
</div>
@endsection