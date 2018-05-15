<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/jquery-ui.css') }}">
	{{-- <link rel="stylesheet" type="text/css" href="{{ url('css/w3.css') }}"> --}}
	<script type="text/javascript" src="{{ url('js/jquery-3.1.0.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/jquery-ui.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
		<script>
	  $( function() {
	    $( "#datepicker" ).datepicker();
	  } );
	  </script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('register') }}">Laravel</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
       <ul class="nav navbar-nav">
        <li class=""><a href="{{ url('register') }}">Register <span class="sr-only">(current)</span></a></li>
       </ul>
      <ul class="nav navbar-nav">
        <li class=""><a href="{{ url('account') }}">Account <span class="sr-only">(current)</span></a></li>
       </ul>
       <ul class="nav navbar-nav">
        <li class=""><a href="{{ url('post') }}">Post <span class="sr-only">(current)</span></a></li>
       </ul>
    </div>
  </div>
</nav>

</body>
</html>