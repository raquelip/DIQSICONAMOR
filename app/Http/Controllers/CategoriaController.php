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
    	return redirect()->action('CategoriaController@index');
    }
    public function editar($id){
    	$datos=Categoria::find($id);
    	return view('adnminlte::editarproductos',compact('datos'));
    }
    public function actualiza($Request request,$id){
    	$cate=new Categoria::find($id);
    	$cate->Nombre=$request->nombre;
    	$cate->save();
     	return redirect()->action('CategoriaController@index');
    }
    public function eliminar($id){
    	$cate=new Categoria::find($id);
    	$cate->delete();
    	return redirect()->action('CategoriaController@index');
    }

}
