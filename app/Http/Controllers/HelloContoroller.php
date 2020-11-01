<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloContoroller extends Controller
{
    public function index() {
        
      
    return view('helloo.index',['message'=>'Helloo!']);
     
    }
   
}
