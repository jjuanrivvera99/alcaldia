<?php

namespace App\Http\Controllers;

use App\Pais;
use Illuminate\Http\Request;
use App\Http\Requests\Pais\CreateFormRequest;
use App\Http\Requests\Pais\UpdateFormRequest;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::all();

        return response()->json($paises);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Pais\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $pais = $request->all();

        $created = Pais::create($pais);

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
        $paises = Pais::findOrFail($id);

        return response()->json($paises);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Pais\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $pais = Pais::findOrFail($id)->update($request->all());

        return response()->json($pais);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pais = Pais::findOrFail($id);

        return response()->json($pais->delete());
    }
}
