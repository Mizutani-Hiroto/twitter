@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')

 <h1>Editing Post</h1>

  <form method="POST" action="/tasks/{{ $task->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ $task->title }}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Content</label>
      <textarea class="form-control" name="content">{{ $task->content }}</textarea>
    </div>
      <button type="submit" class="btn btn-outline-primary">Submit</button>
  </form>

  <a href="/tasks/{{ $task->id }}">Show</a> 
  <a href="/tasks">Back</a>
  
@endsection