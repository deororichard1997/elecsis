<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Laracasts\Flash\Flash;

class ProductController extends Controller
{

    function __construct($foo = null)
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        $suma = 0;
        foreach ($products as $value) {
            $suma = $suma + $value->precio_total;
        }

        return view('products.index')->with(['products' => $products, 'suma' => $suma]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ifExist = Product::where('referencia', $request->referencia)->get();

        if (count($ifExist) > 0) {
            Flash::error('LA REFERENCIA SE ENCUENTRA EN USO');
        }else{
            $product = new Product();

            $product->fill($request->all());
            $product->precio_total = $request->cantidad * $request->precio_unitario;

            $product->save();
            Flash::success('PRODUCTO REGISTRADO');
        }


        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.update')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->fill($request->all());

        $product->update();

        /*$products = Product::all();

        return view('products.index')->with('products', $products);*/

        Flash::success('PRODUCTO ACTUALIZADO');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Product::find($id)->delete();

       Flash::success('PRODUCTO ELIMINADO');
       return redirect()->route('products.index');
    }

}
