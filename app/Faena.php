<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faena extends Model
{
    //
    public function aliquot()
    {
        return $this->belongsTo('App\Aliquot');
    }

    public function price(){

        return $this->belongsTo('App\Price');

    }

    public function type(){

        return $this->belongsTo('App\Type');

    }


}
