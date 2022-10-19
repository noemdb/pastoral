<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use Laravel\Sanctum\Guard;

class IsAdmin
{
    public function __construct(Guard $auth){

        $this->auth = $auth;

    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$this->auth->user()->isAdmin()){

            Session::flash('sessionMessege','Sección restringida');

            return redirect('/dashboard');
        }
        return $next($request);
    }
}
