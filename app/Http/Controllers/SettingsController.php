<?php

namespace Laraspace\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;
use Laraspace\Http\Requests;
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

    public function mailIndex()
    {
        return view('admin.settings.mail.index');
    }

    public function mailCreate(Request $request)
    {
        if($request->mailer == 'mailgun')
        {
            $sets = ['m_user', 'm_from', 'm_domain', 'm_secret'];

            foreach ($sets as $key) {
                Setting::setSetting($key, $request->input($key));
            }

        }
        else if($request->mailer == 'sendgrid')
        {
            $sets = ['sg_host','sg_username', 'sg_password','sg_user' ,'sg_from'];

            foreach ($sets as $key) {
                Setting::setSetting($key, $request->input($key));
            }

        }
        else{
            $sets = ['sp_user', 'sp_from', 'sp_secret'];

            foreach ($sets as $key) {
                Setting::setSetting($key, $request->input($key));
            }

        }

        flash()->success('Settings Saved');

        return redirect()->back();
    }

    public function notification()
    {
        return view('admin.settings.notification.index');
    }

    public function notificationCreate(Request $request)
    {
        $sets = ['to_mail'];

        foreach ($sets as $key) {
            Setting::setSetting($key, $request->input($key));
        }

        flash()->success('Settings Saved');

        return redirect()->back();
    }

    public function envShow()
    {
        $env = \Storage::get('.env');

        return view('admin.settings.env-file.index',compact('env'));
    }
    public function envCreate(Request $request)
    {

       \Storage::put('.env',$request->env);

        return back();
    }
}
