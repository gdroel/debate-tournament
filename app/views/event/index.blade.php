@extends('layout')

@section('content')
<div class="jumbotron">
	<h1>Register for Events</h1>
</div>
<div class="container">
	<div class="col-md-6">
		<table class="table">
			<thead>
				<tr>
					<th>Event Name</th>
					<th>Max Competitors</th>
					<th>Register</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tournament->events as $event)
					<tr>
						<td>{{ $event->name }}</td>
						<td>{{ $event->max }}</td>
						<td>
							{{ Form::open(array('action'=>'EventController@RegisterEvent')) }}</td>
							{{ Form::hidden('tournament',$tournament->name) }}
							{{ Form::hidden('event', $event->name ) }}
							{{ Form::hidden('user_id', Auth::user()->id) }}
							{{ Form::submit('Register') }}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@stop