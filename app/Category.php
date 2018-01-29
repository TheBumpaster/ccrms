<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;


class Category extends Model
{
    //


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'created_at',
    ];

    public function hasProducts() {
    	return $this->hasMany('App\Product', 'category', 'id');
    }

}
