<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Curtner extends Authenticatable
{
    use Notifiable;

    protected $guard = 'curtner';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ADMIN_ID', 'NAME_CURT', 'EMAIL_CURT', 'PASSWD_CURT', 'ADDRESS_CURT',
        'PHONENUMB_CURT', 'OWNERNAME_CURT', 'OWNERIDNUMB_CURT'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'PASSWD_CURT', 'remember_token',
    ];

    public function admins(){
      return $this->belongsTo('App\Admin');
    }
    public function originmenus(){
      return $this->belongsTo('App\OriginMenu');
    }
    public function categorymenus(){
      return $this->hasMany('App\CategoryMenu');
    }
}
