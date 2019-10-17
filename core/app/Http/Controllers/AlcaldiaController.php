<?php

namespace App\Http\Controllers;

use App\Alcaldia;
use Illuminate\Http\Request;
use App\Http\Requests\Alcaldia\CreateFormRequest;
use App\Http\Requests\Alcaldia\UpdateFormRequest;

class AlcaldiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alcaldias = Alcaldia::all();

        return response()->json($alcaldias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Alcaldia\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $alcaldia = $request->all();

        $created = Alcaldia::create($alcaldia);

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
        $alcaldias = Alcaldia::findOrFail($id);

        return response()->json($alcaldias);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Alcaldia\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $alcaldia = Alcaldia::findOrFail($id)->update($request->all());

        return response()->json($alcaldia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alcaldia = Alcaldia::findOrFail($id);

        return response()->json($alcaldia->delete());
    }
}
