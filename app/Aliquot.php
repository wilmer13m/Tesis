<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliquot extends Model
{
    //

    function products(){

        return $this->hasMany('App\Product');

    }



}
