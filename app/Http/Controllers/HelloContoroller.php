<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloContoroller extends Controller
{
    public function index() {
        
        $data = ['one','two','three','four'];
    return view('helloo.index',['data'=>$data]);
     
    }
   
}
