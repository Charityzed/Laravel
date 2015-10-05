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
	return View::make('hello');
});

Route::get('articles', function()
 {
	return View::make('articles');
});
Route::post('/submit', 'Homecontroller@formprocess');

Route::get('/display', 'Homecontroller@getdata');