<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
class CategoriaController extends Controller
{
	public function index(){
		$datos=new Categoria();
		return view('adminlte::categoria',compact('datos'));
	}
    public function ingresar($Request request){
    	$cate=new Categoria();
    	$cate->Nombre=$request->nombre;
    	$cate->save();
    	return viewredirect()->action('ProductoController@index');
    }

}
