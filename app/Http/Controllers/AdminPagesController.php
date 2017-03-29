<?php

namespace App\Http\Controllers;

class AdminPagesController extends Controller
{
	public function __construct()
	{
		$this->middleware('isAdmin');
	}

	public function panel()
	{
		return view('panel.index');
	}
}