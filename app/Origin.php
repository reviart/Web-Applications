<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Origin extends Authenticatable
{
    use Notifiable;
    public $table = "originmenus";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'CURTNER_ID', 'ORIGIN_CURTNER'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     public function curtners(){
       return $this->hasMany('App\Curtner');
     }
}
