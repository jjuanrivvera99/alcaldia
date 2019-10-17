<?php

namespace App\Http\Controllers;

use App\Barrio;
use Illuminate\Http\Request;
use App\Http\Requests\Barrio\CreateFormRequest;
use App\Http\Requests\Barrio\UpdateFormRequest;

class BarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barrios = Barrio::all();

        return response()->json($barrios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Localidad\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $barrio = $request->all();

        $created = Barrio::create($barrio);

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
        $barrios = Barrio::findOrFail($id);

        return response()->json($barrios);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Localidad\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $barrio = Barrio::findOrFail($id)->update($request->all());

        return response()->json($barrio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barrio = Barrio::findOrFail($id);

        return response()->json($barrio->delete());
    }
}
