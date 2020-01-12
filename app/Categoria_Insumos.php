<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria_Insumos extends Model
{
    protected $table='categoria_insumos';
    protected $fillable = ['descripcion'];
}
