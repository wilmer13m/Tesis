<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //
    function products(){

        return $this->hasMany('App\Product');

    }
}