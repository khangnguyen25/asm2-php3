<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($locale = $request->get('locale')) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}
