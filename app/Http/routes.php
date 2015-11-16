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

Route::get('/', function () {
    return view('stats');
});


Route::get('/results', function () {
    return view('results');
});



Route::get('/admin',[
	'uses' => 'adminController@get_Admin',
	'as' => 'admin',
	]);

Route::post('/admin',[
	'uses' => 'adminController@update_stats',
	]);


Route::get('/individual',[
	'uses' => 'adminController@get_all_stats',
	'as' => 'individual',
	]);



Route::get('/createNewPlayer',[
	'uses' => 'adminController@get_New_Player',
	'as' => 'new_player',
	]);


Route::post('/createNewPlayer',[
	'uses' => 'adminController@create_new_player',
	]);