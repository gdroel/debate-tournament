<?php

class EventModel extends Eloquent{

	protected $table = "events";

	public function users(){

		return $this->belongsToMany('User');
	}

	public function tournament(){

		return $this->belongsTo('Tournament');
	}
}