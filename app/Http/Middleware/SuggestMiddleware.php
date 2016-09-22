<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Closure;

class SuggestMiddleware
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
        if (strlen($request->input('info')) <= 5) {
            //return redirect('suggest/index');
        }
        DB::enableQueryLog();
        return $next($request);
    }
}
