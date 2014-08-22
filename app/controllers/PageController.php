<?php

class PageController extends BaseController{

	public function createPage(){

		$page = new Page();

		$page->title = 'info';
		$page->body = 'text';
		$page->tournament_id = 1;

		$page->save();
	}
}