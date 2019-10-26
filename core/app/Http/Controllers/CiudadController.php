<?php

namespace App\Http\Controllers;

use Auth;
use App\Ciudad;
use Illuminate\Http\Request;
use App\Http\Requests\Ciudad\CreateFormRequest;
use App\Http\Requests\Ciudad\UpdateFormRequest;

/**
 * Class CiudadController
 * @package App\Http\Controllers
 */
class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $ciudades = Ciudad::on($user->schema)->paginate();

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
        $user = Auth::user();

        $ciudad = $request->all();

        $created = Ciudad::on($user->schema)->create($ciudad);

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

        $ciudades = Ciudad::on($user->schema)->findOrFail($id);

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
        $user = Auth::user();

        $ciudad = Ciudad::on($user->schema)->findOrFail($id)->update($request->all());

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
        $user = Auth::user();

        $ciudad = Ciudad::on($user->schema)->findOrFail($id);

        return response()->json($ciudad->delete());
    }
}
