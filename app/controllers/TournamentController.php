<?php

class TournamentController extends BaseController{
	
	public function showCreate(){

		return View::make('tournament.create');
	}

	public function doCreate(){

		$tournament = new Tournament();

		$tournament->name = 			Input::get('name');
		$tournament->location = 		Input::get('location');

		$tournament->register_start = 	Input::get('register_begin');
		$tournament->register_end = 	Input::get('register_end'); 

		$tournament->tournament_start = Input::get('tournament_begin');
		$tournament->tournament_end =	Input::get('tournament_end');

		$tournament->save();
	}

	public function show($tournament){

		$tournament = Tournament::where('name',$tournament)->first();
		
		return View::make('tournament.show',compact('tournament'));
	}

	//Protect this with route
	public function dashboard($tournament){

		$tournament = Tournament::where('name', $tournament)->first();

		return View::make('tournament.dashboard', compact('tournament'));

	}
}