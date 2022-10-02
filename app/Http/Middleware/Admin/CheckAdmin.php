<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {

        if (!empty(\Auth::user()->is_admin)) {
            return $next($request);
        } elseif (!empty(\Auth::user()->id)) {
            return redirect()->route('index');
        } else {
            return redirect()->route('login');
        }

    }
}
