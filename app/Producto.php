<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
class Producto extends Model
{
	public $timestamps=false;
    public $table='productos';
    protected $fillable=['Nombreproducto','Precio','Descripcion','Imagen','categorias_id'];

    public function categoria(){
       return $this->belongsTo('App\Categoria');

    }
}
