<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model
{
    //
    public function location(){

        return $this->belongsTo('App\Location');

    }

    public function client(){

        return $this->belongsTo('App\Client');

    }



}
