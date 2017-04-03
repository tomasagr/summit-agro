<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Levels;

class LevelAwardsController extends Controller
{
    public function index()
    {
    	$levels = Levels::with('awards')->get();

    	return $levels;
    }
}
