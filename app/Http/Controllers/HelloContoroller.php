<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloContoroller extends Controller
{
    public function index(Request $request) {
        $data=[
            'msg'=>'これはコントローラから渡されたメッセージです',
            'id'=> $request->id
    ];
    return view('helloo.index',$data);
     
    }
}
