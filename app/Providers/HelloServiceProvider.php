<?php

namespace App\Providers;


use Illuminate\Support\Facades\view;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator;
use App\Validators\HelloValodator;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $validator= $this->app['validator'];
        $validator->resolever(function($translator,$data,$rules,$messages){

        return new HelloValodator($translator,$data,$rules,$messages);

        });
       
}
