<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function aliquot(){

        return $this->belongsTo('App\Aliquot');
    }

    public function group(){

        return $this->belongsTo('App\Group');
    }

    public function price(){

      return $this->belongsTo('App\Price');

    }


}
