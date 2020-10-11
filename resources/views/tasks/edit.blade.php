@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')

  <form method="TASK" action="/tasks/{{ $task->id }}"
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" value="{{ $task->title }}">
    <input type="text" name="content" value="{{ $task->content }}">
    <input type="submit">
  </form>
  
@endsection