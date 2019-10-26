<?php

namespace App\Http\Controllers;

use Auth;
use App\Barrio;
use Illuminate\Http\Request;
use App\Http\Requests\Barrio\CreateFormRequest;
use App\Http\Requests\Barrio\UpdateFormRequest;

/**
 * Class BarrioController
 * @package App\Http\Controllers
 */
class BarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $barrios = Barrio::on($user->schema)->paginate();

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
        $user = Auth::user();

        $barrio = $request->all();

        $created = Barrio::on($user->schema)->reate($barrio);

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
        $user = Auth::user();

        $barrios = Barrio::on($user->schema)->indOrFail($id);

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
        $user = Auth::user();

        $barrio = Barrio::on($user->schema)->indOrFail($id)->update($request->all());

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
        $user = Auth::user();

        $barrio = Barrio::on($user->schema)->indOrFail($id);

        return response()->json($barrio->delete());
    }
}
