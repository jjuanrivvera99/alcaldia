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

Route::get('/alcalde/list', 'AlcaldeController@index')->name('alcalde.list');
Route::get('/alcalde/{id}', 'AlcaldeController@show')->name('alcalde.show')->where('id','[0-9,]+');
Route::get('/alcalde/create', 'AlcaldeController@store')->name('alcalde.create');
Route::get('/alcalde/{id}/update', 'AlcaldeController@update')->name('alcalde.update')->where('id','[0-9,]+');
Route::get('/alcalde/{id}/delete', 'AlcaldeController@destroy')->name('alcalde.delete')->where('id','[0-9,]+');

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
