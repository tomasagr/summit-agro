<?php

namespace App\Http\Controllers;

use App\Award;
use Illuminate\Http\Request;

class DeleteImageAwardController extends Controller {

	public function destroy(Request $request, $id)
	{
		if (!$request->ajax()) {
			return response('Forbiden', 401);
		}

		$award = Award::find($id);
		$res = $award->update(['image' => '']);

		if ($res) {
			return response()->json(['messge' => 'ok']);
		}
	}
}