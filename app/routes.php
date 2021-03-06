<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('register','UserController@showRegister');
Route::post('register','UserController@doRegister');

Route::get('login', 'UserController@showLogin');
Route::post('login', 'UserController@doLogin');

Route::get('/create', 'TournamentController@showCreate');
Route::post('/create', 'TournamentController@doCreate');


Route::get('/{tournament?}/', 'TournamentController@show');
Route::get('/{tournament?}/dashboard', 'TournamentController@dashboard');

//This needs to be protected son only tournament director can access it.
Route::get('/{tournament?}/new', 'PageController@showCreate');
Route::post('/new', 'PageController@doCreate');

Route::get('/{tournament?}/events','EventController@index');
Route::post('/registerevent','EventController@RegisterEvent');

Route::get('/{tournament?}/newevent','EventController@showCreate');
Route::post('/newevent','EventController@doCreate');

Route::get('{tournament?}/{page?}/edit', 'PageController@showEdit');
Route::post('/edit', 'PageController@doEdit');

Route::get('/{tournament?}/{page?}', 'PageController@show');