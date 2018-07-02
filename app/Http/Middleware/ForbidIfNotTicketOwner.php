<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ForbidIfNotTicketOwner
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
        if ($request->ticket->user->id == Auth::id()) {
            return $next($request);
        }
        abort(403);
    }
}
