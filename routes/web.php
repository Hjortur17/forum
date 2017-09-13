<?php

Auth::routes();

Route::get('/', 'GreetingController@show');

/*Route::get('/greeting/{id}/{count}', function($id, $count) {
	  return view('messages.greeting', compact('id', 'count'));
});*/

Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function() {
	return view('threads.create');
});