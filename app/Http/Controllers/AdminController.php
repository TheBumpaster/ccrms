<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Order;
use App\User;

class AdminController extends Controller
{


     public function __construct()
    {
        $this->middleware('auth');
    }

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stats()
    {
        //

        return view('layouts.admin.stats');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function activity()
    {
        //

        return view('layouts.admin.activity');
    }

    public function orders()
    {
        //
        $products = Product::all();
        $categories = Category::all();

        $out = [
            'products' => $products,
            'categories' => $categories
        ];

        return view('layouts.crm.orders', $out);
    }

    public function products()
    {
        //
        $products = Product::all();
        $categories = Category::all();

        $out = [
            'products' => $products,
            'categories' => $categories
        ];

        return view('layouts.crm.products', $out);
    }

    public function tableProducts($l, $s, $d) {

        $products = Product::all();

        $iTotalRecords = Product::count();
        $iDisplayLength = $l;
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength; 
        $iDisplayStart = $s;
        $sEcho = $d;
  
        $records = array();
        $records["data"] = array(); 

        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;

          $status_list = array(
            array("success" => "Publushed"),
            array("info" => "Not Published"),
            array("danger" => "Deleted")
          );

          for($i = $iDisplayStart; $i < $end; $i++) {

            $status = $status_list[rand(0, 2)];

            $product = Product::findOrFail($i);

            $records["data"][] = array(

              '<input type="checkbox" name="id[]" value="'.$product->id.'">',
              $product->id,
              $product->name,
              $product->category,
              $product->price,      
              $product->quantity,
              $product->created_at,
              '<span class="label label-sm label-'.(key($status)).'">'.(current($status)).'</span>',
              '<a href="/products/'.$product->id.'" class="btn btn-xs default btn-editable"><i class="fa fa-pencil"></i> Edit</a>',
            );
          }

          if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
            $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
            $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
          }

      $records["draw"] = $sEcho;
      $records["recordsTotal"] = $iTotalRecords;
      $records["recordsFiltered"] = $iTotalRecords;
      
      return $records;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
