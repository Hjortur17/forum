<?php

Auth::routes();

Route::get('/', function() {
	return view('messages.greeting');
});

Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function() {
	return view('threads.create');
});