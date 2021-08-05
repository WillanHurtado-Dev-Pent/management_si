<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function cuentas(){
        return $this->hasMany('App\Cuenta');
    }

    public function reservas(){
        return $this->hasMany('App\Reserva');
    }

    public function notaventas(){
        return $this->hasMany('App\NotaVenta');
    }
}
