<?php

namespace App\Http\Controllers;

use Auth;
use App\Pais;
use Illuminate\Http\Request;
use App\Http\Requests\Pais\CreateFormRequest;
use App\Http\Requests\Pais\UpdateFormRequest;

/**
 * Class PaisController
 * @package App\Http\Controllers
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $paises = Pais::on($user->schema)->paginate();

        return response()->json($paises);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Pais\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $user = Auth::user();

        $pais = $request->all();

        $created = Pais::on($user->schema)->create($pais);

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

        $paises = Pais::on($user->schema)->findOrFail($id);

        return response()->json($paises);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Pais\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $user = Auth::user();

        $pais = Pais::on($user->schema)->findOrFail($id)->update($request->all());

        return response()->json($pais);
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

        $pais = Pais::on($user->schema)->findOrFail($id);

        return response()->json($pais->delete());
    }
}
