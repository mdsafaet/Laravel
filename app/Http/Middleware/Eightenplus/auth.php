<?php

namespace App\Http\Middleware\Eightenplus;

use Closure;
use Illuminate\Http\Request;
/* use Illuminate\Support\Facades\Session; */
use Symfony\Component\HttpFoundation\Response;

class auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /* $login_status = Session::get('login_status');
        if(empty($login_status)){
            return $next($request);
        }else{
            return response()->json(['msg error'=>'dashboard']);
        } */
        $age= $request->age;
        $granted_age=18;
        if($age >= $granted_age){
            return $next($request);
        }else{
            return response()->json(['msg error'=>'Fuck off  Bitch.Get the fuck out of here']);

        }
    }
}
