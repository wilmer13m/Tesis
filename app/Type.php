<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //

    function faenas(){

        return $this->hasMany('App\Faena');
    }

}
