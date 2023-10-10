<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminLanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (is_null(session()->get('locale')) || !in_array(session()->get('locale'), config('app.available_locale'))) {
            app()->setLocale(app()->getLocale());
        } else {
            app()->setLocale(session()->get('locale'));
        }
        return $next($request);
    }
}
