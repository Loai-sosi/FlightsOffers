<?php

namespace App\Http\Middleware;

use App\Constants\HttpHeaders;
use Closure;

class Localization
{

    public function handle($request, Closure $next)
    {

        if (auth('admin')->check() && $request->segment(1) == 'admin') {
            app()->setLocale('ar');
        } elseif ($request->expectsJson()){
            $locale = $request->header(HttpHeaders::LANGUAGE, app()->getLocale());
            app()->setLocale($locale);
        }
        else if ($request->header(HttpHeaders::LANGUAGE)){
            $locale = $request->header(HttpHeaders::LANGUAGE, app()->getLocale());
            app()->setLocale($locale);
        }
        else if ($request->get('lang')  != ''){
           app()->setLocale($request->get('lang'));
        }
        else
            {
            $locale = session()->get('language', config('app.locale'));
//            $locale = $request->header(HttpHeaders::LANGUAGE, app()->getLocale());
            app()->setLocale($locale);
        }
        return $next($request);
    }

}
