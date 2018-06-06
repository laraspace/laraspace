<?php
namespace Laraspace\Space\Settings;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public static function setSetting($key, $setting)
    {
        $old = self::whereOption($key)->first();
        cache()->forever($key, $setting);
        if ($old) {
            $old->value = $setting;
            $old->save();
            return;
        }
        $set = new Setting();
        $set->option = $key;
        $set->value = $setting;
        $set->save();
    }

    public static function getSetting($key)
    {
        if (cache()->has($key)) {
            return cache()->get($key);
        } else {
            $setting = static::whereOption($key)->first();
            if ($setting) {
                cache()->forever($key, $setting->value);

                return $setting->value;
            } else {
                return null;
            }
        }
    }
}
