@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

  <form method="POST" action="/tasks">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" name="title">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Content</label>
      <textarea class="form-control" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
  </form>
  
@endsection