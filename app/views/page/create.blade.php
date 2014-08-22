@extends('layout')

@section('content')
<div class="container">

{{ Form::open(array('action'=>'PageController@doCreate'))}}

{{ Form::text('title', null, array('class'=>'form-control')) }}
{{ Form::textarea('body', null, array('class'=>'form-control'))}}
{{ Form::select('category', array('debate'=>'debate','speech'=>'speech','location'=>'location','schedule'=>'schedule','other'=>'other'))}}
{{ Form::hidden('tournament_id',$tournament)}}


{{ Form::submit() }}
{{ Form::close() }}

</div>
@stop