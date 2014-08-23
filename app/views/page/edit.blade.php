@extends('layout')

@section('content')

<div class="container">
	<h1>Edit {{ $page->title }}</h1>
	{{ Form::open(array('action'=>'PageController@doEdit')) }}
	{{ Form::text('title', $page->title, array('class'=>'form-control') )}}
	<br>
	{{ Form::textarea('body', $page->body, array('class'=>'form-control') )}}
	{{ Form::hidden('category','$page->category')}}
	{{ Form::hidden('slug',$page->slug)}}
	{{ Form::hidden('tournament_id', $page->tournament_id )}}
	{{ Form::submit() }}
	{{ Form::close() }}
</div>
@stop