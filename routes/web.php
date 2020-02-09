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

Route::get('Principal','HomeController@index');
Route::get('home','HomeController@and');
Route::get('/','HomeController@index');
Route::get('otra/{id}','HomeController@mostrar');

Route::get('ingrecategoria','CategoriaController@index');
Route::post('categoria','CategoriaController@ingresar');
Route::get('editarcat/{id}','CategoriaController@editar');
Route::post('actualizarcat/{id}','CategoriaController@actualizar');
Route::get('eliminarcat/{id}','CategoriaController@eliminar');

Route::get('ingreproducto','ProductoController@index');
Route::post('productos','ProductoController@ingresar');
Route::get('editarproducto/{id}','ProductoController@editar');
Route::post('actualizarproducto/{id}','ProductoController@actualizar');
Route::get('eliminarproduct/{id}','ProductoController@eliminar');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
