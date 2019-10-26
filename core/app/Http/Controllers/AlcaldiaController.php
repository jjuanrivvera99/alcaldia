<?php

namespace App\Http\Controllers;

use Auth;
use App\Alcaldia;
use Illuminate\Http\Request;
use App\Http\Requests\Alcaldia\CreateFormRequest;
use App\Http\Requests\Alcaldia\UpdateFormRequest;

/**
 * Class AlcaldiaController
 * @package App\Http\Controllers
 */
class AlcaldiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $alcaldias = Alcaldia::on($user->schema)->paginate();

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
        $user = Auth::user();

        $alcaldia = $request->all();

        $created = Alcaldia::on($user->schema)->create($alcaldia);

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

        $alcaldias = Alcaldia::on($user->schema)->findOrFail($id);

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
        $user = Auth::user();

        $alcaldia = Alcaldia::on($user->schema)->findOrFail($id)->update($request->all());

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
        $user = Auth::user();

        $alcaldia = Alcaldia::on($user->schema)->findOrFail($id);

        return response()->json($alcaldia->delete());
    }
}
