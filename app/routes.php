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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5f3fe3d51f1c9dad43d739a2fee09b543e15cb29
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
<<<<<<< HEAD
});
=======
Route::get('users', 'UserController@getIndex');
>>>>>>> Revert "added new page"
=======
Route::get('users', 'UserController@getIndex');
>>>>>>> a8615847aab3dc893b333b2cc7b200bd2c7cdd8f
=======
});
>>>>>>> 5f3fe3d51f1c9dad43d739a2fee09b543e15cb29
