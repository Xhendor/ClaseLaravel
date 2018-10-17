<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gato extends Model
{

    public function animal(){

       return $this->belongsTo(Animal::class);
    }
}
