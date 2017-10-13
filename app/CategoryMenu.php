<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CategoryMenu extends Authenticatable
{
    use Notifiable;
    public $table = "menus";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'CURTNER_ID', 'CATEGORY_MENU'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     public function curtners(){
       return $this->belongsTo('App\Curtner');
     }
     public function menus(){
       return $this->belongsTo('App\Menu');
     }
}
