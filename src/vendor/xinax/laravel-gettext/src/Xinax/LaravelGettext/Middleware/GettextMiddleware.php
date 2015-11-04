<?php namespace Xinax\LaravelGettext\Middleware;

use Closure;
use \LaravelGettext;
use Illuminate\Contracts\Routing\Middleware;

class GettextMiddleware implements Middleware {

    /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
    public function handle($request, Closure $next)
    {
        /**
         * The package need to be initialized, the locale will
         * be available after first method call. If you have
         * async calls in your project, this filter starts the 
         * locale environment before each request.
         */
        LaravelGettext::getLocale();

        return $next($request);
    }

}