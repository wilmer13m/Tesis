<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    function requests(){

        return $this->hasMany('App\Request');

    }

}
