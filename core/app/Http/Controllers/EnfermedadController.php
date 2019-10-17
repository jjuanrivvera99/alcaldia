<?php

namespace App\Http\Controllers;

use App\Enfermedad;
use Illuminate\Http\Request;
use App\Http\Requests\Enfermedad\CreateFormRequest;
use App\Http\Requests\Enfermedad\UpdateFormRequest;

class EnfermedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfermedades = Enfermedad::all();

        return response()->json($enfermedades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Enfermedad\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $enfermedad = $request->all();

        $created = Enfermedad::create($enfermedad);

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
        $enfermedades = Enfermedad::findOrFail($id);

        return response()->json($enfermedades);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Enfermedad\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $enfermedad = Enfermedad::findOrFail($id)->update($request->all());

        return response()->json($enfermedad);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enfermedad = Enfermedad::findOrFail($id);

        return response()->json($enfermedad->delete());
    }
}
