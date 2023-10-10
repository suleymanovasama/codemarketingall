<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FrontLanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (is_null(session()->get('front-locale')) || !in_array(session()->get('front-locale'), config('app.available_locale'))) {
            app()->setLocale(app()->getLocale());
        } else {
            app()->setLocale(session()->get('front-locale'));
        }
        return $next($request);
    }
}
