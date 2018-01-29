<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //

    /**
     * Show the application landing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing() 
    {
        return view('index');
    }
}
