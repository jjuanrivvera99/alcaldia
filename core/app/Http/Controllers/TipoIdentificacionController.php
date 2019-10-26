<?php

namespace App\Http\Controllers;

use Auth;
use App\TipoIdentificacion;
use Illuminate\Http\Request;
use App\Http\Requests\TipoIdentificacion\CreateFormRequest;
use App\Http\Requests\TipoIdentificacion\UpdateFormRequest;

/**
 * Class TipoIdentificacionController
 * @package App\Http\Controllers
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class TipoIdentificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $tipoIdentificaciones = TipoIdentificacion::on($user->schema)->paginate();

        return response()->json($tipoIdentificaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TipoIdentificacion\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $user = Auth::user();

        $tipoIdentificacion = $request->all();

        $created = TipoIdentificacion::on($user->schema)->create($tipoIdentificacion);

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

        $tipoIdentificaciones = TipoIdentificacion::on($user->schema)->findOrFail($id);

        return response()->json($tipoIdentificaciones);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TipoIdentificacion\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $user = Auth::user();

        $tipoIdentificacion = TipoIdentificacion::on($user->schema)->findOrFail($id)->update($request->all());

        return response()->json($tipoIdentificacion);
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

        $tipoIdentificacion = TipoIdentificacion::on($user->schema)->findOrFail($id);

        return response()->json($tipoIdentificacion->delete());
    }
}
