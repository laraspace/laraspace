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
}
