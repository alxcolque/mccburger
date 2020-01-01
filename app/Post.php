<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){//este post pertenece a este usuario
        return $this->belongsTo('App\User');
    }
}
