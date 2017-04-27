<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!\Auth::guest()) {
            return redirect('/home');
        }
        return view('intros/intro-1');
    }

    public function home()
    {
        return view('home');
    }
}
