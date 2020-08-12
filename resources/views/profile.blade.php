@extends('layouts.app')
@section('content')
<div class="container">
    	<div class="row">
    		<div class="col-md-12 col-12 col-sm-4">
    			<div class="card">
    				<div class="card-header">Upload Image <a href="{{ route('home') }}" class="btn btn-warning btn-sm float-right"><i class="fa fa-arrow-left"></i></a></div>
    				<div class="card-body">
    					<img src="/storage/upload/{{ auth()->user()->image }}" alt="" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px">
    					<h2>{{ $user->name }}</h2>
    					<form action="{{ route('update') }}" method="post" enctype="multipart/form-data" >
    						<input type="file" name="image" id="" >
    						@csrf
    						@error('image')
    							<div class="alert alert-danger">
    								{{ $message }}
    							</div>
    						@enderror
    						<button type="submit" class="btn btn-primary btn-sm">Upload</button>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
@stop