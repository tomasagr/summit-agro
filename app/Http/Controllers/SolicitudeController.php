<?php 

namespace App\Http\Controllers;

use App\Mail\HasASolicitude;
use App\Mail\Invoice;
use App\Product;
use App\Solicitude;
use App\User;
use Illuminate\Http\Request;

class SolicitudeController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('solicitudes.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request, $id)
  {
    $user = User::find($id);
    $data = $request->all()["data"];

    if ($request->hasFile('file')) {
      $data["invoice_image"] = $request->file->store('uploads', ['visibility'  => 'public']);
    }

    $solicitude = $user->solicitudes()->create($data);

    if (!($solicitude instanceof Solicitude)) {
      return response()->json(['code' => 500]);
    }

    if (count($data["products"])) {
      foreach ($data["products"] as $value) {
        $solicitude->products()->attach($value["product_id"], ['quanty' => $value["quanty"]]);
      }
      $this->saveUserPoints($user, $data['points']);
    }

    \Mail::to(config('user.mails'))
      ->send(new Invoice($user));
      
    return response()->json(['code' => 200]);
  }

  private function saveUserPoints($user, $points) {

    $totalPoints = $points + $user->points;

    return $user->update(['points' => $totalPoints]);
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

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }
  
}