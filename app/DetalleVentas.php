<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVentas extends Model
{
    protected $table = 'detalleventas';
    protected $fillable = ['venta_id','menu_id','cantidad','fecha','estado'];
    public function devtoMenus()
    {
        return $this->belongsTo('App\Menu', 'menu_id');
    }
}
