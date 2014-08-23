<?php

class PageController extends BaseController{

	public function doCreate(){

		//User Validation would go right here

		$page = new Page();

		$page->title = Input::get('title');
		$page->body = Input::get('body');
		$page->image_path = "";
		$page->slug = Str::slug(Input::get('title'));
		$page->category = Input::get('category');

		$page->tournament_id = Input::get('tournament_id');

		$page->save();
	}

	public function doEdit(){

		$page = Page::where('tournament_id', Input::get('tournament_id'))->where('category','home')->get();

		$page->title = Input::get('title');
		$page->body = Input::get('body');
		$page->category = Input::get('category');
		$page->image_path = '';

		$page->save();
	}

	public function showCreate($tournament){

		$tournament = Tournament::where('name', $tournament)->pluck('id');

		return View::make('page.create',compact('tournament'));
	}

	public function show($tournament, $page){

		$tournament = Tournament::where('name', $tournament)->first();

		$page = $tournament->pages()->where('slug',$page)->get();

		return View::make('page.show', compact('page'));

	}

}