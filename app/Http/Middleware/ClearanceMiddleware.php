<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ClearanceMiddleware {
  
    public function handle($request, Closure $next) {        
        if (Auth::user()->hasPermissionTo('Administer roles & permissions')) 
    {
            return $next($request);
        }
      

        if ($request->is('posts'))
         {
            if (!Auth::user()->hasPermissionTo('View and create posts')){      
                abort('401');
            } else {
                return $next($request);
            }
        }


        if ($request->is('posts/create'))
         {
            if (!Auth::user()->hasPermissionTo('View and create posts')){      
                abort('401');
            } else {
                return $next($request);
            }
        }

        

        if ($request->is('posts/*/edit')) 
         {
            if (!Auth::user()->hasPermissionTo('Edit Post')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete'))
         {
            if (!Auth::user()->hasPermissionTo('Delete Post')) {
                abort('401');
            } 
         else 
         {
                return $next($request);
            }
        }

        return $next($request);
    }
}