<?php

namespace App\Http\Controllers;

use Auth;
use App\Localidad;
use Illuminate\Http\Request;
use App\Http\Requests\Localidad\CreateFormRequest;
use App\Http\Requests\Localidad\UpdateFormRequest;

/**
 * Class LocalidadController
 * @package App\Http\Controllers
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class LocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $localidades = Localidad::on($user->schema)->paginate();

        return response()->json($localidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $user = Auth::user();

        $localidad = $request->all();

        $created = Localidad::on($user->schema)->create($localidad);

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

        $localidades = Localidad::on($user->schema)->findOrFail($id);

        return response()->json($localidades);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $user = Auth::user();

        $localidad = Localidad::on($user->schema)->findOrFail($id)->update($request->all());

        return response()->json($localidad);
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

        $localidad = Localidad::on($user->schema)->findOrFail($id);

        return response()->json($localidad->delete());
    }
}
