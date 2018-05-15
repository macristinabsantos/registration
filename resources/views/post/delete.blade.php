@extends('master')
@section('content')
  <a href='{{ url("post") }}'>Back to list of post</a>

  <h1>{{ $post->title }}</h1>
  <p>{{ $post->post }}</p>

  <a href='{{ url("post/$post->id/delete") }}'>Delete</a>
  
@endsection