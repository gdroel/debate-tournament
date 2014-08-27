<?php

class EventController extends BaseController{

	public function showCreate($tournament){

		$tournament = Tournament::where('name',$tournament)->first();
		return View::make('event.create',compact('tournament'));
	}

	public function doCreate(){

		$event = new EventModel();

		$event->name = Input::get('name');
		$event->max = Input::get('max');
		$event->tournament_id = Input::get('tournament_id');

		$event->save();

		return Redirect::back();
	}

	public function index($tournament){

		$tournament = Tournament::where('name',$tournament)->first();

		return View::make('event.index',compact('tournament'));
	}

	public function RegisterEvent(){

		$tournament_name = Input::get('tournament');
		$event_name = Input::get('event');
		$user_id = Input::get('user_id');

		$tournament = Tournament::where('name',$tournament_name)->first();
		$event = $tournament->events()->where('name',$event_name)->first();
		$user = User::where('id',$user_id)->first();

		$event->users()->save($user);
	}
}