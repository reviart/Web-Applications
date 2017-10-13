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
        'ADMIN_ID','NAME_CUST', 'EMAIL_CUST', 'PASSWD_CUST', 'GENDER_CUST', 'PHONENUMB_CUST', 'ADDRESS_CUST', 'ADDRESS_TAG_CUST', 'IMAGE_CUST'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'PASSWD_CUST', 'remember_token',
    ];

    public function admins(){
      return $this->belongsTo('App\Admin');
    }

    public function coordinates(){
      return $this->hasMany('App\Coordinate');
    }
}
