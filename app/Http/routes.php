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

Route::get('users', 'alexController@getInfos');
Route::post('users', 'alexController@postInfos');
Route::get('toto', 'alexController@getForum');

Route::get('/chris/', 'chrisController@index');

Route::get('/forum/', 'forumController@index');
// Route::get('/forum/', function() {
// 	return view('indexForum');
// });
