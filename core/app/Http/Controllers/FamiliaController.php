<?php

namespace App\Http\Controllers;

use Auth;
use App\Familia;
use Illuminate\Http\Request;
use App\Http\Requests\Familia\CreateFormRequest;
use App\Http\Requests\Familia\UpdateFormRequest;

/**
 * Class FamiliaController
 * @package App\Http\Controllers
 */
class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $familias = Familia::on($user->schema)->paginate();

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
        $user = Auth::user();

        $familia = $request->all();

        $created = Familia::on($user->schema)->create($familia);

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

        $familias = Familia::on($user->schema)->findOrFail($id);

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
        $user = Auth::user();

        $familia = Familia::on($user->schema)->findOrFail($id)->update($request->all());

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
        $user = Auth::user();

        $familia = Familia::on($user->schema)->findOrFail($id);

        return response()->json($familia->delete());
    }
}
