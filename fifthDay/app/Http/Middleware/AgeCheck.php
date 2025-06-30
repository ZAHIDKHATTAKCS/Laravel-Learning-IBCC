<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo 'Print this using AgeCheck middleware';
        // echo '<pre>';

        // in the $request we have all the data like hosted url, age etc
        // print_r($request->age);
        
        // if($request->age<18){
        //     die(' you cannot visit our website');
        // }

        if($request->age<18){
            die("you can't visit our website because your age is less than 18");
        }
        return $next($request);
    }
}
