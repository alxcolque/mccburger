<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumos extends Model
{
    //
    protected $table = 'insumos';
    protected $fillable = ['insumo','precio','fkcategoria_insumos'];

    public function FInsumos()
    {
        return $this->belongsTo('App\Categoria_Insumos', 'fkcategoria_insumos');
    }
}
