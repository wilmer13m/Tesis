<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //
    public function aliquot()
    {
        return $this->belongsTo('App\Order');
    }
}
