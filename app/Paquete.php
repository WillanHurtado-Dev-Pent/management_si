<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $fillable = [
        'descripcion', 'nombre', 'precio'
    ];

    public function reservas(){
        return $this->hasMany('App\Reserva');
    }

    public function notaventas(){
        return $this->hasMany('App\NotaVenta');
    }

    /* public function servicios(){
        return $this->belongsToMany('App\Servicio');
    } */
}
