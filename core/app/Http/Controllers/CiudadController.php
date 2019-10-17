<?php

namespace App\Http\Controllers;

use App\Ciudad;
use Illuminate\Http\Request;
use App\Http\Requests\Ciudad\CreateFormRequest;
use App\Http\Requests\Ciudad\UpdateFormRequest;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = Ciudad::all();

        return response()->json($ciudades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Ciudad\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $ciudad = $request->all();

        $created = Ciudad::create($ciudad);

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
        $ciudades = Ciudad::findOrFail($id);

        return response()->json($ciudades);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Ciudad\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $ciudad = Ciudad::findOrFail($id)->update($request->all());

        return response()->json($ciudad);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad = Ciudad::findOrFail($id);

        return response()->json($ciudad->delete());
    }
}
