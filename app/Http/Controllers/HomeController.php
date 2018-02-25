<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function tableProducts(Request $request) {
        return datatables()->query(DB::table('products'))->toJson();
    }

    public function tableOrders(Request $request) {
        return datatables()->query(DB::table('orders'))->toJson();
    }


}
