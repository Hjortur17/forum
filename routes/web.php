<?php
Auth::routes();

// Threads
Route::get('/threads', 'ThreadsController@index');
Route::get('/threads/create', 'ThreadsController@create');
Route::get('/threads/{id}', 'ThreadsController@show');

// Profile
Route::get('/profile', 'ProfileController@index');
