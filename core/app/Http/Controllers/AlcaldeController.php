<?php

namespace App\Http\Controllers;

use App\Alcalde;
use Illuminate\Http\Request;
use App\Http\Requests\Alcalde\CreateFormRequest;
use App\Http\Requests\Alcalde\UpdateFormRequest;

class AlcaldeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alcaldes = Alcalde::all();

        return response()->json($alcaldes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Alcalde\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $alcalde = $request->all();

        $created = Alcalde::create($alcalde);

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
        $alcaldes = Alcalde::findOrFail($id);

        return response()->json($alcaldes);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Alcalde\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $alcalde = Alcalde::findOrFail($id)->update($request->all());

        return response()->json($alcalde);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alcalde = Alcalde::findOrFail($id);

        return response()->json($alcalde->delete());
    }
}
