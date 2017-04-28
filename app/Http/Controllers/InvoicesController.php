<?php

namespace App\Http\Controllers;

use App\Solicitude;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
    	$invoices = Solicitude::orderBy('created_at', 'desc')->paginate(10);

    	return view('panel.invoices.index', compact('invoices'));
    }

    public function status(Request $request, $id)
    {
    	$invoice = Solicitude::find($id);
    	$q = $request->q;

    	if ($q == 'Rechazada') {
    		$points = $invoice->user->points - $invoice->points;
    		$invoice->user->update([
    			'points' => $points
    		]);
    	}

    	if ($invoice->status == 'Rechazada' && $q == 'Aceptada') {
    		$points = $invoice->user->points + $invoice->points;

    		$invoice->user->update([
    			'points' => $points
    		]);
    	}

    	$invoice->update(['status' => $q]);
    	return redirect()->back();
    }

    public function show($id)
    {
    	$invoice = Solicitude::find($id);
    	return view('panel.invoices.show', compact('invoice'));
    }
}
