<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Menu extends Authenticatable
{
    use Notifiable;
    public $table = "menus";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'curtner_id', 'menu_name', 'many_menus', 'status', 'price'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     public function curtners(){
       return $this->belongsTo(Curtner::class);
     }
}
