<?php
Auth::routes();

// Homepage
Route::get('/', function () {
	return redirect('/threads');
});

// Threads
Route::get('/threads', 'ThreadsController@index');
Route::post('/threads', 'ThreadsController@store');
Route::get('/threads/create', 'ThreadsController@create')->middleware('auth');
Route::get('/threads/{id}', 'ThreadsController@show');

// Profile
Route::get('/profile', 'ProfileController@index');
