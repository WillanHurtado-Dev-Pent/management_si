<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public function persona(){
        return $this->belongsTo('App\Persona');
    }

    public function paquete(){
        return $this->belongsTo('App\Paquete');
    }

    public function servicio(){
        return $this->belongsTo('App\Servicio');
    }
}
