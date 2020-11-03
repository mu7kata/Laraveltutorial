<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data =[
             ['name'=>'taro','mail'=>'taro@yamada'],
        ['name'=>'taro2','mail'=>'1taro@yamada'],
        ['name'=>'taro23','mail'=>'3taro@yamada'],];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
