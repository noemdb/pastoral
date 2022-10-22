<?php

namespace App\Http\Middleware\App;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;

class IsCooperator
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
        if(!$this->auth->user()->IsCooperator()){

            Session::flash('sessionMessege','Sección restringida');

            return redirect('/dashboard');
        }
        return $next($request);
    }
}
