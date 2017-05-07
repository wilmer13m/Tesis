<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function department(){

        return $this->belongsTo('App\Department');
    }

    public function position(){

        return $this->belongsTo('App\Position');
    }

    public function role(){

        return $this->belongsTo('App\Role');
    }

    public function reservation(){

        return $this->belongsTo('App\Reservation');
    }

    public function maintenances(){

        return $this->hasMany('App\Maintenance');
    }
}
