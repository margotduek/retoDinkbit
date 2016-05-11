<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.home'); // laravel 5 return View('pages.home');
});
Route::get('contact', function()
{
	return View::make('pages.quote'); // laravel 5 return View('pages.quote');
});
Route::get('contact', function()
{
	return View::make('contact.quote'); // laravel 5 return View('pages.contact');
});
