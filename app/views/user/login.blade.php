@extends('layout')

@section('content')
<div class="container">
	<div class="col-md-4 col-md-offset-4">
		{{ Form::open(array('action'=>'UserController@doLogin')) }}
		{{ Form::label('email','Email') }}
		{{ Form::text('email', null, array('class'=>'form-control')) }}

		{{ Form::label('password','Password')}}
		{{ Form::password('password', array('class'=>'form-control')) }}
		{{ Form::submit() }}
		{{ Form::close() }}
	</div>
</div>
@stop