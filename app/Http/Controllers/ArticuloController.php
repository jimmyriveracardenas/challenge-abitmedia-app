<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use Illuminate\Support\Str;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return $articulos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulo = new Articulo();
        $articulo->tipo = $request -> tipo;
        $articulo->descripcion = $request -> descripcion;
        $articulo->so = $request -> so;
        $articulo->stock = $request -> stock;
        $articulo->precio = $request -> precio;
        $articulo->serial = Str::random(100);
        
        $articulo->sku = $request -> sku;

        $articulo ->save();
    
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
        $articulo = Articulo::findOrFail($request->id);
        $articulo->tipo = $request -> tipo;
        $articulo->descripcion = $request -> descripcion;
        $articulo->so = $request -> so;
        $articulo->stock = $request -> stock;
        $articulo->precio = $request -> precio;
        $articulo->serial = $request -> serial;
        $articulo->sku = $request -> sku;

        $articulo ->save();
        return $articulo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $articulo = Articulo::destroy($request->id);
        return $articulo;
    }
}
