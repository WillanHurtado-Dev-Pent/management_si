<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    public function notaventa(){
        return $this->belongsTo('App\NotaVenta');
    }
}
