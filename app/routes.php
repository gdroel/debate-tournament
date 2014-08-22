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



Route::get('/create', 'TournamentController@showCreate');
Route::post('/create', 'TournamentController@doCreate');


Route::get('/{tournament?}/', 'TournamentController@show');
Route::get('/{tournament?}/new', 'PageController@createPage');
