<?php

namespace App\Http\Controllers;

use Auth;
use App\Dependencia;
use Illuminate\Http\Request;
use App\Http\Requests\Dependencia\CreateFormRequest;
use App\Http\Requests\Dependencia\UpdateFormRequest;

/**
 * Class DependenciaController
 * @package App\Http\Controllers
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class DependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $dependencias = Dependencia::on($user->schema)->paginate();

        return response()->json($dependencias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Dependencia\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $user = Auth::user();

        $dependencia = $request->all();

        $created = Dependencia::on($user->schema)->create($dependencia);

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

        $dependencias = Dependencia::on($user->schema)->findOrFail($id);

        return response()->json($dependencias);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Dependencia\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $user = Auth::user();

        $dependencia = Dependencia::on($user->schema)->findOrFail($id)->update($request->all());

        return response()->json($dependencia);
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

        $dependencia = Dependencia::on($user->schema)->findOrFail($id);

        return response()->json($dependencia->delete());
    }
}
