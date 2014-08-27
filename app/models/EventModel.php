<?php

class EventModel extends Eloquent{

	protected $table = "events";

	public function users(){

		return $this->belongsToMany('User','user_event','event_id','user_id');
	}

	public function tournament(){

		return $this->belongsTo('Tournament');
	}


}