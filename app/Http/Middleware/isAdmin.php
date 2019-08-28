<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Redirect;

class isAdmin
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
      $user = \Auth::user();
        if (!$user->isAdmin()) {
            return redirect()->back()->with('adminError',
             'No tienes los permisos para ingresar como administrador');
        }
        return $next($request);
    }
}
