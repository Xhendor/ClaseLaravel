<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table='animales';


    public function gatos(){
        return $this->hasMany(Gato::class);
    }
}
