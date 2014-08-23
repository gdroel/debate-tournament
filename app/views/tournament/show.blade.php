@extends('tournament-layout')

@section('content')
<div class="bg1">
<div class="jumbotron">
	<h1>{{ $tournament->name }}</h1>
	<p>{{ $tournament->location }}</p>
</div>

</div>
<div class="container">
	<div class="col-md-8">
	<h1>{{ $homepage->title }}</h1>
	<hr>
	<p>{{ $homepage->body }}</p>
	</div>
	<div class="col-md-4">
	<table class="table table-bordered info">
	    <thead>
	        <tr>
	            <th>Registration Start</th>
	            <th>Registration End</th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	            <td>{{ date('d/m/y', strtotime($tournament->register_start)) }}</td>
	            <td>{{ date('d/m/y', strtotime($tournament->register_end)) }}</td>
	        </tr>
	    </tbody>
	</table>

	<table class="table table-bordered info">
	    <thead>
	        <tr>
	            <th>Tournament Start</th>
	            <th>Tournament End</th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	            <td>{{ $tournament->tournament_start }}</td>
	            <td>{{ $tournament->tournament_end }}</td>
	        </tr>
	    </tbody>
	</table>

		</div>
	</div>
@stop
