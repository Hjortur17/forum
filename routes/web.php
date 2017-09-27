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

// Comments
Route::get('/comments', 'CommentController@index');
Route::get('/comments/{id}', 'CommentController@show')->middleware('auth');
Route::post('/comments', 'CommentController@store');
