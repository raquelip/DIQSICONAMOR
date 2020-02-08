<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps=false;
    public $table='categorias';
    protected $fillable=['Nombre'];
}
