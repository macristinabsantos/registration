
@extends('master')
@section('content')

	<div class="container">
		<form class="form-horizontal" method="post" action="">
			{{ csrf_field() }}
	  <fieldset>
	    <legend>Blogpost</legend>
	    @if(count($errors) > 0 )
	    	@foreach($errors->all() as $error)
	    		<div class="col-md-8 alert alert-danger">{{$error}}</div>
	    	@endforeach
	    @endif

	    @if(session('response'))
	    	<div class="col-md-8 alert alert-success">
	    		{{session('response')}}
	    	</div>
	    @endif

	    <div class="form-group">
	      <label for="inputName" class="col-lg-2 control-label">Title</label>
	      <div class="col-lg-8">
	        <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="textArea" class="col-lg-2 control-label">Post</label>
	      <div class="col-lg-8">
	        <textarea class="form-control" name="post" rows="3" id="textArea" placeholder="Add Post"></textarea>
	      </div>
	    </div>

	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	      	<button type="submit" class="btn btn-primary" >Post</button>
	        <button type="reset" class="btn btn-default" >Cancel</button>    
	      </div>
	    </div>
	  </fieldset>
	</form>
	</div>


{{-- <form action="" method="post">
	{{ csrf_field() }}
	{!! method_field('POST') !!}
  Name:<br>
  <input type="text" name="firstname" value="">
  <br>
  Email Address:<br>
  <input type="email" name="email" value="">
  <br><br>
  <input type="submit" value="Submit">
</form>  --}}

@endsection
