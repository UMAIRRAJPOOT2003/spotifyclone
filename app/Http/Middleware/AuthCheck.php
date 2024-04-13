<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthCheck 
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     //IN PROGRESS...................................................
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Redirect to the login page with an error message
            return redirect()->route('login')->with('fail', 'You have to login first');
        }
            return $next($request);
        }
        
           
     
        }
        //...............................................................
        
    

