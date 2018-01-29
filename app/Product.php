<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'image', 'price', 'quantity', 'category'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'created_at',
    ];

    public function category() {
        return $this->belongsTo('App\Category', 'id', 'category');
    }

    public function setCategory($cat_id) {
        $this->category = $cat_id;
        return $this->category;
    }

}
