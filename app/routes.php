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

<<<<<<< HEAD
Route::get('apps', function()
{
    return View::make('apps');
});

Route::get('apps_auto_quiz', function()
{
    return View::make('apps_auto_quiz');
});

Route::get('users', function()
{
    return View::make('users');
});
=======
Route::get('users', 'UserController@getIndex');
>>>>>>> Revert "added new page"
