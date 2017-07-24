<?php

namespace Laraspace\Http\Controllers;

use Illuminate\Http\Request;
use Laraspace\Http\Requests;
use Laraspace\Mail\OrderShipped;
use Laraspace\Space\Settings\Setting;

class SettingsController extends Controller
{

    /**
     * Settings Index
     *
     * @return mixed
     */
    public function index()
    {
        return view('admin.settings.index');
    }

    /**
     *
     * @param Requests\SettingsRequest|Requests\SocialSettingsRequest $request
     * @return mixed
     */
    public function postSocial(Requests\SocialSettingsRequest $request)
    {
        $sets = ['facebook', 'twitter', 'google'];

        foreach ($sets as $key) {
            Setting::setSetting($key, $request->input($key));
        }

        flash()->success('Social Settings Saved');

        return redirect()->back();
    }

    public function mail()
    {
//        $content = [
//            'title'=> 'Test Email',
//            'body'=> 'Thank you for the payment',
//            'button' => 'Buy Now'
//        ];
//
//        $receiverAddress = 'purvi.panjvani@gmail.com';
//
//        \Mail::to($receiverAddress)->send(new OrderShipped($content));
//
//        dd('mail send successfully');

        return view('admin.settings.mail');
    }

    public function postMail(Request $request)
    {
        if ($request->mailer == 'mailgun') {
            $sets = ['mail_mailgun_host', 'mail_mailgun_domain', 'mail_mailgun_secret', 'mail_from_name','mail_from_email'];

            foreach ($sets as $key) {
                Setting::setSetting($key, $request->input($key));
            }

        } else if ($request->mailer == 'sendgrid') {
            $sets = ['mail_sendgrid_host', 'mail_sendgrid_username', 'mail_sendgrid_password', 'mail_from_name','mail_from_email'];

            foreach ($sets as $key) {
                Setting::setSetting($key, $request->input($key));
            }

        } else if ($request->mailer == 'sparkpost'){
            $sets = ['mail_sparkpost_host','mail_sparkpost_username','mail_sparkpost_secret','mail_from_name','mail_from_email'];

            foreach ($sets as $key) {
                Setting::setSetting($key, $request->input($key));
            }
        } else {
            // smtp
            $sets = ['mail_smtp_host','mail_smtp_username','mail_smtp_password','mail_smtp_port','mail_smtp_encryption','mail_from_name','mail_from_email'];

            foreach ($sets as $key) {
                Setting::setSetting($key, $request->input($key));
            }
        }

        Setting::setSetting('mailer', $request->mailer);

        flash()->success('Settings Saved');

        return redirect()->back();
    }

    public function notification()
    {
        return view('admin.settings.notification');
    }

    public function notificationCreate(Request $request)
    {
        $sets = ['notify_mail'];

        foreach ($sets as $key) {
            Setting::setSetting($key, $request->input($key));
        }

        flash()->success('Settings Saved');

        return redirect()->back();
    }

    public function environment()
    {
        $env = \Storage::get('.env');

        return view('admin.settings.environment', compact('env'));
    }

    public function postEnvironment(Request $request)
    {
       \Storage::put('.env', $request->environment);

        return back();
    }
}
