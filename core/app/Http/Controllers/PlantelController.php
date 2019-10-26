<?php

namespace App\Http\Controllers;

use Auth;
use App\Plantel;
use Illuminate\Http\Request;
use App\Http\Requests\Plantel\CreateFormRequest;
use App\Http\Requests\Plantel\UpdateFormRequest;

/**
 * Class PlantelController
 * @package App\Http\Controllers
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Juan Felipe Rivera González <jjuanrivvera@gmail.com>
 */
class PlantelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $planteles = Plantel::on($user->schema)->paginate();

        return response()->json($planteles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Plantel\CreateFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $user = Auth::user();

        $plantel = $request->all();

        $created = Plantel::on($user->schema)->create($plantel);

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

        $planteles = Plantel::on($user->schema)->findOrFail($id);

        return response()->json($planteles);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Plantel\UpdateFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $user = Auth::user();

        $plantel = Plantel::on($user->schema)->findOrFail($id)->update($request->all());

        return response()->json($plantel);
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

        $plantel = Plantel::on($user->schema)->findOrFail($id);

        return response()->json($plantel->delete());
    }
}
