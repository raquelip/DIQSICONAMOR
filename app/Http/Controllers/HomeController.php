<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $produ=Producto::WhereIn('categorias_id',[1])->get();
        return view('adminlte::Welcome',compact('produ'));
    }
    public function mostrar($cat_id){
        $produ=Producto::WhereIn('categorias_id',[2])->get();
        return view('adminlte::Welcome',compact('produ'));
    }
}