<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function show()
    {
	return view('messages.greeting', ['name' => 'Hjörtur Freyr']);
    }
}
