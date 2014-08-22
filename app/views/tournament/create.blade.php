@extends('layout')

@section('content')
<div class="container">

	<div class="col-md-4 col-md-offset-4">
	{{ Form::open(array('action'=>'TournamentController@doCreate')) }}

	{{ Form::label('name', 'Name') }}
	{{ Form::text('name',null, array('class'=>'form-control'))}}

	<br>

	{{ Form::label('location', 'Location') }}
	{{ Form::text('location',null, array('class'=>'form-control')) }}

	<br>

	<!--Start Registration-->
	{{ Form::label('register_begin', 'When will Registration Start?')}}

    <div class="input-group date form_datetime" data-link-field="dtp_input1">
        <input class="form-control" size="16" type="text" value="" name="register_begin" readonly>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input1" value="" /><br/>


	<!--End Registration-->

	{{ Form::label('register_end', 'When will Registration End?')}}

    <div class="input-group date form_datetime" data-link-field="dtp_input1">
        <input class="form-control" size="16" type="text" value="" name="register_end" readonly>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input1" value="" /><br/>

	<!--Tournament Start Date-->

	{{ Form::label('tournament_begin', 'When will the Tournament Begin?')}}
    <div class="input-group date form_date" data-date="" data-link-field="dtp_input2">
        <input class="form-control" size="16" type="text" value="" name="tournament_begin" readonly>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input2" value="" /><br/>

	<!--Tournament End Date-->

	{{ Form::label('tournament_end', 'When will the Tournament End?')}}
    <div class="input-group date form_date" data-date="" data-link-field="dtp_input2">
        <input class="form-control" size="16" type="text" value="" name="tournament_end" readonly>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input2" value="" /><br/>

	{{ Form::submit() }}
	{{ Form::close() }}
	</div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

 <script type="text/javascript">

	$('.form_datetime').datetimepicker({
	    //language:  'fr',
	    weekStart: 1,
	    todayBtn:  1,
	autoclose: 1,
	todayHighlight: 1,
	startView: 2,
	forceParse: 0,
	    showMeridian: 1
	});
	$('.form_date').datetimepicker({
	    //language:  'fr',
	    weekStart: 1,
	    todayBtn:  1,
	autoclose: 1,
	todayHighlight: 1,
	startView: 2,
	minView: 2,
	forceParse: 0
	});

</script>

@stop