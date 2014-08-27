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

	public function showLogin(){

		return View::make('user.login');
	}

	public function doLogin(){

		if(Auth::attempt(array(
			'email'=>Input::get('email','password'),
			'password'=>Input::get('password'))))
		{

			echo "success";
		}

		else{

			echo 'fail';
		}



	}
}