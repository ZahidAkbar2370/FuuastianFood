<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!empty(auth()->user()) && auth()->user()->status == "admin"){
            return $next($request);
        }
        elseif (auth()->user()->status == "user"){
            echo "Please Login as Admin Then You Can Access Admin Roles.... Thanks";
            echo "<br>";
            echo '<a href="logout">Logout</a>';
            exit;
        }
        else{
            return redirect('login');
        }
    }
}
