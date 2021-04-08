<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isValidate
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
        if (Auth::check()) {
            if(Auth::user()->check == 1){
                return $next($request);
            }else{
                return redirect("/")->withErrors("Vous n'avez pas accès à cette partie du site. Il vous êtres membre pour avoir cet accès. Mais bien essayé ! Il est possible que votre candidature soit en cours de validation par le webmaster et l'admin, un peu de patience...  ");
            }
        }else{
            return redirect('login');
        }
    }
}
