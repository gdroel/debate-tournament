@extends('layout')

@section('content')
<div class="container">
<div class="col-md-4">
	<div class="row">
	<h1>{{ $tournament->name }}</h1>
	<table class="table">
	<tbody>
	@foreach($tournament->pages as $page)
		<tr>
			<td><a href="{{ action('PageController@show', $tournament->name, $page->slug) }}">{{ $page->title }}</a></td>
			<td><a href="{{ URL::to($tournament->name.'/'.$page->slug.'/edit') }}">Edit</a></td>
		</tr>
	@endforeach
	</tbody>
	</table>
	</div>
	<div class="row">

	</div>
</div>
<div class="col-md-8">
	<h1>Edit the Home Page</h1>
	
	@if($homepage)
	{{ Form::open(array('action'=>'PageController@doEdit'))}}
	@else
	{{ Form::open(array('action'=>'PageController@doCreate')) }}
	@endif

	{{ Form::text('title', $home->title, array('class'=>'form-control')) }}
	<br>
	{{ Form::textarea('body',$home->body,array('class'=>'form-control')) }}

	{{ Form::hidden('category','home')}}
	{{ Form::hidden('slug',$home->slug)}}
	{{ Form::hidden('tournament_id', $home->tournament_id )}}

	{{ Form::submit()}}
	{{ Form::close() }}
</div>
<div class="col-md-4">
	<h1 class="inline">Events <a class="pull-right" href="{{ URL::to($tournament->name.'/'.'newevent') }}">+</a></h1>
	<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Max Competitors</th>
		</tr>
	</thead>
	<tbody>
	@foreach($events as $event)
	<tr>
		<td>{{ $event->name }}</td>

		<td>{{ $event->max }}</td>
	</tr>
	@endforeach
	</tbody>
	</div>
</div>
</div>
@stop