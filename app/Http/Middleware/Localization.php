<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Support\Facades\App;

class Localization
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
        //dd('here');
        //dd(Session::get('locale'));
        //dd(session('locale'));
         
        if(Session::has('locale')){
            //dd(Session::get('locale'));
            App::setLocale(Session::get('locale'));
        }else 
           App::setLocale(config('app.locale'));
        
        return $next($request);
    }
}
