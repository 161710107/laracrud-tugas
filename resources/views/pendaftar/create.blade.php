@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-danger">
    <div class="panel-heading">Data Pendaftar
    	<div class="panel-title pull-right"><a  class="btn btn-success" href="{{ url()->previous() }}">kembali</a>
    	</div>
    </div>
    <div class="panel-body">
    	<form action="{{ route('pendaftars.store') }}" method="post">
    		{{ csrf_field()}}
    		<div class="form-group {{ $errors->has('nama_pendaftar') ? ' has-error':'' }}">
    			<label class="control-label">nama_pendaftar</label>
    			<input type="text" name="nama_pendaftar" required>
    			@if ($errors->has('nama_pendaftar'))
    			<span class="help-block">
    				<strong>{{ $errors->first('nama_pendaftar') }}</strong>
    			</span>
    			@endif
    		</div>

            <div class="form-group {{ $errors->has('tempat_lahir') ? ' has-error':'' }}">
                <label class="control-label">tempat_lahir</label>
                <input type="text" name="tempat_lahir" required>
                @if ($errors->has('tempat_lahir'))
                <span class="help-block">
                    <strong>{{ $errors->first('tempat_lahir') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('tanggal_lahir') ? ' has-error':'' }}">
                <label class="control-label">tanggal_lahir</label>
                <input type="text" name="tanggal_lahir" required>
                @if ($errors->has('tanggal_lahir'))
                <span class="help-block">
                    <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('jk') ? ' has-error':'' }}">
                <label class="control-label">jk</label>
                <input type="text" name="jk" required>
                @if ($errors->has('jk'))
                <span class="help-block">
                    <strong>{{ $errors->first('jk') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('agama') ? ' has-error':'' }}">
                <label class="control-label">agama</label>
                <input type="text" name="agama" required>
                @if ($errors->has('agama'))
                <span class="help-block">
                    <strong>{{ $errors->first('agama') }}</strong>
                </span>
                @endif
            </div>

               <div class="form-group {{ $errors->has('phone') ? ' has-error':'' }}">
                <label class="control-label">phone</label>
                <input type="text" name="phone" required>
                @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
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