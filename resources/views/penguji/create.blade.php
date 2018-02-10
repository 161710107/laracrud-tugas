@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-danger">
    <div class="panel-heading">Data Penguji
    	<div class="panel-title pull-right"><a  class="btn btn-success" href="{{ url()->previous() }}">kembali</a>
    	</div>
    </div>
    <div class="panel-body">
    	<form action="{{ route('pengujis.store') }}" method="post">
    		{{ csrf_field()}}
    		<div class="form-group {{ $errors->has('nama') ? ' has-error':'' }}">
    			<label class="control-label">nama</label>
    			<input type="text" name="nama" required>
    			@if ($errors->has('nama'))
    			<span class="help-block">
    				<strong>{{ $errors->first('nama') }}</strong>
    			</span>
    			@endif
    		</div>
            <div class="form-group {{ $errors->has('jabatan') ? ' has-error':'' }}">
                <label class="control-label">jabatan</label>
                <input type="text" name="jabatan" required>
                @if ($errors->has('jabatan'))
                <span class="help-block">
                    <strong>{{ $errors->first('jabatan') }}</strong>
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