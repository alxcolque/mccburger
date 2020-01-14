<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiendas extends Model
{
    protected $table='tiendas';
    protected $fillable=['id','tienda','direccion','nit'];
}
