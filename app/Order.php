<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Order extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'purchased_on', 'base_price', 'purchased_price', 'status', 'user'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'created_at',
    ];

    public function products() {
        return $this->hasMany('App\Products', 'id');
    }

    public function customer() {
    	return $this->hasMany('App\Customer', 'id', 'user');
    }

}
