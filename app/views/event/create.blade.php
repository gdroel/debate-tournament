@extends('layout')

@section('content')

<div class="container">
	<div class="col-md-4 col-md-offset-4">
	{{ Form::open(array('action'=>'EventController@doCreate')) }}
	{{ Form::label('name', 'Event Name')}}
	{{ Form::text('name', null, array('class'=>'form-control')) }}
	<br>
	{{ Form::label('max', 'Maximum Competitors' )}}
	{{ Form::text('max', null, array('class'=>'form-control')) }}
	{{ Form::hidden('tournament_id', $tournament->id)}}
	<br>
	{{ Form::submit() }}
	{{ Form::close() }}
	</div>
</div>

@stop