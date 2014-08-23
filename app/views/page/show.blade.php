@extends('tournament-layout')

@section('content')

<div class="container">
	<div class="col-md-8">
		<h1>{{ $page->title }}</h1>
		<hr>
		<p>{{ $page->body }}</p>
	</div>

	<div class="col-md-4">

	</div>
</div>
@stop