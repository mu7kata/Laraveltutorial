<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedoController extends Controller
{
    public function index()
    {
        $one = ['on'=>'1'];
        return view('redo.index',$one);
    }
}
