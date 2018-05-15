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
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($candidates as $candidate)
      <tr>
        <td>{{ $candidate->id }}</td>
        <td>{{ $candidate->name }}</td>
        <td>{{$candidate['email']}}</td>
        <td>{{$candidate['password']}}</td>
        <td>{{$candidate['dob']}}</td>
        <td>{{$candidate['gender']}}</td>
        <td>{{$candidate['country']}}</td>
        <td>{{$candidate['mobile']}}</td>
        <td>{{ $candidate['address']}}</td>
        <td>
          <a href="{{ url("account/$candidate->id/edit") }}" class="btn btn-primary">Edit</a>
          <a href="{{ url("account/$candidate->id/delete") }}" class="btn btn-danger">Delete</a>
          {{-- <a href="{{ url('post/create') }}" class="btn btn-primary">Add Post</a> --}}
         {{--  <a href="{{ url("post/create") }}" class="btn btn-danger">Create Post</a> --}}
s
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection