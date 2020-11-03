<?php

namespace App\Providers;

use Illuminate\Support\Facades\view;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {

        View::composer(
            'helloo.index','App\Http\Composers\HelloComposer');
            }
    
    
}
