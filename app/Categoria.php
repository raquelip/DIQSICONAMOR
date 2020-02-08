<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps=false;
    public $table='categorias';
    protected $fillable=['Nombre'];

    public function producto(){
    	return $this->hasMany('App\Producto');
    }
}
