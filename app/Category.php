<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='categories';

    public function user(){

        return $this->belongsTo(User::class );
    }
}