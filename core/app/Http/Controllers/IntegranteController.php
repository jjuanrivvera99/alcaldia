<?php

namespace App\Http\Controllers;

use App\Integrante;
use Illuminate\Http\Request;
use App\Http\Requests\Integrante\CreateFormRequest;
use App\Http\Requests\Integrante\UpdateFormRequest;

class IntegranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $integrantes = Integrante::all();

        return response()->json($integrantes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Integrante\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $integrante = $request->all();

        $created = Integrante::create($integrante);

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
        $integrantes = Integrante::findOrFail($id);

        return response()->json($integrantes);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Integrante\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $integrante = Integrante::findOrFail($id)->update($request->all());

        return response()->json($integrante);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $integrante = Integrante::findOrFail($id);

        return response()->json($integrante->delete());
    }
}
