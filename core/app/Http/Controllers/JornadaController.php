<?php

namespace App\Http\Controllers;

use Auth;
use App\Jornada;
use Illuminate\Http\Request;
use App\Http\Requests\Jornada\CreateFormRequest;
use App\Http\Requests\Jornada\UpdateFormRequest;

/**
 * Class JornadaController
 * @package App\Http\Controllers
 */
class JornadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $jornadas = Jornada::on($user->schema)->paginate();

        return response()->json($jornadas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Jornada\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $user = Auth::user();

        $jornada = $request->all();

        $created = Jornada::on($user->schema)->create($jornada);

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

        $jornadas = Jornada::on($user->schema)->findOrFail($id);

        return response()->json($jornadas);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Jornada\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $user = Auth::user();

        $jornada = Jornada::on($user->schema)->findOrFail($id)->update($request->all());

        return response()->json($jornada);
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

        $jornada = Jornada::on($user->schema)->findOrFail($id);

        return response()->json($jornada->delete());
    }
}
