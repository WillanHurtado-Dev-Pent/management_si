<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanillaSueldo extends Model
{
    public function personal(){
        return $this->belongsTo('App\Personal');
    }
}
