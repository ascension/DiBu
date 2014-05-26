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

Route::get('/', 'HomeController@showWelcome');

//Login Routes
Route::get('/login/facebook', 	'LoginController@loginWithFacebook');

Route::get('/me/dashboard', 	'AccountController@showDashboard');

Route::get('/signin', 			'HomeController@showLogin');
/*Route::get('/signin',function()
{
	$data['title'] = 'DiBu - Login';
	return View::make('home.login',$data);
});
*/
Route::get('/signup', 			'HomeController@showSignup');

//Messages
Route::resource('api/message', 'MessageController');

//Food
Route::resource('api/food', 'FoodController');

//Meal
Route::resource('api/meal', 'MealController');

//Note
Route::resource('api/note', 'NoteController');

//Note
Route::resource('api/reading', 'ReadingController');

//Note
Route::resource('api/insulin', 'InsulinController');
