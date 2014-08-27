<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**A Tournament Will have many events
	A user will have many events
	An event will have many users.
	When a user joins an event, a new relationship will start.

	$tournament->events()->where('name', $event)->users()

	**/
	public function events(){

		return $this->belongsToMany('Event','user_event','user_id','event_id');
	}

}
