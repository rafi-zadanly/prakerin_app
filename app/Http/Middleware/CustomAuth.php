<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomAuth
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
        if (!$request->session()->get('auth.isLogin')) {
            return redirect('custom/login')
                ->with('message', 'Login terlebih dahulu untuk melanjutkan.')
                ->with('type', 'warning');
        }
        return $next($request);
    }
}
