<?php

namespace App\Http\Controllers;

use App\Plantel;
use Illuminate\Http\Request;
use App\Http\Requests\Plantel\CreateFormRequest;
use App\Http\Requests\Plantel\UpdateFormRequest;

class PlantelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planteles = Plantel::all();

        return response()->json($planteles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Plantel\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $plantel = $request->all();

        $created = Plantel::create($plantel);

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
        $planteles = Plantel::findOrFail($id);

        return response()->json($planteles);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Plantel\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $plantel = Plantel::findOrFail($id)->update($request->all());

        return response()->json($plantel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plantel = Plantel::findOrFail($id);

        return response()->json($plantel->delete());
    }
}
