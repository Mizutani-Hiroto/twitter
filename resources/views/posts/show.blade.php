@extends('layouts.layouts')

@section('title','Simple Board')

@section('content')

  @if(session('message'))
  {{ session('message') }}
  @endif

  {{ $post->title }}
  {{ $post->content }}

  <a href="/posts/{{ $post->id }}/edit">Edit</a>
<!--　新しい投稿を行うとshowアクションが呼び出され作成した内容が表示される -->
@endsection