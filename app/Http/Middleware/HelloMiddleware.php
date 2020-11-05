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
       $response = $next($request);
       $contact = $response->content();
       $pattern = '/<middleware>(.*)<\/middleware>/i';
       $replace = '<a href="http://$1">$1</a>';
       $content = preg_replace($pattern,$replace,$contact);
       $response->setContent($content);
        return $response;
    }
}
