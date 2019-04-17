<?php

namespace App\Http\Middleware;

use Closure;
use App;

class LangMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
        } else {
            if (isset($_COOKIE['lang'])) {
                $lang = $_COOKIE['lang'];
            } else {
                $def = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) ?
                    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : $lang = 'ru';
            }
        }

        setcookie('lang', $lang, time() + 3600);

        App::setLocale($lang);

        if (isset($_GET['lang'])) {
            return redirect('/');
        }
        return $next($request);
    }
}
