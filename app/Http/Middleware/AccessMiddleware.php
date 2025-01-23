<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Illmuninate\Support\Facades\Auth;

class AccessMiddleware
{
    // public function handle(Request $request, Closure $next)
    // {
    //     if(Auth::guard('admin')->check()){
    //         return $next($request);
    //     }

    //     return redirect()->route('admin.dashboard');
    // }
}