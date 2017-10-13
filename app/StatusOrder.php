<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class StatusOrder extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DRIVER_ID', 'ADMIN_ID', 'STATUS_NAME', 'STATUS_DESC'
    ];

    public function admins(){
      return $this->belongsTo('App\Admin');
    }
    public function drivers(){
      return $this->belongsTo('App\Driver');
    }
}
