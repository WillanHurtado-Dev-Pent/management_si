<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    public function personals(){
        return $this->hasMany('App\Personal');
    }
}
