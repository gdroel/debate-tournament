@extends('tournament-layout')

@section('content')

<div class="jumbotron">
	<h1>{{ $tournament->name }}</h1>
	<p>{{ $tournament->location }}</p>
</div>
<div class="container">
	<p>{{ date('d/m/y', strtotime($tournament->register_start)) }}</p>

<h1>{{ $homepage->title }}</h1>

@stop
