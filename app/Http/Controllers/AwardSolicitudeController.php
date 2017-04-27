<?php

namespace App\Http\Controllers;

use App\Award;
use App\AwardSolicitude;
use App\Levels;
use App\Mail\HasASolicitude;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AwardSolicitudeController extends Controller
{
    public function index()
    {
        $levels = Levels::with('awards')->orderBy('id', 'DESC')->get();
        return view('awards.index', compact('levels'));
    }

    public function store(Request $request, $userId, $awardId)
    {
        $user = User::find($userId);
        $data = $request->all();
        $data["award_id"] = $awardId;
        $awardSolicitude = $user->awardSolicitude()->create($data);

        if (!($awardSolicitude instanceof AwardSolicitude)) {
            return 'error';
        }

        //TODO CONTROL DE STOCK

        if ($user->points <= 0 ) {
            return 'no dispone de puntos';
        }

        $award = Award::find($awardId);

        $count = $user->points - $award->points;

        if ($count < 0) {
            return 'no dispone de puntos';
        }

        $user->update(['points' => $count]);
        $stock = $award->stock - 1;
        $award->update(['stock' => $stock]);

        Mail::to(config('user.mails'))->send(new HasASolicitude($user));

        return redirect()->back()->with('status', 'Premio solicitado nos comunicaremos a la brevedad');
    }
}
