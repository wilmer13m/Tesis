<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function details()
    {
        return $this->hasMany('App\Detail');
    }

    public function origin(){

        return $this->belongsTo('App\Origin');

    }
}
