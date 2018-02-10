@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-success">
    <div class="panel-heading">Data Makanan
    	<div class="panel-title pull-right"><a  class="btn btn-success" href="{{ url()->previous() }}">kembali</a>
    	</div>
    </div>
    <div class="panel-body">
    	<form action="{{ route('makanans.store') }}" method="post">
    		{{ csrf_field()}}
    		<div class="form-group {{ $errors->has('nama_makanan') ? ' has-error':'' }}">
    			<label class="control-label">nama_makanan</label>
    			<input type="text" name="nama_makanan" required>
    			@if ($errors->has('nama_makanan'))
    			<span class="help-block">
    				<strong>{{ $errors->first('nama_makanan') }}</strong>
    			</span>
    			@endif
    		</div>
    		<div class="form-group {{ $errors->has('ingredients') ? 'has-error':'' }}">
    			<label class="control-label">ingredients</label>
    			<textarea name="ingredients" class="form-control" rows="10" required></textarea>
    			@if ($errors->has('ingredients'))
    			<span class="help-block">
    				<strong>{{ $errors->first('ingredients') }}</strong>
    			</span>
    			@endif	
    		</div>
            <div class="form-group {{ $errors->has('kode_produksi') ? ' has-error':'' }}">
                <label class="control-label">kode_produksi</label>
                <input type="text" name="kode_produksi" required>
                @if ($errors->has('kode_produksi'))
                <span class="help-block">
                    <strong>{{ $errors->first('kode_produksi') }}</strong>
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