<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $producto = new Product();
        $producto->nombre_productos = $request->input('nombre_productos');
        $producto->precio = $request->input('precio');
        $producto->fecha_vencimiento = $request->input('fecha_vencimiento');
        $producto->unidades_disponibles = $request->input('unidades_disponibles');
        $producto->unidades_reservadas = $request->input('unidades_reservadas');
        $producto->oferta = $request->input('oferta');
        $producto->accesorio = $request->input('accesorio');
        $producto->save();
        return json_encode(['msg'=>'added']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Product();
        $producto->nombre_productos = $request->nombre_productos;
        $producto->precio = $request->precio;
        $producto->fecha_vencimiento = $request->fecha_vencimiento;
        $producto->unidades_disponibles = $request->unidades_disponibles;
        $producto->unidades_reservadas = $request->unidades_reservadas;
        $producto->oferta = $request->oferta;
        $producto->accesorio = $request->accesorio;

        $producto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchForName($letra)
    {
        $nombreProducto = Product::where('nombre_productos','like',$letra.'%')->get();
        return $nombreProducto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $producto = Product::findOrFail($request->id);

        $producto->nombre_productos = $request->nombre_productos;
        $producto->precio = $request->precio;
        $producto->fecha_vencimiento = $request->fecha_vencimiento;
        $producto->unidades_disponibles = $request->unidades_disponibles;
        $producto->unidades_reservadas = $request->unidades_reservadas;
        $producto->oferta = $request->oferta;
        $producto->accesorio = $request->accesorio;

        $producto->save();

        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Product::destroy($id);
        return json_encode(['msg'=>'eliminado']);
    }
}
