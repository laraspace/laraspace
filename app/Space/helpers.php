<?php
use App\Space\Settings\Setting;

function set_active($path, $active = 'active')
{
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

function is_url($path)
{
    return call_user_func_array('Request::is', (array)$path);
}

function clean_slug($string)
{
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

    return \Illuminate\Support\Str::lower(preg_replace('/[^A-Za-z0-9\-]/', '', $string)); // Removes special chars.
}

function get_setting($key)
{
    return Setting::getSetting($key);
}
