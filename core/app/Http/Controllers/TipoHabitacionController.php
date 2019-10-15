<?php

namespace App\Http\Controllers;

use App\TipoHabitacion;
use Illuminate\Http\Request;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
