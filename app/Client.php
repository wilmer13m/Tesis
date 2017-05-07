<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    function requests(){

        return $this->hasMany('App\Request');
    }

    public function reservation(){

        return $this->belongsTo('App\Reservation');
    }
}
