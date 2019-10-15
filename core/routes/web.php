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

Route::group(['prefix' => '/alcalde'], function () {
    Route::get('/list', 'AlcaldeController@index')->name('alcalde.list');
    Route::get('/{id}', 'AlcaldeController@show')->name('alcalde.show')->where('id','[0-9,]+');
    Route::get('/create', 'AlcaldeController@store')->name('alcalde.create');
    Route::get('/{id}/update', 'AlcaldeController@update')->name('alcalde.update')->where('id','[0-9,]+');
    Route::get('/{id}/delete', 'AlcaldeController@destroy')->name('alcalde.delete')->where('id','[0-9,]+');
});

Route::group(['prefix' => '/alcaldia'], function () {
    Route::post('/list', 'AlcaldiaController@index')->name('alcaldia.list');
    Route::post('/{id}', 'AlcaldiaController@show')->name('alcaldia.show')->where('id','[0-9,]+');
    Route::post('/create', 'AlcaldiaController@store')->name('alcaldia.create');
    Route::post('/{id}/update', 'AlcaldiaController@update')->name('alcaldia.update')->where('id','[0-9,]+');
    Route::post('/{id}/delete', 'AlcaldiaController@destroy')->name('alcaldia.delete')->where('id','[0-9,]+');
});

Route::group(['prefix' => '/localidad'], function () {
    Route::post('/list', 'LocalidadController@index')->name('localidad.list');
    Route::post('/{id}', 'LocalidadController@show')->name('localidad.show')->where('id','[0-9,]+');
    Route::post('/create', 'LocalidadController@store')->name('localidad.create');
    Route::post('/{id}/update', 'LocalidadController@update')->name('localidad.update')->where('id','[0-9,]+');
    Route::post('/{id}/delete', 'LocalidadController@destroy')->name('localidad.delete')->where('id','[0-9,]+');
});
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
