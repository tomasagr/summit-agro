<?php 

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $products = Product::all();
    return view('panel.products.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('panel.products.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(ProductRequest $request)
  {
    $product = $request->all();

    $product = Product::create($product);

    if ($product instanceof Product)   {
      return redirect('/panel/products')->with('status', 'Guardado con éxito!');
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
    $product = Product::find($id);
    return view('panel.products.edit', compact('product'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(ProductRequest $request, $id)
  {
    $product = Product::find($id);

    $res = $product->update($request->all());

    if ($res) {
      return redirect('/panel/products')->with('status', 'Actualizado con exito!');
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
    $product = Product::find($id);

    $res = $product->delete();

    if ($res) {
      return redirect('/panel/products')->with('status', 'Eliminado con exito!');
    }
  }
}