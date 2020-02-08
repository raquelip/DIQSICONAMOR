<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
class Producto extends Model
{
    return $this->belongsTo('Categoria');
}
