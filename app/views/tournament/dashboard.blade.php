@extends('layout')

@section('content')
<div class="container">
<h1>{{ $tournament->name }}</h1>
@foreach($tournament->pages as $page)
<li><a>{{ $page->title }}</a></li>
@endforeach
@stop