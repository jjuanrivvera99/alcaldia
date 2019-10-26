<?php

namespace App\Http\Controllers;

use Auth;
use App\Integrante;
use Illuminate\Http\Request;
use App\Http\Requests\Integrante\CreateFormRequest;
use App\Http\Requests\Integrante\UpdateFormRequest;

/**
 * Class IntegranteController
 * @package App\Http\Controllers
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class IntegranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $integrantes = Integrante::on($user->schema)->paginate();

        return response()->json($integrantes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Integrante\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $user = Auth::user();

        $integrante = $request->all();

        $created = Integrante::on($user->schema)->create($integrante);

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

        $integrantes = Integrante::on($user->schema)->findOrFail($id);

        return response()->json($integrantes);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Integrante\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $user = Auth::user();

        $integrante = Integrante::on($user->schema)->findOrFail($id)->update($request->all());

        return response()->json($integrante);
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

        $integrante = Integrante::on($user->schema)->findOrFail($id);

        return response()->json($integrante->delete());
    }
}
