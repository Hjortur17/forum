<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
	{
		return "index";
	}

	public function show($id)
	{
		return "show";
	}

	public function store()
	{
		return "store";
	}
}