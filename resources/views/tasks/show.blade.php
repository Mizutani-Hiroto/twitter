@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

  @if (session('message'))

  {{ session('message') }}

  @endif

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $task->title }}</h5>
      <p class="card-text">{{ $task->content }}</p>

      <div class="d-flex" style="height: 36.4px;">
        <a href="/tasks/{{ $task->id }}" class="btn btn-outline-primary">Show</a>
        <a href="/tasks/{{ $task->id }}/edit" class="btn btn-outline-primary">Edit</a>
        <form action="/tasks/{{ $task->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>

  <a href="/tasks/{{ $task->id }}/edit">Edit</a>
  <a href="/tasks">Back</a>
    
@endsection