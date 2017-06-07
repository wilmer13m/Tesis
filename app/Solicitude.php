<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Solicitude extends Model
{
    //

    use SoftDeletes;

    protected $fillable = ['client_id','location_id','estatus','descripcion'];

    protected $dates = ['deleted_at'];


    public function location(){

        return $this->belongsTo('App\Location');

    }

    public function client(){

        return $this->belongsTo('App\Client');

    }



}
