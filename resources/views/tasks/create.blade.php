@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')
<form action="/tasks" method="POST">
    {{csrf_field()}}
    <input type="text" name="title"/>
    <input type="text" name="content">
    <input type="submit">
</form>
@endsection