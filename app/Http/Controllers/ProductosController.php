<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Productos;
use App\Proveedores;

use Illuminate\Http\Request;
use App\Http\Request\Productos\StoreRequest;
use App\Http\Request\Productos\UpdateRequest;


class ProductosController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Productos::get();
        return view('admin.productos.index' , compact('productos') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categorias = Categorias::get();
        $proveedores = Proveedores::get();

        return view('admin.productos.create' , compact('categorias','proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
        Productos::create($request->all());
        return redirect()->route(productos.index);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
        return view('admin.productos.show', compact('productos') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
        //
        $categorias = Categorias::get();
        $proveedores = Proveedores::get();


        return view('admin.productos.show', compact('productos', 'categorias','proveedores') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Productos $productos)
    {
        //
        $productos->update($request->all());
        return redirect()->route(productos.index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        //
        $productos->delete();
        return redirect()->route(productos.index);
    }
}
