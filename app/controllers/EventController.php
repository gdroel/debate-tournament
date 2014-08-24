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

		return View::make('index');
	}
}