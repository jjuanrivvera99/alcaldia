<?php

namespace App\Http\Controllers;

use App\Dependencia;
use Illuminate\Http\Request;
use App\Http\Requests\Dependencia\CreateFormRequest;
use App\Http\Requests\Dependencia\UpdateFormRequest;

class DependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencias = Dependencia::all();

        return response()->json($dependencias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Dependencia\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $dependencia = $request->all();

        $created = Dependencia::create($dependencia);

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
        $dependencias = Dependencia::findOrFail($id);

        return response()->json($dependencias);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Dependencia\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $dependencia = Dependencia::findOrFail($id)->update($request->all());

        return response()->json($dependencia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dependencia = Dependencia::findOrFail($id);

        return response()->json($dependencia->delete());
    }
}
