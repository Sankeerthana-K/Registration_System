<?php

namespace App\Http\Middleware;  

use Closure;  

class NewMiddleware
{  
    public function handle($request, Closure $next)  
    {  
        // Perform some action before passing the request  
        if ($request->header('Authorization') !== 'Bearer your_token') {  
            return response()->json(['error' => 'Unauthorized'], 401);  
        }  

        // Pass the request to the next middleware or controller  
        return $next($request);  
    }  
}