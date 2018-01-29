<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Invoice extends Model
{
    //

    protected $fillable = [
        'status', 'id', 'date', 'details',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'order', 'created_at', 'updated_at'
    ];



    public function order() {
    	return $this->hasMany('App\Order', 'id', 'order');
    }


}
