<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsPetugas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('admin')->check()) {
            if(Auth::guard('admin')->user()->level == 'petugas') {
                return $next($request);
            } elseif (Auth::guard('admin')->user()->level =='admin') {
                return $next($request);
            }
        }

        return redirect()->route('admin.formLogin');
    }
}
