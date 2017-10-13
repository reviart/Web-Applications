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
        'CURTNER_ID', 'CATEGORY_MENU_ID', 'ORIGIN_ID', 'NAME_MENU', 'PRICE_MENU',
        'STATUS_MENU', 'IMAGE_MENU', 'RAWMATERIAL_MENU', 'DESC_MENU'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     public function curtners(){
       return $this->belongsTo('App\Curtner');
     }

     public function categorymenus(){
       return $this->hasMany('App\CategoryMenu');
     }

     public function originmenus(){
       return $this->belongsToMany('App\OriginMenu');
     }
}
