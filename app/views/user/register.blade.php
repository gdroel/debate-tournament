@extends('layout')

@section('content')
<div class="container">
<div class="col-md-4 col-md-offset-4">
	{{ Form::open(array('action'=>'UserController@doRegister')) }}

	{{ Form::label('first_name', 'First Name')}}
	{{ Form::text('first_name', null, array('class'=>'form-control')) }}

	{{ Form::label('last_name','Last Name')}}
	{{ Form::text('last_name', null, array('class'=>'form-control')) }}

	{{ Form::label('email','Email')}}
	{{ Form::text('email', null, array('class'=>'form-control')) }}

	{{ Form::label('password','Password')}}
	{{ Form::password('password', array('class'=>'form-control')) }}

	{{ Form::select('role', array('Judge'=>'judge','Debater'=>'debater','Timer'=>'timer')) }}
	{{ Form::submit() }}
	{{ Form::close() }}
</div>
</div>
@stop