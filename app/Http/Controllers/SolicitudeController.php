<?php 

namespace App\Http\Controllers;

use App\Solicitude;
use App\User;
use App\Product;
use Illuminate\Http\Request;

class SolicitudeController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
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
    $data = $request->all();

    $solicitude = $user->solicitudes()->create($data);
    
    if (!($solicitude instanceof Solicitude)) {
      return 'error';
    }
    
    if (count($data["products"])) {
      $solicitude->products()->attach($data["products"]);
      

      $this->saveUserPoints($user, $data["products"]);
    } 

    return 'ok';
  }

  private function saveUserPoints($user, $ids) {
      $totalPoints = 0;
      
      foreach ($ids as $id) {
        $product = Product::find($id);
        $totalPoints += $product->points;
      }

      $totalPoints += $user->points;
      
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