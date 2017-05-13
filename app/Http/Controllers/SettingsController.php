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

    public function mailCreate(Requests\MailerRequest $request)
    {

        $sets = [ 'host','port','from_user','from','username', 'password' ];

        foreach ($sets as $key) {
            Setting::setSetting($key, $request->input($key));
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
}
