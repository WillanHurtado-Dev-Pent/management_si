<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'descripcion'
    ];

    /* public function notaventas(){
        return $this->belongsToMany('App\NotaVenta');
    }

    public function servicios(){
        return $this->belongsToMany('App\Servicio');
    } */

    public function proveedors(){
        return $this->belongsToMany('App\Proveedor');
    }
}
