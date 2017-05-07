<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    public function client(){

        return $this->hasOne('App\Client');
    }

    public function user(){

        return $this->hasOne('App\User');
    }

    public function room(){

        return $this->hasOne('App\Room');
    }
}
