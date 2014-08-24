<?php

class UserController extends BaseController{

	public function showRegister(){

		return View::make('user.register');
	}

	public function doRegister(){

		$user = new User();

		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->role = Input::get('role');

		$user->save();
	}
}