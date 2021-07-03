<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('user')){
            //$request->session()->flash('error', 'Please login to continue');
            return redirect('/login')->with('error', 'Please login to continue');
        }
        else{
            $role = session()->get('user_type');
            if($role != 'user'){
                return redirect('/login');
            }
        }
        return $next($request);
    }
}
