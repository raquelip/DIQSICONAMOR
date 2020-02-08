<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;
class ProductoController extends Controller
{
    public function index(){
    	$cate=Categoria::all();
    	$produ=Producto::with('categoria')->get();
    	return view ('adminlte::productos',compact('cate','produ'));
    }
    public function ingresar(Request $request){
    	$produc=new Producto();
    	$produc->Nomproducto=$request->nombre;
    	$produc->Precio=$request->precio;
    	$produc->Descripcion=$request->descripcion;
    	$produc->categorias_id=$request->categorias_id;
        $file=$request->file('Imagen');
        $nombre=$file->getClientMimetype();
        $tipoImagen=str_replace('image/','.',$nombre);
        $filename=uniqid() .$tipoImagen;
        $path=public_path().'/img';
        $file->move($path,$filename);
        $produc->Imagen=$filename;
        $produc->save();
        return redirect()->action('ProductoController@index');
    }
    public function editar($id){
        $cate=Categoria::all();
        $produc=Producto::with('categoria')->find($id);
        return view ('adminlte::editarproductos',compact('cate','produ'));
    }
    public function actualizar(Request $request,$id){
        $produc=Producto::find($id);
        $produc=new Producto();
        $produc->Nomproducto=$request->nombre;
        $produc->Precio=$request->precio;
        $produc->Descripcion=$request->descripcion;
        $produc->categorias_id=$request->categorias_id;
        $file=$request->file('Imagen');
        $nombre=$file->getClientMimetype();
        $tipoImagen=str_replace('image/','.',$nombre);
        $filename=uniqid() .$tipoImagen;
        $path=public_path().'/img';
        $file->move($path,$filename);
        $produc->Imagen=$filename;
        $produc->save();
        return redirect()->action('ProductoController@index');
    }
    public function eliminar($id){
        $produc=Producto::find($id);
        $produc->delete();
        return redirect()->action('ProductoController@index');
    }
}
