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

		$debate_pages = $tournament->pages()->where('category','debate')->get();
		$speech_pages = $tournament->pages()->where('category', 'speech')->get();
		$location_pages = $tournament->pages()->where('category', 'location')->get();
		$schedule_pages = $tournament->pages()->where('category', 'schedule')->get();
		$other_pages = $tournament->pages()->where('category','other')->get();	
		$homepage = $tournament->pages()->where('category','home');
		$homepage = $homepage->first();

		return View::make('tournament.show',compact('tournament','speech_pages','debate_pages','location_pages','schedule_pages','other_pages','homepage'));
	}

	//Protect this with route
	public function dashboard($tournament){

		$tournament = Tournament::where('name', $tournament)->first();

		//Checking if the homepage exists. If the homepage exists, the user can edit it. If not, they can create a new homepage.
		if($tournament->pages()->where('category','home')->exists()){

			$homepage = True;
		}
		else{

			$homepage = False;
		}

		//Getting the actual homepage.
		$home = $tournament->pages()->where('category','home')->first();

		return View::make('tournament.dashboard', compact('tournament','homepage','home'));

	}
}