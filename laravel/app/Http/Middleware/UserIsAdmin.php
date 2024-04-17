<?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    
    class UserIsAdmin
    {
        public function handle(Request $request, Closure $next)
        {
            if (!Auth::guard('web')->check()) {
                return redirect()->route('/login');
            }
            if (Auth::user()->is_Admin == 1) {
                // User is an admin
                return $next($request);
            } else {
                // User is a normal user
                return redirect()->back();
            }
        }
    }