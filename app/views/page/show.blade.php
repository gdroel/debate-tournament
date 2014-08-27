@extends('tournament-layout')

@section('content')

<div class="container">
	<div class="col-md-8">
		@if($page != "")
		<h1>{{ $page->title }}</h1>
		<hr>
		<p>{{ $page->body }}</p>
		@endif
	</div>

	<div class="col-md-4">

	</div>
</div>
@stop