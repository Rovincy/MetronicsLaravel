<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Closure;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
//     public function handle($request, Closure $next, ...$guards)
// {
//     if (Auth::guard('web')->check()) {
//         return $next($request);
//     }

//     return redirect()->route('login');
// }
//this method will be triggered before your controller constructor
// public function handle($request, Closure $next)
// {
//     //check here if the user is authenticated
//     if ( ! $this->auth->user() )
//     {
//         redirect()->intended('/login');
//         // here you should redirect to login 
//     }

//     return $next($request);
// }

// public function handle($request, Closure $next)
//     {
//         if (Auth::check()) {
//             return $next($request);
//         }
//         return redirect()->route('/login');;
//     }

}
