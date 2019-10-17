<?php

namespace App\Http\Controllers;

use App\Familia;
use Illuminate\Http\Request;
use App\Http\Requests\Familia\CreateFormRequest;
use App\Http\Requests\Familia\UpdateFormRequest;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familias = Familia::all();

        return response()->json($familias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Familia\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $familia = $request->all();

        $created = Familia::create($familia);

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
        $familias = Familia::findOrFail($id);

        return response()->json($familias);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Familia\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $familia = Familia::findOrFail($id)->update($request->all());

        return response()->json($familia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $familia = Familia::findOrFail($id);

        return response()->json($familia->delete());
    }
}
