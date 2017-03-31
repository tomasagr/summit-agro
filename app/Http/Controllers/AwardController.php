<?php

namespace App\Http\Controllers;

use App\Http\Requests\AwardsRequest;
use App\Award;
use Illuminate\Http\Request;

class AwardController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $awards = Award::all();
    return view('panel.awards.index', compact('awards'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('panel.awards.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(AwardsRequest $request)
  {
    $award = $request->all();

    if ($request->hasFile('image')) {
      $award["image"] = $request->image->storeAs('images', 'premio-' . date('dym') . '.' . $request->image->extension());
    }

    $award = Award::create($award);

    if ($award instanceof Award)   {
      return redirect('/panel/awards')->with('status', 'Guardado con exito!');
    }

    return redirect()->back()->with('status', 'Error interno vuelva a intentar');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $award = Award::find($id);
    return view('panel.awards.edit', compact('award'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(AwardsRequest $request, $id)
  {
    $award = Award::find($id);

    $res = $award->update($request->all());

    if ($res) {
      return redirect('/panel/awards')->with('status', 'Actualizado con exito!');
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
    $award = Award::find($id);

    $res = $award->delete();

    if ($res) {
      return redirect('/panel/awards')->with('status', 'Eliminado con exito!');
    }
  }
}