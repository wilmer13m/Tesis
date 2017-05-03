<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    function aliquots(){

        return $this->hasMany('App\Aliquot');

    }



}
