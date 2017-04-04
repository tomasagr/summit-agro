<?php

namespace App\Http\Controllers;

use App\Cupon;
use Illuminate\Http\Request;

class ApiCuponsController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->wantsJson()) {
    		$q = $request->q;
    		return Cupon::where("code", $q)->get();
    	}
    }
}
