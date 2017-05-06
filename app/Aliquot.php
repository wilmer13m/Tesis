<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliquot extends Model
{
    //

    function products(){

        return $this->hasMany('App\Product');

    }


    function faenas(){

        return $this->hasMany('App\Faena');

    }

}
