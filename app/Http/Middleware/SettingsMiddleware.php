<?php
namespace App\Http\Middleware;

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
        $mailer = get_setting('mailer');

        if ($mailer == 'mailgun') {
            config()->set([
                'mail.host' => get_setting('mail_mailgun_host'),
                'mail.driver' =>  $mailer,
                'services.mailgun.domain' => get_setting('mail_mailgun_domain'),
                'services.mailgun.secret' => get_setting('mail_mailgun_secret'),
                'mail.from.name' => get_setting('mail_from_name'),
                'mail.from.address' => get_setting('mail_from_email'),
            ]);
        } elseif ($mailer == 'sendgrid') {
            config()->set([
                'mail.host' => get_setting('mail_sendgrid_host'),
                'mail.driver' => 'smtp',
                'mail.username' => get_setting('mail_sendgrid_username'),
                'mail.password' => get_setting('mail_sendgrid_password'),
                'mail.from.name' => get_setting('mail_from_name'),
                'mail.from.address' => get_setting('mail_from_email'),
            ]);
        } elseif ($mailer == 'sparkpost') {
            config()->set([
                'mail.driver' => $mailer,
                'services.mailgun.secret' => get_setting('mail_sparkpost_secret'),
                'mail.from.name' => get_setting('mail_from_name'),
                'mail.from.address' => get_setting('mail_from_email'),
            ]);
        } elseif ($mailer == 'smtp') {
            config()->set([
                'mail.host' => get_setting('mail_smtp_host'),
                'mail.driver' => $mailer,
                'mail.username' => get_setting('mail_smtp_username'),
                'mail.password' => get_setting('mail_smtp_password'),
                'mail.port' => get_setting('mail_smtp_port'),
                'mail.encryption' => get_setting('mail_smtp_encryption'),
                'mail.from.name' => get_setting('mail_from_name'),
                'mail.from.address' => get_setting('mail_from_email'),
            ]);
        }
        
        return $next($request);
    }
}
