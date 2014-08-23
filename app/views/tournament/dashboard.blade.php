@extends('layout')

@section('content')
<div class="container">
<div class="col-md-4">
	<h1>{{ $tournament->name }}</h1>
	<table>
	@foreach($tournament->pages as $page)
	<tr>
	<td><a href="{{ action('PageController@show', $tournament->name, $page->slug) }}">{{ $page->title }}</a></td>
	</tr>
	@endforeach
	</table>
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
	{{ Form::hidden('tournament_id',$tournament->id)}}
	{{ Form::submit()}}
	{{ Form::close() }}
</div>
@stop