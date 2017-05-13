<?php

namespace Laraspace\Http\Middleware;

use Closure;

class SettingsMiddleware
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
        \Config::set([
            'mail.host' => get_setting('host'),
            'mail.port' => get_setting('port'),
            'mail.username' => get_setting('username'),
            'mail.password' => get_setting('password'),
            'mail.from.name' => get_setting('from_user'),
            'mail.from.address'=> get_setting('from'),
        ]);

        return $next($request);
    }
}
