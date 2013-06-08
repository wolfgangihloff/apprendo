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

Route::get('apps', function()
{
    return View::make('apps');
});

Route::get('games', function()
{
    $games = Game::all();

    return View::make('games')->with('games', $games);
});

Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});
