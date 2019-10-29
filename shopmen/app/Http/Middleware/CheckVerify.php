<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckVerify
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

        if(Auth::user()->email_verified_at == null){
            $email=Auth::user()->emeil;
            return redirect(route('check'));
        }
        return $next($request);
    }
}
