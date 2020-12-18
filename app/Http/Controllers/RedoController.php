<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedoController extends Controller
{
    public function index(){
       
        return 
        <<<EOF 
       <html>
       <head>
       </head>
       <body>    
       <h1>こんにちは</h1>
       </body>
       </html>
       EOF;
       
    }
}
