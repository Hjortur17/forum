<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
	$threads = [
		['fullname' => 'Hjörtur Freyr Lárusson', 
		'username' => 'hjortur17',
		'member' => '3 vikur',
		'email' => 'hjorturfreyr@hjorturfreyr.com', 
		'text-head' => 'Veitingarstaðir',
		'text-head-link' => 'http://leit.is/veitingastadir?l=midbaer', 
		'text-body' => 'Veit einhver um góðar uppskriftir'],

		['fullname' => 'Hjörtur Freyr Lárusson', 
		'username' => 'hjortur17',
		'member' => '3 vikur',
		'email' => 'hjorturfreyr@hjorturfreyr.com', 
		'text-head' => 'Laravel 5.5',
		'text-head-link' => 'http://leit.is/veitingastadir?l=midbaer', 
		'text-body' => 'Hver er munurinn á Laravel 5.4 og 5.5?'],
	];
    	return view('profiles.index', compact('threads'));
    }
}
