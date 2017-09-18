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
		$countries = ['Ísland', 'Ísland', 'Írland', 'Ísland', 'Írland'];

		return view('threads.create', compact('countries'));
	}

	public function show($id)
	{
		return view('threads.show');
	}
}