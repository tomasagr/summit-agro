<?php

namespace App\Http\Controllers;

use App\AwardSolicitude;
use Illuminate\Http\Request;

class PanelAwardSolicitudeController extends Controller
{
    public function index()
    {
    	$solicitudes = AwardSolicitude::orderBy('created_at', 'DESC')
    																->with('user', 'award')
    																->paginate(10);
    	return view('panel.solicitudes.index', compact('solicitudes'));
    }

    public function toggle($id)
    {
    	$solicitudes = AwardSolicitude::find($id);

    	$solicitudes->update(['status' => !$solicitudes->status]);
    	
    	return redirect()->back();
    }
}
