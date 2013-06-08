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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('home', array('as' => 'home', function()
{
    return View::make('home');
}));

Route::get('howitworks', array('as' => 'howitworks', function()
{
    return View::make('howitworks');
}));

Route::get('apps', function()
{
    return View::make('apps');
});

Route::get('analytics', function()
{
    return View::make('analytics');
});




Route::get('games', 'GameController@action_games');
Route::post('games', 'GameController@action_games');


// Authentication
Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');