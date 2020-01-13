<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaMenu extends Model
{
    protected $table='categoriamenus';
    protected $fillable = [
        'categoria'
    ];
}
