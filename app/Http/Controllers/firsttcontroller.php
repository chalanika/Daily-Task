<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firsttcontroller extends Controller
{
    public function indexaboutus(){
        return view('aboutus');
    }
}
