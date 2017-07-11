<?php

namespace Laraspace\Http\Middleware;

use Closure;

class SettingsMiddleware
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
        if (get_setting('mailer') == 'mailgun') {
            \Config::set([
                'mail.from.name' => get_setting('mail_mailgun_user'),
                'mail.from.address' => get_setting('mail_from'),
                'services.mailgun.domain' => get_setting('mail_mailgun_domain'),
                'services.mailgun.secret' => get_setting('mail_mailgun_secret')
            ]);
        } else if (get_setting('mailer') == 'sendgrid') {
            \Config::set([
                'mail.host' => get_setting('\'mail_sendgrid_host\''),
                'mail.username' => get_setting('mail_sendgrid_username'),
                'mail.password' => get_setting('mail_sendgrid_password'),
                'mail.from.name' => get_setting('mail_sendgrid_user'),
                'mail.from.address' => get_setting('mail_from'),
            ]);
        } else {
            \Config::set([
                'mail.from.name' => get_setting('mail_sparkpost_user'),
                'mail.from.address' => get_setting('mail_from'),
                'services.sparkpost.secret' => get_setting('mail_sparkpost_secret')
            ]);
        }


        return $next($request);
    }
}
