<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class Student
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
      if (!Auth::check()) {
        return redirect()->route('login');
      }

      if (Auth::user()->role == 'admin') {
        return redirect()->route('admin.index');
      }

      if (Auth::user()->role == 'student') {
        return $next($request);
      }

      abort(404);
    }
}
