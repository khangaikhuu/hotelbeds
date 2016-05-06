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

Route::get('/blank', function () {
    return view('admin.blank');
});
 
Route::get('/index', function (){
	return view('index');
});

Route::group(['middleware' => ['web']], function (){
	Route::resource('posts', 'PostsController');
});


Route::group(['middleware' => ['web']], function (){
	Route::resource('formcompletion', 'FormCompletionController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::get('/react', function (){
    return view('profile');
});

Route::get('/booking', function (){
    return view('bookingcompleted');
});


Route::get('/reviews', function (){
    return view('myreviews');
});

