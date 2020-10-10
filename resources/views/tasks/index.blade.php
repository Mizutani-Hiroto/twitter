@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')

  @if(session('message'))
  {{ session('message') }}
  @endif

  <h1>Tasks</h1>

  @foreach($tasks as $task)
    <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
    <a href="/tasks/{{ $task->id }}/edit">Edit</a>
 
    <form action="/tasks/{{ $task->id }}" method="TASK" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button type="submit">Delete</button>
    </form>
  @endforeach

  <a href="/tasks/create">New Task</a>
@endsection