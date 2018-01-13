<?php
namespace Laraspace\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Laraspace\Http\Requests;
use Laraspace\Mail\TestMail;
use Laraspace\Space\Settings\Setting;
use Mail;

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
        return view('admin.settings.mail');
    }

    public function postMail(Request $request)
    {
        if ($request->mailer == 'mailgun') {
            $sets = [
                'mail_mailgun_host',
                'mail_mailgun_domain',
                'mail_mailgun_secret',
                'mail_from_name',
                'mail_from_email'
            ];
            foreach ($sets as $key) {
                Setting::setSetting($key, $request->input($key));
            }
        } elseif ($request->mailer == 'sendgrid') {
            $sets = [
                'mail_sendgrid_host',
                'mail_sendgrid_username', 
                'mail_sendgrid_password', 
                'mail_from_name',
                'mail_from_email'
            ];
            foreach ($sets as $key) {
                Setting::setSetting($key, $request->input($key));
            }
        } elseif ($request->mailer == 'sparkpost') {
            $sets = [
                'mail_sparkpost_secret',
                'mail_from_name',
                'mail_from_email'
            ];
            foreach ($sets as $key) {
                Setting::setSetting($key, $request->input($key));
            }
        } else {
            $sets = [
                'mail_smtp_host',
                'mail_smtp_username',
                'mail_smtp_password',
                'mail_smtp_port',
                'mail_smtp_encryption',
                'mail_from_name',
                'mail_from_email'
            ];
            foreach ($sets as $key) {
                Setting::setSetting($key, $request->input($key));
            }
        }
        Setting::setSetting('mailer', $request->mailer);
        flash()->success('Settings Saved');

        return redirect()->back();
    }

    public function sendTestMail(Request $request)
    {
        $this->validate($request, [
            'to' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Mail::to($request->to)->send(new TestMail($request->subject, $request->message));
        flash()->success('Email Sent');

        return redirect()->back();
    }
}
