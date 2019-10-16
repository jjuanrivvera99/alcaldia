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

Route::group(['prefix' => '/api'], function () {

    Route::group(['prefix' => '/alcalde'], function () {
        Route::post('/list', 'AlcaldeController@index')->name('alcalde.list');
        Route::post('/{id}', 'AlcaldeController@show')->name('alcalde.show')->where('id','[0-9,]+');
        Route::post('/create', 'AlcaldeController@store')->name('alcalde.create');
        Route::post('/{id}/update', 'AlcaldeController@update')->name('alcalde.update')->where('id','[0-9,]+');
        Route::post('/{id}/delete', 'AlcaldeController@destroy')->name('alcalde.delete')->where('id','[0-9,]+');
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

    Route::group(['prefix' => '/barrio'], function () {
        Route::post('/list', 'BarrioController@index')->name('barrio.list');
        Route::post('/{id}', 'BarrioController@show')->name('barrio.show')->where('id','[0-9,]+');
        Route::post('/create', 'BarrioController@store')->name('barrio.create');
        Route::post('/{id}/update', 'BarrioController@update')->name('barrio.update')->where('id','[0-9,]+');
        Route::post('/{id}/delete', 'BarrioController@destroy')->name('barrio.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/ruta'], function () {
        Route::post('/list', 'RutaController@index')->name('ruta.list');
        Route::post('/{id}', 'RutaController@show')->name('ruta.show')->where('id','[0-9,]+');
        Route::post('/create', 'RutaController@store')->name('ruta.create');
        Route::post('/{id}/update', 'RutaController@update')->name('ruta.update')->where('id','[0-9,]+');
        Route::post('/{id}/delete', 'RutaController@destroy')->name('ruta.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/pais'], function () {
        Route::post('/list', 'PaisController@index')->name('pais.list');
        Route::post('/{id}', 'PaisController@show')->name('pais.show')->where('id','[0-9,]+');
        Route::post('/create', 'PaisController@store')->name('pais.create');
        Route::post('/{id}/update', 'PaisController@update')->name('pais.update')->where('id','[0-9,]+');
        Route::post('/{id}/delete', 'PaisController@destroy')->name('pais.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/ciudad'], function () {
        Route::post('/list', 'CiudadController@index')->name('ciudad.list');
        Route::post('/{id}', 'CiudadController@show')->name('ciudad.show')->where('id','[0-9,]+');
        Route::post('/create', 'CiudadController@store')->name('ciudad.create');
        Route::post('/{id}/update', 'CiudadController@update')->name('ciudad.update')->where('id','[0-9,]+');
        Route::post('/{id}/delete', 'CiudadController@destroy')->name('ciudad.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/tipo-identificacion'], function () {
        Route::post('/list', 'TipoIdentificacionController@index')->name('tipoid.list');
        Route::post('/{id}', 'TipoIdentificacionController@show')->name('tipoid.show')->where('id','[0-9,]+');
        Route::post('/create', 'TipoIdentificacionController@store')->name('tipoid.create');
        Route::post('/{id}/update', 'TipoIdentificacionController@update')->name('tipoid.update')->where('id','[0-9,]+');
        Route::post('/{id}/delete', 'TipoIdentificacionController@destroy')->name('tipoid.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/tipo-habitacion'], function () {
        Route::post('/list', 'TipoHabitacionController@index')->name('tipohab.list');
        Route::post('/{id}', 'TipoHabitacionController@show')->name('tipohab.show')->where('id','[0-9,]+');
        Route::post('/create', 'TipoHabitacionController@store')->name('tipohab.create');
        Route::post('/{id}/update', 'TipoHabitacionController@update')->name('tipohab.update')->where('id','[0-9,]+');
        Route::post('/{id}/delete', 'TipoHabitacionController@destroy')->name('tipohab.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/jornada'], function () {
        Route::post('/list', 'JornadaController@index')->name('jornada.list');
        Route::post('/{id}', 'JornadaController@show')->name('jornada.show')->where('id','[0-9,]+');
        Route::post('/create', 'JornadaController@store')->name('jornada.create');
        Route::post('/{id}/update', 'JornadaController@update')->name('jornada.update')->where('id','[0-9,]+');
        Route::post('/{id}/delete', 'JornadaController@destroy')->name('jornada.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/dependencia'], function () {
        Route::post('/list', 'DependenciaController@index')->name('dependencia.list');
        Route::post('/{id}', 'DependenciaController@show')->name('dependencia.show')->where('id','[0-9,]+');
        Route::post('/create', 'DependenciaController@store')->name('dependencia.create');
        Route::post('/{id}/update', 'DependenciaController@update')->name('dependencia.update')->where('id','[0-9,]+');
        Route::post('/{id}/delete', 'DependenciaController@destroy')->name('dependencia.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/enfermedad'], function () {
        Route::post('/list', 'EnfermedadController@index')->name('enfermedad.list');
        Route::post('/{id}', 'EnfermedadController@show')->name('enfermedad.show')->where('id','[0-9,]+');
        Route::post('/create', 'EnfermedadController@store')->name('enfermedad.create');
        Route::post('/{id}/update', 'EnfermedadController@update')->name('enfermedad.update')->where('id','[0-9,]+');
        Route::post('/{id}/delete', 'EnfermedadController@destroy')->name('enfermedad.delete')->where('id','[0-9,]+');
    });

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
