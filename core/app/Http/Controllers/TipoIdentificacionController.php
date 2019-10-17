<?php

namespace App\Http\Controllers;

use App\TipoIdentificacion;
use Illuminate\Http\Request;
use App\Http\Requests\TipoIdentificacion\CreateFormRequest;
use App\Http\Requests\TipoIdentificacion\UpdateFormRequest;

class TipoIdentificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoIdentificaciones = TipoIdentificacion::all();

        return response()->json($tipoIdentificaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TipoIdentificacion\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $tipoIdentificacion = $request->all();

        $created = TipoIdentificacion::create($tipoIdentificacion);

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
        $tipoIdentificaciones = TipoIdentificacion::findOrFail($id);

        return response()->json($tipoIdentificaciones);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TipoIdentificacion\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $tipoIdentificacion = TipoIdentificacion::findOrFail($id)->update($request->all());

        return response()->json($tipoIdentificacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoIdentificacion = TipoIdentificacion::findOrFail($id);

        return response()->json($tipoIdentificacion->delete());
    }
}
