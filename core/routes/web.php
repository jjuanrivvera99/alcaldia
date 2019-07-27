<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mongo', function(){
    $users = \App\Mongo\User::first();

    $users->telefonos = [
        "casa" => 4487579,
        "cel" => 573167290759,
        "oficina" => [
            "fax" => 21312,
            "ext" => 23123
        ]
    ];

    $users->save();

    dd($users->telefonos['oficina']);
});
