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


Route::get('/',[
	'uses' => 'adminController@get_stats',
	]);

Route::get('/batting-stats', [
    'uses' => 'adminController@batting_stats',
]);
Route::get('/bowling-stats', [
    'uses' => 'adminController@bowling_stats',
]);

Route::get('/individual',[
	'uses' => 'adminController@get_all_stats',
	'as' => 'individual',
	]);




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/createNewPlayer',[
	'uses' => 'adminController@get_New_Player',
	'as' => 'new_player',
	]);


Route::post('/createNewPlayer',[
	'uses' => 'adminController@create_new_player',
	]);

Route::get('/admin',[
	'uses' => 'adminController@get_Admin',
	'as' => 'admin',
	]);

Route::post('/admin',[
	'uses' => 'adminController@update_batting',
	]);
Route::get('/bowling',[
	'uses' => 'adminController@get_bowling',
	]);

Route::post('/bowling',[
	'uses' => 'adminController@update_bowling',
	]);