<?php 

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $users = User::all();
    return view('panel.users.index', compact('users'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('panel.users.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(UserStoreRequest $request)
  {
    $user = $request->all();

    
    $user = User::create($user);

    if ($user instanceof User)   {
      return redirect('/panel/users')->with('status', 'Guardado con exito!');
    }

    return redirect()->back()->with('status', 'Error interno vuelva a intentar');
  }

  public function toggle($id)
  {
  $user = User::find($id);

    $status = $user->status ? 0 : 1;
    $res = $user->update(['status' => $status]);

    return redirect()->back();
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $user = User::find($id);
    return view('panel.users.edit', compact('user'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(UserUpdateRequest $request, $id)
  {
    $user = User::find($id);

    $res = $user->update($request->all());

    if ($res) {
      return redirect('/panel/users')->with('status', 'Actualizado con exito!');
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $user = User::find($id);

    $res = $user->delete();

    if ($res) {
      return redirect('/panel/users')->with('status', 'Eliminado con exito!');
    }
  }
}