<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\User;
use Illuminate\Http\Request;

class UserSiteController extends Controller
{
   public function store(UserStoreRequest $request)
  {
    $user = $request->all();
    $user["type"] = "user";
    $user = User::create($user);

    if ($user instanceof User)   {
      \Auth::login($user);
      return redirect('/avatar-hombre/' . $user->id);
    }

    return redirect()->back()->with('status', 'Error interno vuelva a intentar');
  }

  public function show($id)
  {
    $user = User::find($id);
    return view('profile.show', $user);
  }
}
