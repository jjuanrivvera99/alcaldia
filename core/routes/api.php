<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'Api\AuthController@login');
Route::post('signup', 'Api\AuthController@signup');

Route::group([
    'middleware' => 'auth:api'
], function() {

    Route::get('logout', 'Api/AuthController@logout');
    Route::get('user', 'Api/AuthController@user');

    Route::group(['prefix' => '/alcalde'], function () {
        Route::get('/list', 'AlcaldeController@index')->name('alcalde.list');
        Route::get('/{id}', 'AlcaldeController@show')->name('alcalde.show')->where('id','[0-9,]+');
        Route::post('/create', 'AlcaldeController@store')->name('alcalde.create');
        Route::put('/{id}/update', 'AlcaldeController@update')->name('alcalde.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'AlcaldeController@destroy')->name('alcalde.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/alcaldia'], function () {
        Route::get('/list', 'AlcaldiaController@index')->name('alcaldia.list');
        Route::get('/{id}', 'AlcaldiaController@show')->name('alcaldia.show')->where('id','[0-9,]+');
        Route::post('/create', 'AlcaldiaController@store')->name('alcaldia.create');
        Route::put('/{id}/update', 'AlcaldiaController@update')->name('alcaldia.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'AlcaldiaController@destroy')->name('alcaldia.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/localidad'], function () {
        Route::get('/list', 'LocalidadController@index')->name('localidad.list');
        Route::get('/{id}', 'LocalidadController@show')->name('localidad.show')->where('id','[0-9,]+');
        Route::post('/create', 'LocalidadController@store')->name('localidad.create');
        Route::put('/{id}/update', 'LocalidadController@update')->name('localidad.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'LocalidadController@destroy')->name('localidad.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/barrio'], function () {
        Route::get('/list', 'BarrioController@index')->name('barrio.list');
        Route::get('/{id}', 'BarrioController@show')->name('barrio.show')->where('id','[0-9,]+');
        Route::post('/create', 'BarrioController@store')->name('barrio.create');
        Route::put('/{id}/update', 'BarrioController@update')->name('barrio.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'BarrioController@destroy')->name('barrio.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/ruta'], function () {
        Route::get('/list', 'RutaController@index')->name('ruta.list');
        Route::get('/{id}', 'RutaController@show')->name('ruta.show')->where('id','[0-9,]+');
        Route::post('/create', 'RutaController@store')->name('ruta.create');
        Route::put('/{id}/update', 'RutaController@update')->name('ruta.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'RutaController@destroy')->name('ruta.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/pais'], function () {
        Route::get('/list', 'PaisController@index')->name('pais.list');
        Route::get('/{id}', 'PaisController@show')->name('pais.show')->where('id','[0-9,]+');
        Route::post('/create', 'PaisController@store')->name('pais.create');
        Route::put('/{id}/update', 'PaisController@update')->name('pais.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'PaisController@destroy')->name('pais.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/ciudad'], function () {
        Route::get('/list', 'CiudadController@index')->name('ciudad.list');
        Route::get('/{id}', 'CiudadController@show')->name('ciudad.show')->where('id','[0-9,]+');
        Route::post('/create', 'CiudadController@store')->name('ciudad.create');
        Route::put('/{id}/update', 'CiudadController@update')->name('ciudad.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'CiudadController@destroy')->name('ciudad.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/tipo-identificacion'], function () {
        Route::get('/list', 'TipoIdentificacionController@index')->name('tipoid.list');
        Route::get('/{id}', 'TipoIdentificacionController@show')->name('tipoid.show')->where('id','[0-9,]+');
        Route::post('/create', 'TipoIdentificacionController@store')->name('tipoid.create');
        Route::put('/{id}/update', 'TipoIdentificacionController@update')->name('tipoid.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'TipoIdentificacionController@destroy')->name('tipoid.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/tipo-habitacion'], function () {
        Route::get('/list', 'TipoHabitacionController@index')->name('tipohab.list');
        Route::get('/{id}', 'TipoHabitacionController@show')->name('tipohab.show')->where('id','[0-9,]+');
        Route::post('/create', 'TipoHabitacionController@store')->name('tipohab.create');
        Route::put('/{id}/update', 'TipoHabitacionController@update')->name('tipohab.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'TipoHabitacionController@destroy')->name('tipohab.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/jornada'], function () {
        Route::get('/list', 'JornadaController@index')->name('jornada.list');
        Route::get('/{id}', 'JornadaController@show')->name('jornada.show')->where('id','[0-9,]+');
        Route::post('/create', 'JornadaController@store')->name('jornada.create');
        Route::put('/{id}/update', 'JornadaController@update')->name('jornada.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'JornadaController@destroy')->name('jornada.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/dependencia'], function () {
        Route::get('/list', 'DependenciaController@index')->name('dependencia.list');
        Route::get('/{id}', 'DependenciaController@show')->name('dependencia.show')->where('id','[0-9,]+');
        Route::post('/create', 'DependenciaController@store')->name('dependencia.create');
        Route::put('/{id}/update', 'DependenciaController@update')->name('dependencia.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'DependenciaController@destroy')->name('dependencia.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/enfermedad'], function () {
        Route::get('/list', 'EnfermedadController@index')->name('enfermedad.list');
        Route::get('/{id}', 'EnfermedadController@show')->name('enfermedad.show')->where('id','[0-9,]+');
        Route::post('/create', 'EnfermedadController@store')->name('enfermedad.create');
        Route::put('/{id}/update', 'EnfermedadController@update')->name('enfermedad.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'EnfermedadController@destroy')->name('enfermedad.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/familia'], function () {
        Route::get('/list', 'FamiliaController@index')->name('familia.list');
        Route::get('/{id}', 'FamiliaController@show')->name('familia.show')->where('id','[0-9,]+');
        Route::post('/create', 'FamiliaController@store')->name('familia.create');
        Route::put('/{id}/update', 'FamiliaController@update')->name('familia.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'FamiliaController@destroy')->name('familia.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/integrante'], function () {
        Route::get('/list', 'IntegranteController@index')->name('integrante.list');
        Route::get('/{id}', 'IntegranteController@show')->name('integrante.show')->where('id','[0-9,]+');
        Route::post('/create', 'IntegranteController@store')->name('integrante.create');
        Route::put('/{id}/update', 'IntegranteController@update')->name('integrante.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'IntegranteController@destroy')->name('integrante.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/tipo-plantel'], function () {
        Route::get('/list', 'TipoPlantelController@index')->name('tipo-plantel.list');
        Route::get('/{id}', 'TipoPlantelController@show')->name('tipo-plantel.show')->where('id','[0-9,]+');
        Route::post('/create', 'TipoPlantelController@store')->name('tipo-plantel.create');
        Route::put('/{id}/update', 'TipoPlantelController@update')->name('tipo-plantel.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'TipoPlantelController@destroy')->name('tipo-plantel.delete')->where('id','[0-9,]+');
    });

    Route::group(['prefix' => '/plantel'], function () {
        Route::get('/list', 'PlantelController@index')->name('plantel.list');
        Route::get('/{id}', 'PlantelController@show')->name('plantel.show')->where('id','[0-9,]+');
        Route::post('/create', 'PlantelController@store')->name('plantel.create');
        Route::put('/{id}/update', 'PlantelController@update')->name('plantel.update')->where('id','[0-9,]+');
        Route::delete('/{id}/delete', 'PlantelController@destroy')->name('plantel.delete')->where('id','[0-9,]+');
    });
});
