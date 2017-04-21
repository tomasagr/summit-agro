<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvatarsController extends Controller
{
    public function translate($name)
    {
    	$client = new \GuzzleHttp\Client();
    	$res = $client->request('GET', 'http://www.transltr.org/api/translate?text=' . $name .'&to=ja&from=es');

      return response($res->getBody());
    }

    public function store(Request $request) 
    {
    	dd($request->all());
    }
}
