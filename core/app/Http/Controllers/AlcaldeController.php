<?php

namespace App\Http\Controllers;

use Auth;
use App\Alcalde;
use Illuminate\Http\Request;
use App\Http\Requests\Alcalde\CreateFormRequest;
use App\Http\Requests\Alcalde\UpdateFormRequest;

/**
 * Class AlcaldeController
 * @package App\Http\Controllers
 */
class AlcaldeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        $alcaldes = Alcalde::on($user->schema)->paginate();

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
        $user = Auth::user();

        $alcalde = $request->all();

        $created = Alcalde::on($user->schema)->create($alcalde);

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

        $alcaldes = Alcalde::on($user->schema)->findOrFail($id);

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
        $user = Auth::user();

        $alcalde = Alcalde::on($user->schema)->findOrFail($id)->update($request->all());

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
        $user = Auth::user();

        $alcalde = Alcalde::on($user->schema)->findOrFail($id);

        return response()->json($alcalde->delete());
    }
}
