<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable = ['menu','precio','foto','ingrediente_id','cat_id'];

    public function ingrediente(){
        return $this->belongsTo('App\Ingrediente','ingrediente_id');
    }
    public function catMenu(){
        return $this->belongsTo('App\CategoriaMenu','cat_id');
    }
}
