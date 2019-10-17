<?php

namespace App\Http\Controllers;

use App\Jornada;
use Illuminate\Http\Request;
use App\Http\Requests\Jornada\CreateFormRequest;
use App\Http\Requests\Jornada\UpdateFormRequest;

class JornadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jornadas = Jornada::all();

        return response()->json($jornadas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Jornada\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $jornada = $request->all();

        $created = Jornada::create($jornada);

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
        $jornadas = Jornada::findOrFail($id);

        return response()->json($jornadas);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Jornada\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $jornada = Jornada::findOrFail($id)->update($request->all());

        return response()->json($jornada);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jornada = Jornada::findOrFail($id);

        return response()->json($jornada->delete());
    }
}
