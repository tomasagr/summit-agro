<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Mail\Register;
use App\User;
use Illuminate\Http\Request;

class UserSiteController extends Controller
{
   public function store(UserStoreRequest $request)
  {
    $user = $request->all();
    $user["type"] = "user";
    $user["status"] = 0;
    $user = User::create($user);

    if ($user instanceof User) {
      \Mail::to(config('user.mails'))->send(new Register($user));
      return redirect('/login')->with('status', 'Registrado con exito sera habilitado a la brevedad');
    }

    return redirect()->back()->with('status', 'Error interno vuelva a intentar');
  }

  public function show($id)
  {
    $user = User::find($id);
    return view('profile.show', $user);
  }
}
