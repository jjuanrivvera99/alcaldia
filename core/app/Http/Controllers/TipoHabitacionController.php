<?php

namespace App\Http\Controllers;

use App\TipoHabitacion;
use Illuminate\Http\Request;
use App\Http\Requests\TipoHabitacion\CreateFormRequest;
use App\Http\Requests\TipoHabitacion\UpdateFormRequest;

class TipoHabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoHabitaciones = TipoHabitacion::all();

        return response()->json($tipoHabitaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TipoHabitacion\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $tipoHabitacion = $request->all();

        $created = TipoHabitacion::create($tipoHabitacion);

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
        $tipoHabitaciones = TipoHabitacion::findOrFail($id);

        return response()->json($tipoHabitaciones);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TipoHabitacion\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $tipoHabitacion = TipoHabitacion::findOrFail($id)->update($request->all());

        return response()->json($tipoHabitacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoHabitacion = TipoHabitacion::findOrFail($id);

        return response()->json($tipoHabitacion->delete());
    }
}
