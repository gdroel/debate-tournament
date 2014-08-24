<?php

class Tournament extends Eloquent{

	public function pages(){

		return $this->hasMany('Page');
	}

	public function events(){

		return $this->hasMany('EventModel');
	}
}