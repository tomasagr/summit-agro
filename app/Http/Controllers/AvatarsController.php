<?php

namespace App\Http\Controllers;

use App\Avatar;
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
    	$data = $request->all();

    	$filtered = substr($data['image'], strpos($data['image'], ",")+1);

    	$unencodedData = base64_decode($filtered);

    	file_put_contents(public_path() . "/avatars/". $data["user_id"] . '.png', $unencodedData);

    	$res = Avatar::create([
    		'meta' => json_encode($data["meta"]),
    		'japanese' => utf8_encode($data['japanese']),
    		'name' => $data["name"],
    		'image' => $data["user_id"] . '.png',
    		'user_id' => $data["user_id"]
    	]);

    	if ($res) {
    		return response()->json(['message' => 'ok', 'code' => 200]);
    	}
    }
}
