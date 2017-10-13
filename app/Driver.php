<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Driver extends Authenticatable
{
    use Notifiable;

    protected $guard = 'driver';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ADMIN_ID', 'ID_CARD_NUMBER', 'EMAIL_DRIVER', 'PASSWD_DRIVER', 'NAME_DRIVER',
        'GENDER_DRIVER', 'ADDRESS_DRIVER', 'VECHILE_NUMBER', 'PHONENUMB_CURT', 'IMAGE_DRIVER'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'PASSWD_DRIVER', 'remember_token',
    ];

    public function admins(){
      return $this->belongsTo('App\Admin');
    }
    public function coordinates(){
      return $this->hasMany('App\Coordinate');
    }
    public function statusorders(){
      return $this->hasMany('App\StatusOrder');
    }
}
