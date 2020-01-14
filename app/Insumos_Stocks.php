<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumos_Stocks extends Model
{
    protected $table='insumostocks';
    protected $fillable=['ins_id','tienda_id','cantidad','fecha'];
    public function FInsStock_ToInsumo()
    {
        return $this->belongsTo('App\Insumos', 'ins_id');
    }
    public function FInsStock_ToTienda()
    {
        return $this->belongsTo('App\Tiendas', 'tienda_id');
    }
}
