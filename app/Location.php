<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    public function maintenances(){

        return $this->hasMany('App\Maintenance');
    }

    public function solicitudes(){

        return $this->hasMany('\App\Solicitude');
    }
}
