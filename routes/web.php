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

Route::post('tipoempleado','tipoempleadoController@guardar')->name('tipoempleado');
Route::get('/tipoempleadoventana','tipoempleadoController@ventana');
Route::get('tipoempleado/eliminar_modificar','tipoempleadoController@listar')->name('tipoempleado_listar');
Route::delete('tipoempleado_eliminar/{id}','tipoempleadoController@eliminar')->name('tipoempleado_eliminar');
Route::get('tipoempleado_editar/{id}','tipoempleadoController@editar');
Route::put('tipoempleado_actualizar/{id}','tipoempleadoController@modificar');

Route::post('empleado','empleadoController@guardar');
Route::get('/empleadoventana','empleadoController@ventana');
Route::get('empleado/eliminar_modificar','empleadoController@listar')->name('empleado_listar');
Route::delete('empleado_eliminar/{id}','empleadoController@eliminar')->name('empleado_eliminar');
Route::get('empleado_editar/{id}','empleadoController@editar');
Route::put('empleado_actualizar/{id}','empleadoController@modificar');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
