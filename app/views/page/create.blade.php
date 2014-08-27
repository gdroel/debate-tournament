@extends('layout')

@section('content')
<div class="container">

{{ Form::open(array('action'=>'PageController@doCreate'))}}

{{ Form::text('title', null, array('class'=>'form-control')) }}
<br>
{{ Form::textarea('body', null, array('class'=>'form-control','id'=>'body'))}}
<br>
{{ Form::select('category', array('debate'=>'debate','speech'=>'speech','location'=>'location','schedule'=>'schedule','other'=>'other'))}}
{{ Form::hidden('tournament_id',$tournament)}}


{{ Form::submit('Create Page',array('class'=>'btn btn-info')) }}
{{ Form::close() }}

            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('body');
            </script>

</div>
@stop