@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-danger">
    <div class="panel-heading">Data Post
    	<div class="panel-title pull-right"><a  class="btn btn-success" href="{{ url()->previous() }}">kembali</a>
    	</div>
    </div>
    <div class="panel-body">
    	<form action="{{ route('posts.store') }}" method="post">
    		{{ csrf_field()}}
    		<div class="form-group {{ $errors->has('title') ? ' has-error':'' }}">
    			<label class="control-label">Title</label>
    			<input type="text" name="title" required>
    			@if ($errors->has('title'))
    			<span class="help-block">
    				<strong>{{ $errors->first('title') }}</strong>
    			</span>
    			@endif
    		</div>
    		<div class="form-group {{ $errors->has('title') ? 'has-error':'' }}">
    			<label class="control-label">Content</label>
    			<textarea name="content" class="form-control" rows="10" required></textarea>
    			@if ($errors->has('content'))
    			<span class="help-block">
    				<strong>{{ $errors->first('content') }}</strong>
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