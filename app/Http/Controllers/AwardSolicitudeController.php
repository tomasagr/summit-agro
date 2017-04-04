<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\HasASolicitude;
use Illuminate\Support\Facades\Mail;
use App\AwardSolicitude;
use App\User;
use App\Award;

class AwardSolicitudeController extends Controller
{
    public function store(Request $request, $id)
    {
        $user = User::find($id);
        $data = $request->all();

        $awardSolicitude = $user->awardSolicitude()->create($data);

        if (!($awardSolicitude instanceof AwardSolicitude)) {
            return 'error';
        }

        if ($user->points <= 0 ) {
            return 'no dispone de puntos';
        }

        $award = Award::find($data["award_id"]);
        $count = $user->points - $award->points;

        if ($count < 0) {
            return 'no dispone de puntos';
        }

        $user->update(['points' => $count]);

        Mail::to(env('MAIL_TO'))->send(new HasASolicitude($user));

        return 'oks';
    }
}
