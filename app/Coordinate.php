<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Coordinate extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DRIVER_ID', 'USER_ID', 'ADMIN_ID', 'LATITUDE', 'LONGITUDE'
    ];

    public function admins(){
      return $this->belongsTo('App\Admin');
    }
    public function users(){
      return $this->belongsTo('App\User');
    }
    public function drivers(){
      return $this->belongsTo('App\Driver');
    }
}
