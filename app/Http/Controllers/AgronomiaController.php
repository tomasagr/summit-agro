<?php

namespace App\Http\Controllers;

use App\Agronomia;
use Illuminate\Http\Request;

class AgronomiaController extends Controller
{
    public function show(Request $request)
    {
    	$agronomia = Agronomia::where('cuit', $request->cuit)->first();

    	if ($agronomia instanceof Agronomia) {
    		return response()->json(['nombre' => $agronomia->nombre, 'status' => true]);
    	}

    	return response()->json(['nombre' => 'CUIT INCORRECTO', 'status' => false]);
    }
}
