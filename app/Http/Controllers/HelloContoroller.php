<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloContoroller extends Controller
{
    public function index(Request $request)
     {    
    return view('helloo.index',['msg'=>'フォーム入力：']);
    }

    public function post(Request $request)
     {    
         $validate_rule = [
             'name'=>'required',
             'mail'=>'email',
             'age'=>'numeric|between:0,150',
         ];
         $this->validate($request,$validate_rule);
    return view('helloo.index',['msg'=>'正しく入力されました']);
    }
}
