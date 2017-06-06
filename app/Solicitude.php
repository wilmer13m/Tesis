<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model
{
    //

    protected $fillable = ['client_id','location_id','estatus','descripcion'];


    public function location(){

        return $this->belongsTo('App\Location');

    }

    public function client(){

        return $this->belongsTo('App\Client');

    }



}
