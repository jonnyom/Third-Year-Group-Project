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

//Route::get('home','HomePageController@test');
Route::get('about', 'AboutPageController@index');
Route::get('/', 'HomePageController@index');

Route::get('events/browse', 'EventController@browse');
Route::get('events/browsePast', 'EventController@browsePast');
Route::get('events/dashboard', 'EventController@dashboard');
Route::get('events', 'EventController@index');
Route::get('events/create', 
  ['as' => 'create', 'uses' => 'EventController@create']);
Route::post('events/create', 
  ['as' => 'create_store', 'uses' => 'EventController@store']);
Route::get('events/{id}','EventController@show');


Route::get('organisation/create', 'OrganisationController@create');
Route::get('organisation/dashboard', 'OrganisationController@dashboard');
Route::get('organisation', 'OrganisationController@index');
Route::post('organisation', 'OrganisationController@store');
Route::get('organisation/{id}', 'OrganisationController@show');

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
