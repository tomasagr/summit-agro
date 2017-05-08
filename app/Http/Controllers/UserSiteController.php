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
    $user['email'] = $user['new-email'];
    $user['address'] = $user['new-address'];
    $user['password'] = $user['new-password'];
    $user = User::create($user);

    if ($user instanceof User) {
      \Mail::to(config('user.mails'))->send(new Register($user));
      return redirect('/login')->with('status', 'Registro de Usuario enviado con exito, una vez aprobado el registro podras ingresar a la web');
    }

    return redirect()->back()->with('status', 'Error interno vuelva a intentar');
  }

  public function show($id)
  {
    $user = User::find($id);
    return view('profile.show', $user);
  }

  public function showApi($id)
  {
    return $user = User::find($id);
  }

  public function update(Request $request, $id)
  {
    $user = User::find($id);
    $res = $user->update($request->all());
    return response()->json(['res' => $res]);
  }

  public function image(Request $request, $id) 
  {
    $user = User::find($id);

    $image = $request->file->store('uploads', ['visibility'  => 'public']);

    $user->update(['image' => $image]);
    return response()->json(['image' => $image]);
  }
}
