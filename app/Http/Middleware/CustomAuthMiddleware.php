<?php

namespace App\Http\Middleware;  
use Illuminate\Http\Request;
use Closure;  

class CustomAuthMiddleware  // Changed class name
{  
    public function handle($request, Closure $next)
{  
    // Allow login page to be accessed without token
    if ($request->is('login') || $request->is('api/login')) {
        return $next($request);
    }
    
    // Check authorization for other routes
    if ($request->header('Authorization') !== 'Bearer your_token') {  
        return response()->json(['error' => 'Unauthorized'], 401);  
    }  

    return $next($request);  
}
}