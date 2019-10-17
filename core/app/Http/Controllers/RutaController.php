<?php

namespace App\Http\Controllers;

use App\Ruta;
use Illuminate\Http\Request;
use App\Http\Requests\Ruta\CreateFormRequest;
use App\Http\Requests\Ruta\UpdateFormRequest;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rutas = Ruta::all();

        return response()->json($rutas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Ruta\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $ruta = $request->all();

        $created = Ruta::create($ruta);

        return response()->json($created);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rutas = Ruta::findOrFail($id);

        return response()->json($rutas);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Ruta\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $ruta = Ruta::findOrFail($id)->update($request->all());

        return response()->json($ruta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruta = Ruta::findOrFail($id);

        return response()->json($ruta->delete());
    }
}
