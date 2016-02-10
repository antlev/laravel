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
    return view('welcome');
});
Route::get('/home/', function () {
    return view('index');
});
Route::get('/forum2/',function(){
	return View::make('forumView','forumController@index');

});

Route::get('users', 'alexController@getInfos');
Route::post('users', 'alexController@postInfos');
Route::get('calendar','alexController@getCalendar');
// Route::get('autocomplete', function($data){
// 	// $resp = DB::select()
// 	var_dump($data);
// });
Route::get('toto', 'alexController@autocomplete');
Route::get('list_view/{terrains}', 'alexController@index');

Route::get('/chris/', 'chrisController@index');

Route::post('/login/', 'AccountController@login');


Route::get('/forum/', 'forumController@index');
// Route::get('/forum/', function() {
// 	return view('indexForum');
// });
