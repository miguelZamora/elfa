<?php

namespace App\Http\Controllers;

use App\Proveedores;
use Illuminate\Http\Request;
use App\Http\Request\Proveedores\StoreRequest;
use App\Http\Request\Proveedores\UpdateRequest;

class ProveedoresController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proveedores = Proveedores::get();
        return view('admin.proveedores.index' , compact('proveedores') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.proveedores.create');
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
        Proveedores::create($request->all());
        return redirect()->route(proveedores.index);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedores $proveedores)
    {
        //
        return view('admin.proveedores.show', compact('proveedores') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedores $proveedores)
    {
        //
        return view('admin.proveedores.show', compact('proveedores') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Proveedores $proveedores)
    {
        //
        $proveedores->update($request->all());
        return redirect()->route(proveedores.index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedores $proveedores)
    {
        //
        $proveedores->delete();
        return redirect()->route(proveedores.index);
    }
}
