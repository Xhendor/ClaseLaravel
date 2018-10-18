<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table='animales';

    //Obtener todas la referencias de
    // Animal en registros Gato
    public function gatos(){
        return $this->hasMany(Gato::class);
    }
}
