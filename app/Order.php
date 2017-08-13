<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Order extends Authenticatable
{
    use Notifiable;
    public $table = "orders";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'status_pemesanan', 'nama_penerima', 'contact_penerima', 'alamat_tujuan', 'pesanan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
