<?php

class PageController extends BaseController{

	public function doCreate(){

		//User Validation would go right here

		$page = new Page();

		$page->title = Input::get('title');
		$page->body = Input::get('body');
		$page->image_path = "";
		$page->category = Input::get('category');

		$page->tournament_id = Input::get('tournament_id');

		$page->save();
	}

	public function showCreate($tournament){

		$tournament = Tournament::where('name', $tournament)->pluck('id');

		return View::make('page.create',compact('tournament'));
	}

	public function show($tournament, $page){

		$tournament = Tournament::where('name', $tournament)->first();

		$page = $tournament->pages()->where('title',$page)->get();

		return View::make('page.show', compact('page'));

	}

}