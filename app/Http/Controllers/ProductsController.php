<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    //

     public function __construct()
    {
        $this->middleware('auth');
    }


    public function all() {

    	$products = Product::all();
    	$categories = Category::all();

    	$out = [
    		'products' => $products,
    		'categories' => $categories
    	];

    	return view('layouts.crm.products', $out);



    }


}
