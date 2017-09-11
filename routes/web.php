<?php

Auth::routes();

Route::get('/', function() {
	return view('messages.hello', ['name' => 'Hjörtur Freyr']);
});

Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function() {
	return view('threads.create');
});