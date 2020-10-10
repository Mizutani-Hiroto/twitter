@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')
    @if (session('message'))
        {{ session('message') }}
    @endif

    {{ $task->title }}
    {{ $task->content }} 
    
    <a href="/posts/{{ $task->id }}/edit">Edit</a>
    @endsection