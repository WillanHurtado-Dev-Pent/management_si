<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaVenta extends Model
{
    protected $fillable = [
        'descuento', 'fecha', 'monto', 'tipo', 'total', 'paquete_id', 'bitacora_id'
    ];

    public function paquete(){
        return $this->belongsTo('App\Paquete');
    }
}
