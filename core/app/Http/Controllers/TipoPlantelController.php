<?php

namespace App\Http\Controllers;

use App\TipoPlantel;
use Illuminate\Http\Request;
use App\Http\Requests\TipoPlantel\CreateFormRequest;
use App\Http\Requests\TipoPlantel\UpdateFormRequest;

class TipoPlantelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoPlanteles = TipoPlantel::all();

        return response()->json($tipoPlanteles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TipoPlantel\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $tipoPlantel = $request->all();

        $created = TipoPlantel::create($tipoPlantel);

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
        $tipoPlanteles = TipoPlantel::findOrFail($id);

        return response()->json($tipoPlanteles);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TipoPlantel\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $tipoPlantel = TipoPlantel::findOrFail($id)->update($request->all());

        return response()->json($tipoPlantel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoPlantel = TipoPlantel::findOrFail($id);

        return response()->json($tipoPlantel->delete());
    }
}
