<?php

namespace App\Http\Controllers;

use App\Http\Requests\CuponRequest;
use App\Cupon;
use Illuminate\Http\Request;

class CuponsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $cupons = Cupon::all();
    return view('panel.cupons.index', compact('cupons'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('panel.cupons.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(CuponRequest $request)
  {
    $cupon = $request->all();

    $cupon = Cupon::create($cupon);

    if ($cupon instanceof Cupon)   {
      return redirect('/panel/cupons')->with('status', 'Guardado con exito!');
    }

    return redirect()->back()->with('status', 'Error interno vuelva a intentar');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $cupon = Cupon::find($id);
    return view('panel.cupons.edit', compact('cupon'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(CuponRequest $request, $id)
  {
    $cupon = Cupon::find($id);

    $res = $cupon->update($request->all());

    if ($res) {
      return redirect('/panel/cupons')->with('status', 'Actualizado con exito!');
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
    $cupon = Cupon::find($id);

    $res = $cupon->delete();

    if ($res) {
      return redirect('/panel/cupons')->with('status', 'Eliminado con exito!');
    }
  }
}