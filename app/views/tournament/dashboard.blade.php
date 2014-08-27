@extends('layout')

@section('content')
<div class="container">
<div class="col-md-4">
	<div class="row">
	<h1>{{ $tournament->name }}</h1>
	<table class="table">
	<tbody>

	@if($tournament->pages)
	@foreach($tournament->pages as $page)
		<tr>
			<td><a href="{{ action('PageController@show', $tournament->name, $page->slug) }}">{{ $page->title }}</a></td>
			<td><a href="{{ URL::to($tournament->name.'/'.$page->slug.'/edit') }}">Edit</a></td>
		</tr>
	@endforeach
	@endif

	</tbody>
	</table>
	</div>
</div>
<div class="col-md-8">
	<h1>Edit the Home Page</h1>
		
	@if($homepage)
	{{ Form::open(array('action'=>'PageController@doEdit'))}}
	{{ Form::text('title', $home->title, array('class'=>'form-control')) }}
	{{ Form::textarea('body',$home->body,array('class'=>'form-control','id'=>'body')) }}
	{{ Form::hidden('category','home')}}
	{{ Form::hidden('slug',$home->slug)}}
	{{ Form::hidden('tournament_id', $home->tournament_id )}}
	{{ Form::submit('Save',array('class'=>'btn btn-info'))}}
	{{ Form::close() }}
	@else

	{{ Form::open(array('action'=>'PageController@doCreate')) }}
	{{ Form::text('title', null, array('class'=>'form-control')) }}
	{{ Form::textarea('body',null ,array('class'=>'form-control','id'=>'body')) }}
	{{ Form::hidden('category','home')}}
	{{ Form::hidden('tournament_id', $tournament->id )}}
	{{ Form::submit('Save',array('class'=>'btn btn-info'))}}
	{{ Form::close() }}
	@endif

</div>
<div class="col-md-4">
	<h1 class="inline">Events <a class="pull-right" href="{{ URL::to($tournament->name.'/'.'newevent') }}">+</a></h1>
	<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Max Competitors</th>
			<th>Competitors</th>
		</tr>
	</thead>
	<tbody>
	@if($events != '')
	@foreach($events as $event)
	<tr>
		<td>{{ $event->name }}</td>

		<td>{{ $event->max }}</td>
		<td>
			@foreach($event->users as $user)
				{{ $user->first_name }}
			@endforeach
		</td>
	</tr>
	@endforeach
	@endif
	</tbody>
</div>

</div>
<script>
	CKEDITOR.replace('body');
</script>
@stop