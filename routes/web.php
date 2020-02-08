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
Route::get('ingrpro','CategoriaController@index');
Route::post('productos','CategoriaController@ingresar');
Route::get('editarpro/{id}','CategoriaController@editar');
Route::post('actualizarpro/{id}','CategoriaController@actualizar');
Route::get('eliminarpro/{id}','CategoriaController@eliminar');
Route::get('categoria','CategoriaController@ingresar');
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
