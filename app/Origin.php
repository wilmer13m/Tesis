<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    //
    public function orders(){

        return $this->hasMany('App\Order');
    }


}
