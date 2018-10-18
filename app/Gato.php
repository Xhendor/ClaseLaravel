<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gato extends Model
{
    protected $hidden=['raza','color'];
    protected  $fillable=['color'];

    public function animal(){

       return $this->belongsTo(Animal::class);
    }
}
