<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    function requests(){

        return $this->hasMany('App\Request');

    }
}
