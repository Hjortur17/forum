<?php
namespace App\Http\Controllers;

use Validator;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Thread;

class ThreadsController extends Controller
{
	public function index()
	{
		$threads = Thread::all();

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

	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'title' => 'required|max:40',
			'body' => 'required|min:20',
		]);

		if ($validator->fails()) {
			return redirect('threads/create')
				->withErrors($validator)
				->withInput();
		}

		$thread = new Thread;
		$thread->title = $request->title;
		$thread->body = $request->body;
		$thread->user_id = Auth::id();
		$thread->save();
		
		return redirect('/threads');
	}
}
