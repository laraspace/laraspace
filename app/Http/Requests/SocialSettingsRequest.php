<?php

namespace Laraspace\Http\Requests;

use Laraspace\Http\Requests\Request;

class SocialSettingsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'facebook' => 'required|url',
            'google' => 'required|url',
            'twitter' => 'required|url',
        ];
    }
}
