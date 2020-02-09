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
Route::get('editarproducto','ProductoController@editar');
Route::post('actualizarproducto','ProductoController@actualizar');
Route::get('eliminarproduct','ProductoController@eliminar');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
