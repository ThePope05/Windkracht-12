<?php

//app/Http/Middleware/CheckProductOwner.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckProductOwner
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role == 'owner') {
            return $next($request);
        }

        // Redirect to a specific route if the user is not a product owner
        return redirect('login');
    }
}
