<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
	public function index()
	{
		$threads = [
			['title' => 'Titill A', 'body' => 'Þetta er A'],
			['title' => 'Titill b', 'body' => 'Þetta er B']
		];

		return view('threads.index', compact('threads'));
	}

	public function create()
	{
		$tasks = [
			['title' => 'Fara út í búð', 'complete' => 'true', 'anchor' => 'http://www.bonus.is'], 
			['title' => 'Þrífa bílinn', 'complete' => 'true', 'anchor' => 'http://www.geysir.is'], 
			['title' => 'Klára heimasíðuna', 'complete' => 'false', 'anchor' => 'https://www.hjorturfreyr.com'], 
			['title' => 'Kaupa egg', 'complete' => 'true', 'anchor' => 'http://www.netto.is'], 
			['title' => 'Hanna leikjasíðu', 'complete' => 'false', 'anchor' => 'http://www.gamespot.com']
		];

		return view('threads.create', compact('tasks'));
	}

	public function show($id)
	{
		return view('threads.show');
	}
}