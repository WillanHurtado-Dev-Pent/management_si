<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    public function asistencia(){
        return $this->belongsTo('App\Asistencia');
    }

    public function planillasueldos(){
        return $this->hasMany('App\PlanillaSueldo');
    }

    public function categorias(){
        return $this->belongsToMany('App\Categoria');
    }
}
