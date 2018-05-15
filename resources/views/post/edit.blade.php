@include('includes.header')

	<div class="container">
			<form class="form-horizontal" method="post" action="{{ url("post/$posts->id") }}">
			{{ csrf_field() }}
			<input name="_method" type="hidden" value="PUT">
	  <fieldset>
	    <legend>Edit</legend>
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
	        <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title" value="{{ isset($posts->title) ? $posts->title : old('title') }}">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="textArea" class="col-lg-2 control-label">Post</label>
	      <div class="col-lg-8">
	        <textarea class="form-control" name="post" rows="3" id="textArea" value="">{{ isset($posts->post) ? $posts->post : old('post') }}</textarea>
	      </div>
	    </div>

	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	      	<button type="submit" class="btn btn-primary">Post</button>
	        <button type="reset" class="btn btn-default">Cancel</button>        
	      </div>
	    </div>
	  </fieldset>
	</form>
	</div>

@include('includes.footer')

