<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre'];

    /* public function personals(){
        return $this->belongsToMany('App\Personal');
    } */
}
