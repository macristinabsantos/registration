@extends('master')
@section('content')
<div class="container">
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
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Post</th>
      </tr>
    </thead>

    @foreach($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->post }}</td>
    <td>
         {{--  <form class input type="hidden" name="id" value="{{ $post->id }}"> --}}
          <a href="{{ url("post/$post->id/edit") }}" class="btn btn-primary">Edit</a>
          <form class="form-horizontal" method="post" action="{{ url("post/$post->id") }}">
          {{ csrf_field() }}
          <input name="_method" type="hidden" value="delete">
          <button type="submit"  href="" class="btn btn-danger">Delete</button></form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection