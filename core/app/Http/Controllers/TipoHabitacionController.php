<?php

namespace App\Http\Controllers;

use Auth;
use App\TipoHabitacion;
use Illuminate\Http\Request;
use App\Http\Requests\TipoHabitacion\CreateFormRequest;
use App\Http\Requests\TipoHabitacion\UpdateFormRequest;

/**
 * Class TipoHabitacionController
 * @package App\Http\Controllers
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class TipoHabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $tipoHabitaciones = TipoHabitacion::on($user->schema)->paginate();

        return response()->json($tipoHabitaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TipoHabitacion\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $user = Auth::user();

        $tipoHabitacion = $request->all();

        $created = TipoHabitacion::on($user->schema)->create($tipoHabitacion);

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

        $tipoHabitaciones = TipoHabitacion::on($user->schema)->findOrFail($id);

        return response()->json($tipoHabitaciones);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TipoHabitacion\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $user = Auth::user();

        $tipoHabitacion = TipoHabitacion::on($user->schema)->findOrFail($id)->update($request->all());

        return response()->json($tipoHabitacion);
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

        $tipoHabitacion = TipoHabitacion::on($user->schema)->findOrFail($id);

        return response()->json($tipoHabitacion->delete());
    }
}
