<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    function  products(){

        return $this->hasMany('App\Product');
    }
}
