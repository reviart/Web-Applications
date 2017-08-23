<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Order extends Authenticatable
{
    use Notifiable;
    public $table = "users_orders";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','menu_id', 'receiver', 'phone_number', 'address', 'status', 'total_price'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     
}
