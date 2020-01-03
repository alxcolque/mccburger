<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class ClienteMidd
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
      if (! Auth::check()) {
        return redirect()->route('login');
      }

      if (Auth::user()->rol_id == 1) {
          return $next($request);
      }

      if (Auth::user()->rol_id == 2) {
          return redirect()->route('cajero');
      }

      if (Auth::user()->rol_id == 3) {
          return redirect()->route('recepcion');
      }

      if (Auth::user()->rol_id == 4) {
          return redirect()->route('elaborador');
      }

      if (Auth::user()->rol_id == 5) {
          return redirect()->route('supervisor');
      }
    }
}
