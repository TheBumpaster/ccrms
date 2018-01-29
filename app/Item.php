<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Order;

class Item extends Model
{
    //

    protected $fillable = [
       'status', 'quantity', 'price', 'rma', 'rma_id', 'rma_date', 'details'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'created_at', 'order', 'product'
    ];

    public function products() {
        return $this->hasMany('App\Products', 'id', 'product');
    }

    public function orders() {
    	return $this->hasMany('App\Order', 'id', 'order');
    }
}
