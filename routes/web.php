<?php

Auth::routes();

Route::get('/', function() {
	$name = "Hjörtur Freyr";
	return view('messages.hello', compact($name));
});

Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function() {
	return view('threads.create');
});