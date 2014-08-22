<?php 

class Page extends Eloquent{

	public function tournament(){

		return $this->belongsTo('Tournament');
	}
}